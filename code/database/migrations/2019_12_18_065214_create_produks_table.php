<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->string('produkid',8)->unique();
            $table->string('nama_prd');
            $table->string('kat_prd');
            $table->integer('stok');
            $table->string('stok_satuan');
            $table->string('warna')->nullable();
            $table->text('deskripsi')->nullable();
            $table->integer('harga');
            $table->string('sat_harga');
            $table->boolean('del_stat')->default(false);
            $table->timestamps();
            $table->primary('produkid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produks');
    }
}
