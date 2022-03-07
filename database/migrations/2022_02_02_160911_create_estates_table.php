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
            $table->boolean('isSharedElectricityMeter')->default(false);
            $table->string('policyElectricity');
            $table->boolean('isSharedWaterMeter')->default(false);
            $table->string('policyWater');
            $table->boolean('isSharedGasMeter')->default(false);
            $table->string('policyGas');
            $table->boolean('isGarage')->default(false);
            $table->boolean('isUseFulRoom')->default(false);
            $table->boolean('hasAdministration')->default(false);
            $table->enum('paymentInFavorOf', ['NO DEFINIDO','ADMINISTRACION', 'TITULAR'])->default('NO DEFINIDO');
            $table->enum('typeDni', ['NO DEFINIDO','CEDULA DE CIUDADANIA', 'NIT', 'CEDULA DE EXTRANJERIA', 'PASAPORTE'])->default('NO DEFINIDO');
            $table->string('dni')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->enum('bankingEntity', ['NO DEFINIDO','BANCAMIA S.A.', 'BANCO AGRARIO', 'BANCO AV VILLAS', 'BANCO BBVA COLOMBIA S.A.', 'BANCO CAJA SOCIAL','BANCO COOPERATIVO COOPCENTRAL', 'BANCO CREDIFINANCIERA', 'BANCO DAVIVIENDA', 'BANCO DE BOGOTA', 'BANCO DE OCCIDENTE', 'BANCO FALABELLA', 'BANCO GNB SUDAMERIS', 'BANCO ITAU', 'BANCO PICHINCHA S.A.', 'BANCO POPULAR', 'BANCO SANTANDER COLOMBIA', 'BANCO SERFINANZA', 'BANCOLOMBIA', 'BANCOOMEVA S.A.', 'CFA COOPERATIVA FINANCIERA', 'CITIBANK', 'COLTEFINANCIERA', 'CONFIAR COOPERATIVA FINANCIERA', 'COOFINEP COOPERATIVA FINANCIERA', 'COTRAFA', 'SCOTIABANK COLPATRIA'])->default('NO DEFINIDO');
            $table->enum('accountType', ['NO DEFINIDO','AHORROS', 'CORRIENTE'])->default('NO DEFINIDO');
            $table->string('accountNumber')->nullable();
            $table->string('paymentDate')->nullable();
            $table->string('namesAdministrator')->nullable();
            $table->mediumText('annotations')->nullable();
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
