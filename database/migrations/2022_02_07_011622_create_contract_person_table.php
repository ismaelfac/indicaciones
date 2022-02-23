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
            $table->foreignId('legalPerson_id')->nullable();
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
