<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('model_name');
            $table->string('category');
            $table->string('security_deposit');
            $table->bigInteger('branch_id');
            $table->string('added_by')->default('HQ');
            $table->decimal('price_day',9,2);
            $table->decimal('price_hours',9,2);
            $table->decimal('price_day_2',9,2)->default(0);
            $table->decimal('price_day_3',9,2)->default(0);
            $table->decimal('price_day_4',9,2)->default(0);
            $table->decimal('price_day_5',9,2)->default(0);
            $table->decimal('price_day_6',9,2)->default(0);
            $table->decimal('price_day_7',9,2)->default(0);
            $table->decimal('price_day_14',9,2)->default(0);
            $table->decimal('price_day_21',9,2)->default(0);
            $table->decimal('price_day_28',9,2)->default(0);
            $table->decimal('price_day_after_month',9,2)->default(0);
            $table->decimal('price_day_branch',9,2)->default(0);
            $table->decimal('price_hours_branch',9,2)->default(0);
            $table->decimal('price_day_2_branch',9,2)->default(0);
            $table->decimal('price_day_3_branch',9,2)->default(0);
            $table->decimal('price_day_4_branch',9,2)->default(0);
            $table->decimal('price_day_5_branch',9,2)->default(0);
            $table->decimal('price_day_6_branch',9,2)->default(0);
            $table->decimal('price_day_7_branch',9,2)->default(0);
            $table->decimal('price_day_14_branch',9,2)->default(0);
            $table->decimal('price_day_21_branch',9,2)->default(0);
            $table->decimal('price_day_28_branch',9,2)->default(0);
            $table->decimal('price_day_after_month_branch',9,2)->default(0);
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
        Schema::dropIfExists('car_models');
    }
}
