<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memesan extends Model
{
    protected $fillable=[
        'id_kamar',
        'id_user',
        'jenis_kamar',
        'harga',
        'status',
        'Checkin',
        'Checkout'];
    function kamar(){
        return $this->belongsTo(Kamar::class);
    }
    function tamu(){
        return $this->hasOne(User::class);
    }
    function konfirmasi(){
        return $this->hasOne(Konfirmasi::class);
    }

}
