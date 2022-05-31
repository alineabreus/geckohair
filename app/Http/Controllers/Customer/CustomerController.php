<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Create;
use App\Http\Requests\User\Update;
use App\Models\Employee\Employee;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $employees = Employee::query()->paginate(15);

        return view('customer.index')->with(compact('employees'));
    }

    public function create()
    {
        return view('customer.create');
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

        return redirect()->route('customers')->with('message', 'Usuário cadastrado com sucesso.');
    }

    public function delete($email)
    {
        $user = User::query()->where('email', $email)->first();

        Employee::query()->where('user_id', $user->id)->delete();
        $user->delete();

        return redirect()->back()->with('message', 'Usuário excluído com sucesso.');
    }

    public function edit($id)
    {
        $user = User::query()->where('id', $id)->first();

        return view('customer.update')->with(compact('user'));
    }

    public function update(Update $request, $id)
    {
        $data = $request->validated();

        $user = User::query()->where('id', $id)->update([
            'name' => $data['name'] ?? null,
            'email' => $data['email'] ?? null
        ]);

        $employee = Employee::query()->where('user_id', $id)->update([
            'name' => $data['name'] ?? null,
            'phone' => $data['phone'] ?? null,
            'mobile' => $data['mobile'] ?? null,
            'employee_role_id' => $data['role'] ?? null,
            'salary' => $data['salary'] ?? null,
        ]);

        return redirect()->route('customers')->with('message', 'Usuário alterado com sucesso.');
    }
}
