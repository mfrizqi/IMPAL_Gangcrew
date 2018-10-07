<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memesan extends Model
{
    protected $table="memesans";
    protected $primaryKey ="id_memesan";
    protected $fillable=['id_kamar','id_tamu','jenis_kamar','harga','status'];
}
