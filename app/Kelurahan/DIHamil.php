<?php

namespace App\Kelurahan;


use Illuminate\Database\Eloquent\Model;

class DIHamil extends Model
{
    //Daftar Ibu Hamil Kelurahan Darat KEC.Medan Baru Tahun 2017
    protected $table = 'ibuhamils';
	protected $fillable = ['nokk', 'namaibuhamil','umur','alamat','namasuami','jlhanak','pekerjaan','keterangan'];
}
