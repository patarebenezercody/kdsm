<?php

namespace App\Kelurahan;


use Illuminate\Database\Eloquent\Model;

class Partisipasi extends Model
{
    //
    protected $table = 'partisipasitables';
	protected $fillable = ['id','namakegiatan','waktukegiatan','alamatkegiatan','keterangan'];
}
