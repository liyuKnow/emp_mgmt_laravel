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
        'date_employed',
        'date_dismissed',
        'salary',
        'leave_status',
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

    public function employeeLeaveRequest()
    {
        return $this->hasMany(EmployeeLeaveRequest::class);
    }
}
