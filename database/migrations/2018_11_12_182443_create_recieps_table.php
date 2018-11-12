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
            $table->integer('kategorija_id');
            $table->text('slika');
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
        Schema::dropIfExists('recieps');
    }
}
