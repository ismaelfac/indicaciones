<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractDocumentsTable extends Migration
{
    public function up()
    {
        Schema::create('contract_document', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contract_id')->references('id')->on('contracts')->onUpdate('cascade');
            $table->foreignId('document_id')->references('id')->on('documents')->onUpdate('cascade');
            $table->string('fileName');
            $table->string('route');
            $table->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->boolean('isActive')->default(false);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('contract_document');
    }
}
