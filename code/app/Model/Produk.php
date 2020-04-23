<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produks';
    protected $fillable = ['produkid','nama_prd', 'kat_prd', 'stok', 'stok_satuan', 'warna', 'deskripsi', 'harga', 'sat_harga', 'del_stat'];
    
    public function pic_produk()
    {
        return $this->hasmany(Gmbr_produk::class, 'id_produk', 'produkid');
    }

    public function get_katprd()
    {
        return $this->hasone(Kat_produk::class, 'id', 'kat_prd');
    }

}
