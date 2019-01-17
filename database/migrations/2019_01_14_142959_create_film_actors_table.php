<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmActorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film_actors', function (Blueprint $table) {
            $table->increments('id');
            //$table->string('votes')->default(2);
            $table->unsignedInteger('film_id')->index();
            $table->unsignedInteger('actor_id')->index();
            $table->timestamps();

            $table->foreign('film_id')->references('id')->on('films');
            $table->foreign('actor_id')->references('id')->on('actors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('film_actors');
    }
}
