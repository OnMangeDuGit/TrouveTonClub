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
        Schema::create('joueur', function (Blueprint $table) {
            $table->id()->autoIncrement() ;
            $table->string('nomjoueur',255);
            $table->string('email_joueur',50);
            $table->string('mdp_joueur', 100);
            $table->string('num_tel',10);
            $table->string('poste_joueur',150);
            $table->string('cde_departement',5);
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
        Schema::dropIfExists('joueur');
    }
};
