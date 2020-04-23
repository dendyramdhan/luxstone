<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    protected $table= 'kontaks';
    protected $fillable = ['kontakid', 'nama', 'email', 'mobile_1', 'mobile_2', 'aktif'];
}
