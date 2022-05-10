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
        Schema::create('utilisateurs',function(Blueprint $table) {
            $table->bigIncrements('idU');
            $table->integer('idCE')->unsigned();
            $table->foreign('idCE')->references('idCE')->on('contact_e');
            $table->integer('idCALT')->unsigned();
            $table->foreign('idCALT')->references('idCALT')->on('contact_alt');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateurs');
    }
};
