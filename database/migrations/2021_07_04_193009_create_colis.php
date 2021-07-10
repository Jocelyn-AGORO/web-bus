<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->string('etat');
            $table->unsignedInteger('exp_id');
            $table->unsignedInteger('agence_id');
            $table->timestamps();
            $table->foreign('exp_id')
                ->references('id')
                ->on('expediteurs');
            $table->foreign('agence_id')
                ->references('id')
                ->on('agences');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colis');
    }
}
