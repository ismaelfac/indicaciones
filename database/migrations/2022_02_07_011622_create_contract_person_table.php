<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractPersonTable extends Migration
{
    public function up()
    {
        Schema::create('contract_person', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contract_id')->references('id')->on('contracts')->onUpdate('cascade');
            $table->foreignId('person_id')->references('id')->on('people')->onUpdate('cascade');
            $table->enum('typeParticipant', ['NO DEFINIDO','ARRENDATARIO', 'DEUDOR', 'USUFRUCTUARIO', 'COMODATARIO', 'PROPIETARIO','REPRESENTANTE LEGAL'])->default('NO DEFINIDO');
            $table->enum('typePerson', ['NATURAL', 'JURIDICA'])->default('NATURAL');
            $table->string('legalPersonOfContractId')->nullable();
            $table->string('legalPersonOfPersonId')->nullable();
            $table->string('rentSplitPercentage')->nullable();
            $table->boolean('isIVAResponsible')->default(false);
            $table->boolean('isIntegralProtection')->default(false);
            $table->boolean('itIsGuaranteed')->default(true);
            $table->enum('bankingEntity', ['NO DEFINIDO','BANCAMIA S.A.', 'BANCO AGRARIO', 'BANCO AV VILLAS', 'BANCO BBVA COLOMBIA S.A.', 'BANCO CAJA SOCIAL','BANCO COOPERATIVO COOPCENTRAL', 'BANCO CREDIFINANCIERA', 'BANCO DAVIVIENDA', 'BANCO DE BOGOTA', 'BANCO DE OCCIDENTE', 'BANCO FALABELLA', 'BANCO GNB SUDAMERIS', 'BANCO ITAU', 'BANCO PICHINCHA S.A.', 'BANCO POPULAR', 'BANCO SANTANDER COLOMBIA', 'BANCO SERFINANZA', 'BANCOLOMBIA', 'BANCOOMEVA S.A.', 'CFA COOPERATIVA FINANCIERA', 'CITIBANK', 'COLTEFINANCIERA', 'CONFIAR COOPERATIVA FINANCIERA', 'COOFINEP COOPERATIVA FINANCIERA', 'COTRAFA', 'SCOTIABANK COLPATRIA'])->default('NO DEFINIDO');
            $table->enum('accountType', ['NO DEFINIDO','AHORROS', 'CORRIENTE'])->default('NO DEFINIDO');
            $table->string('accountNumber')->nullable();
            $table->boolean('isConsignmentPayment')->default(false);
            $table->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade');
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
        Schema::dropIfExists('contract_person');
    }
}
