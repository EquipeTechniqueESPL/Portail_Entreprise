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
        Schema::create('roles',function(Blueprint $table) {
            $table->bigIncrements('idRole');
            $table->integer('idU')->unsigned();
            $table->foreign('idU')->references('idU')->on('utilisateurs');
            $table->boolean('RH');
            $table->boolean('Tuteur');
            $table->boolean('Dirigeant');
            $table->boolean('ContactE');
            $table->boolean('Admin');
            $table->boolean('Etudiant');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
};
