<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePieceJointesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('piece_jointes', function (Blueprint $table) {
        $table->id();
        $table->foreignId('beneficiaire_id')->constrained()->onDelete('cascade');
        $table->string('nom');
        $table->string('chemin');
        $table->string('url');
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
        Schema::dropIfExists('piece_jointes');
    }
}
