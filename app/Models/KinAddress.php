<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KinAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'phone_no_1',
        'phone_no_2',
        'sub_city',
        'woreda',
        'house_no',
    ];
}
