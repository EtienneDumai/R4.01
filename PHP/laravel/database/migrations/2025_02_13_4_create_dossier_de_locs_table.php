<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDossierDeLocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dossier_de_locs', function (Blueprint $table) {
            $table->id("numeroDossier");
            $table->boolean("estPaye");
            $table->foreignId("codeReservation")->constrained("reservations")->references("codeReservation")->on("reservations")->onDelete('cascade');
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
        Schema::dropIfExists('dossier_de_locs');
    }
}
