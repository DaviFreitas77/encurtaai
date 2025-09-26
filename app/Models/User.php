<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;

class User extends Authenticable
{
    protected $table = "tb_user";
    protected $fillable = ['name','email','password','role'];
    public $timestamps = true;
}
