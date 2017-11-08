<?php

namespace App\Kelurahan;


use Illuminate\Database\Eloquent\Model;

class Lansia extends Model
{
    //
    protected $table = 'lansiatables';
	protected $fillable = ['id','nokk','namalansia','ttl','umur','status','alamat','pekerjaan','keterangan'];
}
