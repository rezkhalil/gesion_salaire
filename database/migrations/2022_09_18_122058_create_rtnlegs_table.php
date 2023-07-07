<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRtnlegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rtnlegs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('matricule');
            $table->foreign('matricule')->references('id')->on('personnes');
            $table->unsignedBigInteger('service');
            $table->foreign('service')->references('id')->on('personnes');
            $table->integer('valhs');
            $table->integer('valht');
            $table->integer('prmres');
            $table->integer('imposable');
            $table->integer('impotnew');
            $table->string('CFA');
            $table->integer('prempr');
            $table->integer('CRmois');
            $table->integer('CDmois');
            $table->integer('Cpmois');
            $table->integer('MUTmois');
            $table->integer('net');
            $table->string('AFTA');
            $table->string('AFTB');
            $table->integer('gain');
            $table->integer('retenue');
            $table->unsignedBigInteger('personne_id');
            $table->foreign('personne_id')->references('id')->on('personnes');
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
        Schema::dropIfExists('rtnlegs');
    }
}
