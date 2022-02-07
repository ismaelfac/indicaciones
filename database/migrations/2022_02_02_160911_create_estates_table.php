<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estates', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('garajes')->nullable();
            $table->string('usefulRoom')->nullable();
            $table->enum('typeEstate', ['NO DEFINIDO','APARTAMENTO', 'CASA COMERCIAL', 'CASA VIVIENDA', 'BODEGA', 'APARTA-STUDIO'])->default('NO DEFINIDO');
            $table->boolean('isActive')->default(false);
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
        Schema::dropIfExists('estates');
    }
}
