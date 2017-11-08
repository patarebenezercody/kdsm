<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Uraian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uraiantables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('instansi');
            $table->string('alamat');
            $table->string('nohp');
            $table->string('satuan');
            $table->string('jenisdonasi');
            $table->string('perkiraannilai');
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
        Schema::dropIfExists('uraiantables');
       
    }
}
