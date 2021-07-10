<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PassagerVoyage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passager_voyage',function (Blueprint $table){
            $table->unsignedInteger('passager_id');
            $table->unsignedInteger('voyage_id');
            $table->foreign('passager_id')
                ->references('id')
                ->on('passagers');
            $table->foreign('voyage_id')
                ->references('id')
                ->on('voyages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('passager_voyage');
    }
}
