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
    public function up() {
        /*
        Les migrations sont effectuées par ordre alphabétique, cela peut générer un problème avec les clés
        étrangères. Cette ligne désactive le contrôle de l’intégrité référentielle le temps de la migration
        */
        Schema::disableForeignKeyConstraints();
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('nomformation', 300);
            $table->date('datedebut')->nullable();
            $table->smallInteger('duree');
            $table->char('unite', 10);
            /*
            Il faut respecter le nommage de la clé étrangère : categorie_id (voir plus bas lors de la modification du
            modèle Formation
            */

             $table->unsignedBigInteger('categorie_id')->nullable();
             $table->foreign('categorie_id')->references('id')
                 ->on('categories')
                 /*
                 restrict empêche la suppression ou la modification d’une catégorie qui correspond à des films
                 */
                 ->onDelete('restrict')->onUpdate('restrict');
             $table->timestamps();
             });
        Schema::disableForeignKeyConstraints();
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formations');
        Schema::disableForeignKeyConstraints();
    }
};
