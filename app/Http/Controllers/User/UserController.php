<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Employee\Employee;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $employees = Employee::query()->get();

        return view('user.index')->with(compact('employees'));
    }
}
