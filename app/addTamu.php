<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addTamu extends Model
{
    protected $table="add_tamus";
    protected $primaryKey ="id_tamu";
    protected $fillable=['nama_tamu','alamat_tamu','no_tlp_tamu'];
}
