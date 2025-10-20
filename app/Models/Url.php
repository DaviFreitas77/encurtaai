<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    protected $table = 'tb_url';
    protected $fillable = ['name_url','url_original', 'url_shortened', 'slug',
    'click_count', 'status', 'fk_user','qr_code_url','expiration_date','limited_clicks'];
    public $timestamps = true;
}
