<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReciepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recieps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naziv_recepta');
            $table->text('priprema');
            $table->integer('user_id');
            $table->text('slika');
            $table->timestamps();

            $table->unsignedInteger('kategorija_id');
            $table->foreign('kategorija_id')->references('id')->on('kategorije2s');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recieps');
    }
}
