<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('category', ['NO DEFINIDO','ARRENDATARIO','DEUDOR', 'PROPIETARIO', 'INMUEBLE','CONTRATO','USUFRUCTUARIO','COMODATARIO'])->default('NO DEFINIDO');
            $table->enum('typePerson', ['NO DEFINIDO','NATURAL', 'JURIDICA'])->default('NO DEFINIDO');
            $table->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->boolean('isActive')->default(false);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
