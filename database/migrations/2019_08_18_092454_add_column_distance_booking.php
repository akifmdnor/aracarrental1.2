<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnDistanceBooking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->string('pickup_distance')->nullable();
            $table->string('dropoff_distance')->nullable();
            $table->decimal('amount_distance',9,2)->default(0);
            $table->decimal('amount_rent',9,2)->default(0);
            $table->decimal('amount_addon',9,2)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
