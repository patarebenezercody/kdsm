<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLansia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lansiatables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nokk');
            $table->string('namalansia');
            $table->string('ttl');
            $table->string('umur');
            $table->string('status');
            $table->string('alamat');
            $table->string('pekerjaan');
            $table->text('keterangan');
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
        Schema::dropIfExists('lansiatables');
        
    }
}
