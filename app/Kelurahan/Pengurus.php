<?php

namespace App\Kelurahan;

use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    // Daftar Pengurus Rumah Ibadah Dan Imam MESJID Penerima Bantuan
    // Pemerintah Kota MEDAN Tahun 2017
    protected $table = 'pengurustables';
	protected $fillable = ['id','nama', 'nik','jkelamin','ttl','alamat','namatempatibadah','alamattempatibadah','norekbanksumut','kantorcbgbanksumut','nohp'];
}
