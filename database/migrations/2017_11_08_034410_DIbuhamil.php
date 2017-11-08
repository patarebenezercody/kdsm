<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DIbuhamil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ibuhamils', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nokk');
            $table->string('namaibuhamil');
            $table->string('umur');
            $table->string('alamat');
            $table->string('namasuami');
            $table->string('jlhanak');
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
        Schema::dropIfExists('ibuhamils');
    }
}
