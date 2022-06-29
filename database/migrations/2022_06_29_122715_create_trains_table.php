<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 20);
            $table->string('starting_station', 20);
            $table->string('arriving_station', 20);
            $table->time('departure', 6);
            $table->time('arrival', 6);
            $table->string('code', 20);
            $table->unsignedTinyInteger('wagon');
            $table->boolean('on_time')->default(1);
            $table->boolean('delay')->default(0);
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
        Schema::dropIfExists('trains');
    }
}
