<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractPersonTable extends Migration
{
    public function up()
    {
        Schema::create('contract_people', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contract_id')->references('id')->on('contracts')->onUpdate('cascade');
            $table->foreignId('person_id')->references('id')->on('people')->onUpdate('cascade');
            $table->enum('typePerson', ['NO DEFINIDO','ARRENDATARIO', 'DEUDOR', 'USUFRUSTUARIO', 'COMODATARIO', 'PROPIETARIO'])->default('NO DEFINIDO');
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
        Schema::dropIfExists('contract_people');
    }
}
