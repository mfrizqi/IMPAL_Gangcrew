<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konfirmasi extends Model
{
    protected $fillable=[
        'id_memesan',
        'status'];
    function memesan(){
        return $this->hasOne(Memesan::class);
    }

}
