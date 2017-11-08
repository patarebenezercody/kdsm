<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Partisipasitables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partisipasitables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namakegiatan');
            $table->string('waktukegiatan');
            $table->string('alamatkegiatan');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partisipasitables');
        
    }
}
