<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_staffs', function (Blueprint $table) {
            $table->increments('id_staff');
            $table->string('nama_staff');
            $table->string('alamat_staff');
            $table->integer('umur_staff');
            $table->string('no_tlp_staff');
            $table->double('gaji_staff');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_staffs');
    }
}
