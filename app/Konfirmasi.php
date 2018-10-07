<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konfirmasi extends Model
{
    protected $table="add_konfirmasis";
    protected $primaryKey ="id_konfirmasi";
    protected $fillable=['id_memesan','status'];
}
