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
        Schema::create('contact_e',function(Blueprint $table) {
            $table->bigIncrements('idCE');
            $table->integer('idU')->unsigned()
;            $table->foreign('idU')->references('idU')->on('utilisateurs');
            $table->string('Nom-Prenom');
            $table->string('mail')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_e');
    }
};
