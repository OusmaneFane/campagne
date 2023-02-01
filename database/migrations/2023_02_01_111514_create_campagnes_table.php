<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampagnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campagnes', function (Blueprint $table) {
            $table->id();
            $table->string('nom_campagne');
            $table->string('type_campagne');
            $table->string('date_debut');
            $table->string('date_fin');
            $table->string('nom_zone');
            $table->unsignedBigInteger('zone_id')->nullable(false)->default(0);
            $table->foreign('zone_id')->references('id')->on('zones')->onDelete('cascade');
            $table->string('nom_distrib');
            $table->unsignedBigInteger('distrib_id')->nullable(false)->default(0);
            $table->foreign('distrib_id')->references('id')->on('distribs')->onDelete('cascade');
            $table->string('nom_organe');
            $table->unsignedBigInteger('organe_id')->nullable(false)->default(0);
            $table->foreign('organe_id')->references('id')->on('organisations')->onDelete('cascade');
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
        Schema::dropIfExists('campagnes');
    }
}
