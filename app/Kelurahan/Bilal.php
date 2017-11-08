<?php

namespace App\Kelurahan;


use Illuminate\Database\Eloquent\Model;

class Bilal extends Model
{
    //
    protected $table = 'bilaljenazahs';
	protected $fillable = ['id','namabilal','nik','jkelamin','ttl','alamatbilal','lokasitugas','norekbanksumut','kantorcbgbanksumut','nohp'];
}
