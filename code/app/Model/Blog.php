<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';
    protected $fillable = ['blogid','title', 'kilasan', 'isi', 'highlight', 'created_by', 'gambar', 'del_stat'];
}
