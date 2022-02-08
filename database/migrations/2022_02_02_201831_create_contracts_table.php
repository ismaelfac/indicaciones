<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('asegurable')->unique()->nullable();
            $table->string('domus')->unique()->nullable();
            $table->string('cannonLease');
            $table->string('adminValue')->nullable();
            $table->string('increment')->nullable();
            $table->string('contractRights')->nullable();
            $table->date('deliveryDate')->nullable();
            $table->string('gracePeriod')->nullable();
            $table->mediumText('clause')->nullable();
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
        Schema::dropIfExists('contracts');
    }
}
