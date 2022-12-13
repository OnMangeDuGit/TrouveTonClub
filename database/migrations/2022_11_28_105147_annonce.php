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
        schema::disableForeignKeyConstraints();
        Schema::create('anonnce', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('libelle', 255);
            $table->string('poste_recherche', 255);
            $table->string('description', 255);
            $table->integer('salaire', 0)->nullable();
            $table->unsignedbigInteger('club_id')->nullable();
            $table->unsignedbigInteger('joueur_id')->nullable();
            $table->foreign('club_id')->references('id')
                ->on('club');
            $table->foreign('joueur_id')->references('id')
                ->on('joueur');
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
        schema::disableForeignKeyConstraints();
        Schema::dropIfExists('annonce');
    }
};
