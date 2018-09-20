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
            $table->integer('id_tamu')->unsigned();
            $table->string('jenis_kamar');
            $table->double('harga');
            $table->string('status');
            $table->foreign('id_tamu')
                ->references('id_tamu')
                ->on('add_tamus')
                ->onDelete('cascade');
            $table->foreign('id_kamar')
                ->references('id_kamar')
                ->on('kamars')
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
