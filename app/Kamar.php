<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $fillable=[
        'jenis_kamar',
        'harga_kamar',
        'status_kamar'];
    function memesan(){
        return $this->hasMany(Memesan::class);
    }
}
