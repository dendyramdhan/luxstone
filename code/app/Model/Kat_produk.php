<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kat_produk extends Model
{
    protected $table = 'kat_produks';
    protected $fillable = ['id','nama_kat_prd', 'keterangan'];
}
