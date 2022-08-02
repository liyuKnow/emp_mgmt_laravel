<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeId extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'employee_id_no',
        'employee_id_type',
        'employee_id_img',
    ];
}
