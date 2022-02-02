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
            $table->string('contractNum');
            $table->string('asegurable')->nullable();
            $table->string('domus')->nullable();
            $table->string('cannonLease');
            $table->string('adminValue')->nullable();
            $table->string('increment')->nullable();
            $table->string('contractRights')->nullable();
            $table->date('deliveryDate');
            $table->string('gracePeriod')->nullable();
            $table->mediumText('clause')->nullable();
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
