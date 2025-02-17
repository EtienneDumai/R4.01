<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationVehiculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_vehicules', function (Blueprint $table) {
            $table->foreignId('reservation_id')->constrained('reservations','codeReservation')->onDelete('cascade');
            $table->foreignId('vehicule_id')->constrained('vehicules','matricule')->onDelete('cascade');
            $table->primary(['reservation_id', 'vehicule_id']);
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
        Schema::dropIfExists('reservation_vehicules');
    }
}
