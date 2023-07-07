<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnes', function (Blueprint $table) {
            $table->id();
            $table->string('matricule');
            $table->date('date_de_paie');
            $table->string('nom');
            $table->string('prenom');
            $table->date('date_de_naissance');
            $table->string('situation_familiale');
            $table->integer('enfinp');
            $table->string('service');
            $table->string('position');
            $table->string('echelle');
            $table->string('echelon');
            $table->string('MCNRPS');
            $table->integer('thnor');
            $table->integer('hnor');
            $table->integer('h25');
            $table->integer('h50');
            $table->integer('Hfer');
            $table->integer('Snuit');
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
        Schema::dropIfExists('personnes');
    }
}
