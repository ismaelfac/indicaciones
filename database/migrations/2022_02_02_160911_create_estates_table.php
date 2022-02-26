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
            $table->enum('typeEstate', ['NO DEFINIDO','APARTAMENTO', 'LOCAL', 'CASA', 'BODEGA', 'APARTA-STUDIO', 'GARAJE', 'CUARTO UTIL'])->default('NO DEFINIDO');
            $table->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->boolean('isSharedElectricityMeter')->default(false);
            $table->boolean('isSharedWaterMeter')->default(false);
            $table->boolean('isSharedGasMeter')->default(false);
            $table->boolean('isGarage')->default(false);
            $table->boolean('isUseFulRoom')->default(false);
            $table->mediumText('observations')->nullable();
            $table->boolean('isActive')->default(false);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('estates');
    }
}
