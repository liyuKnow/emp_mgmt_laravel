<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeKin extends Model
{
    use HasFactory;

    protected $fillable = ['employee_id', 'kin_id'];
}
