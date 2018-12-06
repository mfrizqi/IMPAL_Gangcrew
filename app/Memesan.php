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
        
    public function kamar(){
        return $this->belongsTo(Kamar::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
