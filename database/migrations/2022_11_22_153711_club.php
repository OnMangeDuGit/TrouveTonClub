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
        Schema::create('club', function (Blueprint $table) {
            $table->id()->autoIncrement() ;
            $table->string('nomclub',255);
            $table->string('email_club',50);
            $table->string('mdp_club', 100);
            $table->string('tel_club',10);
            $table->string('adresse_club',255);
            $table->string('cde_departement_club',5);
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
        Schema::dropIfExists('club');
    }
};
