<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_managers', function (Blueprint $table) {
            $table->increments('id_manager');
            $table->string('nama_manager');
            $table->string('alamat_manager');
            $table->integer('umur_manager');
            $table->string('no_tlp_manager');
            $table->double('gaji_manager');
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
        Schema::dropIfExists('add_managers');
    }
}
