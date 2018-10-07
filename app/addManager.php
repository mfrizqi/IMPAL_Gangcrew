<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addManager extends Model
{
    protected $table="add_managers";
    protected $primaryKey ="id_manager";
    protected $fillable=['nama_manager','alamat_manager','umur_manager','no_tlp_manager','gaji_manager'];
}
