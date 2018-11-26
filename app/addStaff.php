<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addStaff extends Model
{
    protected $table="add_staffs";
    protected $primaryKey ="id";
    protected $fillable=[
        'nama_staff',
        'alamat_staff',
        'umur_staff',
        'no_tlp_staff',
        'gaji_staff'];
}
