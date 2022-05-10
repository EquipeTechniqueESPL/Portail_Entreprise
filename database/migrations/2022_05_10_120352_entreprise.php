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
        Schema::create('entreprise',function(Blueprint $table)
        {
            $table->bigIncrements('idE');
            $table->string('SIRET');
            $table->string('OPCO');
            $table->string('Adresse');
            $table->string('CP');
            $table->string('Ville');
            $table->string('Dirigeant');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entreprise');
    }
};
