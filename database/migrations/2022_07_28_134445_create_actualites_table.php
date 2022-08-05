<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actualites', function (Blueprint $table) {
            $table->id();
            $table->mediumText('titre');
            $table->longText('description');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->string('photo');
            $table->string('cout');
            $table->string('statut');
            $table->string('zone_intervention');
            $table->foreignId('domaine_id')->constrained();
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
        Schema::dropIfExists('actualites');
    }
};
