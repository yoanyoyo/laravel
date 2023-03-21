<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableReservationVehicule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            //
        Schema::create('table_reservation_vehicule', function(bluePrint $table){
            $table -> String('reservation_id')
                   -> foreign('reservation_id')
                   -> references('codeReservation')
                   -> on('reservations')
                   -> onDelete('cascade');
            $table -> String('vehicule_id')
                   -> foreign('vehicule_id')
                   -> references('matricule')
                   -> on('vehicules')
                   -> onDelete('cascade');
            $table -> primary(['vehicule_id', 'reservation_id']);
        });


    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_reservation_vehicule');
    }
}
