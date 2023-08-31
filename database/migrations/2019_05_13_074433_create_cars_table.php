<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('plat_number');
            $table->bigInteger('car_model_id');
            $table->string('year');
            $table->string('owner_name')->nullable();
            $table->string('reference_id')->nullable();
            $table->string('owner_ic')->nullable();
            $table->date('roadtax_expiry_date');
            $table->string('status')->default('Available');
            $table->string('added_by')->default('HQ');
            $table->bigInteger('branch_id')->nullable();
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
        Schema::dropIfExists('cars');
    }
}
