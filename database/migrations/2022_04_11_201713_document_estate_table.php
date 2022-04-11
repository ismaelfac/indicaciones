<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DocumentEstateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_estates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('estate_id')->references('id')->on('estates')->onUpdate('cascade');
            $table->foreignId('document_id')->references('id')->on('documents')->onUpdate('cascade');
            $table->string('fileName');
            $table->string('route');
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
        Schema::dropIfExists('document_estates');   
    }
}
