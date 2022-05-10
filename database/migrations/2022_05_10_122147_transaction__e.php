<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_e',function(Blueprint $table) {
            $table->bigIncrements('idE');
            $table->integer('idALT')->unsigned();
            $table->foreign('idALT')->references('idALT')->on('transaction_alt');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction_e');
    }
};



