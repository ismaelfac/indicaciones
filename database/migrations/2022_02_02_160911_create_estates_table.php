<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstatesTable extends Migration
{
    public function up()
    {
        Schema::create('estates', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('realEstateRegistration');
            $table->enum('typeEstate', ['NO DEFINIDO','APARTAMENTO', 'CASA COMERCIAL', 'CASA VIVIENDA', 'BODEGA', 'APARTA-STUDIO', 'GARAJE', 'CUARTO UTIL'])->default('NO DEFINIDO');
            $table->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->boolean('isActive')->default(false);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('estates');
    }
}
