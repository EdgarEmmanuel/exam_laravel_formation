<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string("nom")->unique();
            $table->integer("duree");
            $table->text("description");
            $table->boolean("is_started");
            $table->datetime("date_debut");

            // relationships with Referentiels table
            $table->unsignedBigInteger('referentiel_id');
            $table->foreign('referentiel_id')->references('id')->on('referentiels');

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
        Schema::dropIfExists('formations');
    }
}
