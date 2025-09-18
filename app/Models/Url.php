<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    protected $table = ['tb_url'];
    protected $fillable = ['url_original', 'url_shortened', 'slug',
    'click_count', 'status', 'fk_user'];
    public $timestamps = true;
}
