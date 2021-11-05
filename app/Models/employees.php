<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'emp_fname',
        'emp_lname',
        'emp_email',
        'emp_gender',
        'emp_joining_date',
        'emp_phone',
        'emp_address',
        'emp_username',
        'emp_password',
        'emp_confirmpassword',
        'emp_role',
        'remember_token'
    ];
    protected $hidden = [
        'password',
        'remember_token'
    ];
}
