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
        Schema::create('activites', function (Blueprint $table) {
            $table->id();
            $table->mediumText('titre');
            $table->longText('description');
            $table->date('date_deroulement');
            $table->string('photo');
            $table->string('niveau');
            $table->string('type_activite');
            $table->foreignId('domaine_id')->constrained()->onDelete('cascade');
            $table->foreignId('partner_id')->constrained()->onDelete('cascade');
            //$table->unsignedBigInteger('partenaire_id')->nullable();
            //$table->unsignedBigInteger('domaine')->nullable();

            //$table->foreign('partenaire_id')->references('id')->on('partenaires')->onDelete('cascade');
            //$table->foreign('domaine_id')->references('id')->on('domaines')->onDelete('cascade');
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
        Schema::dropIfExists('activites');
    }
};
