<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->string('blogid',8)->unique();
            $table->string('title');
            $table->text('kilasan');
            $table->text('isi');
            $table->text('highlight');
            $table->string('created_by');
            $table->string('gambar');
            $table->boolean('del_stat')->default(false);
            $table->timestamps();
            $table->primary('blogid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
