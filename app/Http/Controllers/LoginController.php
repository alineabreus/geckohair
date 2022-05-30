<?php

namespace App\Http\Controllers;

use App\Events\Mails\ForgotSendMail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function login()
    {
        if (auth()->check()) {
            return redirect()->route('home');
        }

        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password', 1);

        if (auth()->attempt($credentials)) {

            return redirect()->intended('/');
        } else {

            return redirect()->back()->withErrors('Credenciais Inválidas');
        }
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('login');
    }

    public function forgot()
    {
        return view('auth.forgot');
    }

    public function sendEmailForgot(Request $request)
    {
        $request->validate(['email' => 'required|email|exists:users,email'],
            ['exists' => 'Sem cadastro para o e-mail informado.']);

        $email = $request->input('email');

        $token = Str::random(60);

        DB::table('password_resets')->insert([
            'email' => $email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        $user = User::where('email', $email)->first()->id;

        Event::dispatch(new \App\Events\ForgotSendMail($user, $token, 'company'));

        return redirect()->back()->with('status', 'Senha de acesso enviada para o e-mail');
    }

    public function resetPassword($token)
    {
        return view('auth.reset', ['token' => $token]);
    }

    public function resetPasswordUpdate(Request $request, $token)
    {
        if (!$passwordResets = DB::table('password_resets')->where('token', $token)->first())
        {
            return redirect()->back()->with('token inválido.');
        }

        if (!$user = User::where('email', $passwordResets->email)->first())
        {
            return redirect()->back()->with('usuário não existe.');
        }

        $user->password = bcrypt($request->input('password'));
        $user->save();

        DB::table('password_resets')->where('email', $passwordResets->email)->delete();

        Auth::attempt([
            'email' => $user->email,
            'password' => $request->input('password'),
        ]);

        return redirect()->route('home')->with('status', 'Senha alterada com sucesso');
    }
}
