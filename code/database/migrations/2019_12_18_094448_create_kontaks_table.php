<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKontaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontaks', function (Blueprint $table) {
            $table->string('kontakid',8)->unique();
            $table->string('nama', 20);
            $table->string('email', 50)->unique();
            $table->string('mobile_1',13);
            $table->string('mobile_2',13)->nullable();
            $table->boolean('aktif')->default(true);
            $table->timestamps();
            $table->primary('kontakid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kontaks');
    }
}
