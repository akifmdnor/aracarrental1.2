<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelSpecificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_specifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('model_name');
            $table->integer('doors');
            $table->integer('seats');
            $table->integer('luggage');
            $table->string('fuel_type');
            $table->double('fuel_tank');
            $table->string('transmission_type');
            $table->string('included');
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
        Schema::dropIfExists('model_specifications');
    }
}
