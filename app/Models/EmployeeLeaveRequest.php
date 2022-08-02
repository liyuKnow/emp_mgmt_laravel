<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeLeaveRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'leave_type',
        'leave_start_date',
        'leave_end_date',
        'leave_reason',
        'leave_approval_by',
        'leave_approver_status',
        'leave_approver_comment',
        'leave_approver_date',
    ];
}
