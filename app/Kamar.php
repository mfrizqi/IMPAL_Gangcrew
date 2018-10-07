<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $table="add_kamars";
    protected $primaryKey ="id_kamar";
    protected $fillable=['jenis_kamar','harga_kamar','status_kamar'];
}
