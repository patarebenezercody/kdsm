<?php

namespace App\Kelurahan;

use Illuminate\Database\Eloquent\Model;

class DBalitaPuskes extends Model
{
 	// Daftar Balita 0-59 Bulan Yang Ada Di Wilayah Kerja PUSKESMAS
	// PADANG BULAN KELURAHAN DARAT KEC.MEDAN BARU TAHUN 2017
	protected $table = 'balitas';
	protected $fillable = ['id','namaanak', 'ttl', 'umur','jkelamin','namaorangtua','nokk'];
}
