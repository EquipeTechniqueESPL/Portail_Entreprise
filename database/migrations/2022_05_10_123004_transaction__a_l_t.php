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
        Schema::create('transaction_alt',function(Blueprint $table) {
            $table->bigIncrements('idALT');
            $table->integer('idE')->unsigned();
            $table->foreign('idE')->references('idE')->on('transaction_e');
            $table->string('NomFormation');
            $table->string('AnneeFormation');
            $table->string('TypeFormation');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction_alt');
    }
};
