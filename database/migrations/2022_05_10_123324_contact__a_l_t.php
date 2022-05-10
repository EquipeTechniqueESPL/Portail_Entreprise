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
        Schema::create('contact_alt',function(Blueprint $table) {
            $table->bigIncrements('idCALT');
            $table->integer('idU')->unsigned();
            $table->foreign('idU')->references('idU')->on('utilisateurs');
            $table->string('Nom-Prenom');
            $table->string('mail')->unique();
            $table->string('tel')->unique();
            $table->string('adresse');
            $table->string('ville');
            $table->string('CP');
            $table->string('NumSecuSociale','13');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_alt');
    }
};
