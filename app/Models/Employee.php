<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'emp_img',
        'job_title',
        'status',
    ];

    public function employeeAddress()
    {
        return $this->hasOne(EmployeeAddress::class);
    }

    public function employeeId()
    {
        return $this->hasOne(EmployeeId::class);
    }
}
