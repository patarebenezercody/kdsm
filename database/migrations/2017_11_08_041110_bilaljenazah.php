<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bilaljenazah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bilaljenazahs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namabilal');
            $table->string('nik');
            $table->string('jkelamin');
            $table->string('ttl');
            $table->string('alamatbilal');
            $table->string('lokasitugas');
            $table->string('norekbanksumut');
            $table->text('kantorcbgbanksumut');
            $table->text('nohp');
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
        Schema::dropIfExists('bilaljenazahs');
    }
}
