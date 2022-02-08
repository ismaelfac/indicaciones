<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('names');
            $table->string('slug')->nullable();
            $table->string('address')->nullable();
            $table->string('dni');
            $table->enum('typeDni', ['NO DEFINIDO','CEDULA DE CIUDADANIA', 'NIT', 'CEDULA DE EXTRANJERIA', 'PASAPORTE'])->default('NO DEFINIDO');
            $table->string('phone');
            $table->string('email')->unique();
            $table->boolean('isActive')->default(false);
            $table->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade');
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
        Schema::dropIfExists('people');
    }
}
