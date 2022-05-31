<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Create;
use App\Models\Employee\Employee;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $employees = Employee::query()->paginate(15);

        return view('user.index')->with(compact('employees'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Create $request)
    {
        $data = $request->validated();

        $user = User::create([
            'name' => $data['name'] ?? null,
            'email' => $data['email'] ?? null,
            'password' => bcrypt('123456')
        ]);

        $employee = Employee::create([
            'name' => $data['name'] ?? null,
            'phone' => $data['phone'] ?? null,
            'mobile' => $data['mobile'] ?? null,
            'employee_role_id' => $data['role'] ?? null,
            'salary' => $data['salary'] ?? null,
            'user_id' => $user->id,
        ]);

        return redirect()->route('users')->with('status', 'Usuário cadastrado com sucesso.');
    }
}
