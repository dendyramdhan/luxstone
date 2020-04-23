<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGmbrProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gmbr_produks', function (Blueprint $table) {
            $table->string('id_produk');
            $table->string('gambar');
            $table->timestamps();
            $table->foreign('id_produk')->references('produkid')->on('produks')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gmbr_produks');
    }
}
