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
            $table->increments('id');
            $table->integer('id_kamar')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->string('jenis_kamar');
            $table->double('harga');
            $table->boolean('status')->default(false);
            $table->date('Checkin');
            $table->date('Checkout');
            $table->foreign('id_kamar')
                ->references('id')
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
