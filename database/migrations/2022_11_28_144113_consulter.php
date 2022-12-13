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
        Schema::create('consulter', function (Blueprint $table) {
            //$table->boolean('favoris');
            $table->unsignedbigInteger('annonce_id')->nullable();
            $table->foreign('annonce_id')->references('id')
                ->on('annonce');
            $table->date('date_consultation');
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
        Schema::dropIfExists('consulter');
    }
};
