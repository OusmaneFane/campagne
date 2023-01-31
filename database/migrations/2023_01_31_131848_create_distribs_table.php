<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistribsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distribs', function (Blueprint $table) {
            $table->id();
            $table->string('nom_distrib'); 
            $table->string('type_distrib');
            $table->string('tel_distrib');
            $table->string('addresse_distrib');
            $table->string('email_distrib');
            $table->string('nom_zone');
            $table->foreignId('zone_id')->constrained()->onDelete('cascade');
            $table->foreignId('organe_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('campagne_id')->constrained()->onDelete('cascade');

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
        Schema::dropIfExists('distribs');
    }
}
