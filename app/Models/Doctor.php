<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends User
{
    use HasFactory;
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'address',
        'phone_number'
    ];
}
