<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\Create;
use App\Http\Requests\Customer\Update;
use App\Models\Customer;
use App\Models\Employee\Employee;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::query()->paginate(15);

        return view('customer.index')->with(compact('customers'));
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Create $request)
    {
        $data = $request->validated();

        $customer = Customer::create([
            'name' => $data['name'] ?? null,
            'observacao' => $data['observacao'] ?? null,
            'birthday' => $data['birthday'] ?? null,
            'city' => $data['city'] ?? null,
            'district' => $data['district'] ?? null,
            'street' => $data['street'] ?? null,
            'number' => $data['number'] ?? null,
            'comp' => $data['comp'] ?? null,
            'phone' => $data['phone'] ?? null,
            'mobile' => $data['mobile'] ?? null,
            'email' => $data['email'] ?? null,
        ]);

        return redirect()->route('customers')->with('message', 'Cliente cadastrado com sucesso.');
    }

    public function delete($email)
    {
        $customer = Customer::query()->where('email', $email)->delete();

        return redirect()->back()->with('message', 'Cliente excluído com sucesso.');
    }

    public function edit($id)
    {
        $customer = Customer::query()->where('id', $id)->first();

        return view('customer.update')->with(compact('customer'));
    }

    public function update(Update $request, $id)
    {
        $data = $request->validated();

        $customer = Customer::query()->where('id', $id)->update([
            'name' => $data['name'] ?? null,
            'observacao' => $data['observacao'] ?? null,
            'birthday' => $data['birthday'] ?? null,
            'city' => $data['city'] ?? null,
            'district' => $data['district'] ?? null,
            'street' => $data['street'] ?? null,
            'number' => $data['number'] ?? null,
            'comp' => $data['comp'] ?? null,
            'phone' => $data['phone'] ?? null,
            'mobile' => $data['mobile'] ?? null,
            'email' => $data['email'] ?? null,
        ]);

        return redirect()->route('customers')->with('message', 'Cliente alterado com sucesso.');
    }
}
