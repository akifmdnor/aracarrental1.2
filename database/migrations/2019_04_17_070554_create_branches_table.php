<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('branch_name');
            $table->string('phone_number');
            $table->string('city');
            $table->string('country');
            $table->string('email');
            $table->string('address');
            $table->string('postal_code');
            //$table->string('image_location')->nullable();
            $table->integer('staff_id')->nullable()->default('1');
            $table->string('address_longitude')->nullable();
            $table->string('address_latitude')->nullable();
            $table->decimal('price_per_km',9,2);
            $table->string('password')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('branches');
    }
}
