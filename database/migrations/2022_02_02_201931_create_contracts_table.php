<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('asegurable')->unique()->nullable();
            $table->string('domus')->unique()->nullable();
            $table->string('cannonLease');
            $table->string('adminValue')->nullable();
            $table->enum('typeContract', ['NO DEFINIDO','VIVIENDA', 'COMERCIAL'])->default('NO DEFINIDO');
            $table->string('contractDuration');
            $table->string('increment')->nullable();
            $table->string('contractRights')->nullable();
            $table->date('deliveryDate')->nullable();
            $table->string('gracePeriod')->nullable();
            $table->mediumText('clause')->nullable();
            $table->string('commissionPercentage');
            $table->string('marketingPercentage');
            $table->mediumText('observationsCommissionAndMarketing')->nullable();
            $table->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->boolean('isActive')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}
