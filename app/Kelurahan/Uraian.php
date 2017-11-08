<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uraian extends Model
{
	protected $table = 'uraiantables';
	protected $fillable = ['id','nama','instansi','alamat','nohp','satuan','jenisdonasi','perkiraannilai'];
}
