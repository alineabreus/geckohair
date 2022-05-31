<?php

namespace App\Models\Employee;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'mobile',
        'employee_role_id',
        'salary',
        'user_id'
    ];

    public function role()
    {
        return $this->hasOne(Role::class, 'id', 'employee_role_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
