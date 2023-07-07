<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRbgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rbgs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('matricule');
            $table->foreign('matricule')->references('id')->on('personnes');
            $table->string('code');
            $table->string('montant');
            $table->string('libel');
            $table->enum('etat', ['positive', 'negative']);
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
        Schema::dropIfExists('rbgs');
    }
}
