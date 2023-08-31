<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('car_model_id')->nullable();
            $table->bigInteger('car_id')->nullable();
            $table->bigInteger('staff_id')->nullable();
            $table->bigInteger('branch_id')->nullable();
            $table->bigInteger('customer_id');
            $table->datetime('pickup_datetime');
            $table->datetime('dropoff_datetime');
            $table->string('pickup_location');
            $table->string('dropoff_location');
            $table->string('driver_name')->nullable();
            $table->string('driver_IC')->nullable();
            $table->string('driver_license')->nullable();
            $table->string('driver_mobile_number')->nullable();
            $table->string('driver_age')->nullable();
            $table->string('booking_status')->default('Pending');
            $table->string('payment_status')->default('Not Paid');
            $table->string('contract_status')->nullable();
            $table->string('car_condition_status')->nullable();
            $table->string('duration_days')->nullable();
            $table->string('duration_hours')->nullable();
            $table->decimal('amount',9,2)->default(0);
            $table->string('mode')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('bookings');
    }
}
