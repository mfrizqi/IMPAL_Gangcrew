<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemesansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memesans', function (Blueprint $table) {
            $table->increments('id_memesan');
            $table->integer('id_kamar')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->string('jenis_kamar');
            $table->double('harga');
            $table->string('status');
            $table->foreign('id_kamar')
                ->references('id_kamar')
                ->on('kamars')
                ->onDelete('cascade');
            $table->foreign('id_user')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');    
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
        Schema::dropIfExists('memesans');
    }
}
