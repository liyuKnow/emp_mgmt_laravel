<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kin extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'emp_img',
    ];

    public function kinAddress()
    {
        return $this->hasOne(KinAddress::class);
    }
}
