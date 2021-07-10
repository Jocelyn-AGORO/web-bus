<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoyages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voyages', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('date');
            $table->float('duree');
            $table->unsignedInteger('places');
            $table->string('parcours');
            $table->unsignedInteger('bus_id');
            $table->unsignedInteger('conducteur_id');
            $table->unsignedInteger('admin_id');
            $table->timestamps();
            $table->foreign('bus_id')
                ->references('id')
                ->on('buses');
            $table->foreign('conducteur_id')
                ->references('id')
                ->on('conducteurs');
            $table->foreign('admin_id')
                ->references('id')
                ->on('administrateurs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voyages');
    }
}
