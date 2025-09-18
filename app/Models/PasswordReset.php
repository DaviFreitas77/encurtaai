<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    protected $table = 'tb_password_reset';
    protected $fillable = ['email','cod'];
    public $timestamps = true;
}
