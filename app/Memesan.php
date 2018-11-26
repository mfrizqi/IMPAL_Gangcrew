<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memesan extends Model
{
    protected $table="memesans";
    protected $primaryKey ="id";
    protected $fillable=[
        'id_kamar',
        'id_tamu',
        'jenis_kamar',
        'harga',
        'status'];
    function kamar(){
        return $this->belongsTo('app/kamar');
    }
    function tamu(){
        return $this->belongsTo('app/addTamu');
    }
    function konfirmasi(){
        return $this->hasOne('app/konfirmasi');
    }

}
