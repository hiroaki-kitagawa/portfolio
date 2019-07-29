<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpendingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spendings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('fixed_income');
            $table->integer('extra_income');
            // 固定費
            $table->integer('fixed_rent_budget');
            $table->integer('fixed_rent');
            $table->integer('fixed_insurance_budget');
            $table->integer('fixed_insurance');
            $table->integer('fixed_other_budget');
            $table->integer('fixed_other');
            // 変動費
            $table->integer('variable_utilities_budget');
            $table->integer('variable_utilities');
            $table->integer('variable_food_budget');
            $table->integer('variable_food');
            $table->integer('variable_daily_budget');
            $table->integer('variable_daily');
            $table->integer('variable_transportation_budget');
            $table->integer('variable_transportation');
            $table->integer('variable_automotive_budget');
            $table->integer('variable_automotive');
            $table->integer('variable_other_budget');
            $table->integer('variable_other');
            // 自己投資
            $table->integer('selfinvest_communication_budget');
            $table->integer('selfinvest_communication');
            $table->integer('selfinvest_education_budget');
            $table->integer('selfinvest_education');
            $table->integer('selfinvest_medical_budget');
            $table->integer('selfinvest_medical');
            $table->integer('selfinvest_clothing_budget');
            $table->integer('selfinvest_clothing');
            $table->integer('selfinvest_allowance_budget');
            $table->integer('selfinvest_allowance');
            $table->integer('selfinvest_pocketmoney_budget');
            $table->integer('selfinvest_pocketmoney');
            $table->integer('selfinvest_favorite_budget');
            $table->integer('selfinvest_favorite');
            $table->integer('selfinvest_other_budget');
            $table->integer('selfinvest_other');
            // 貯蓄・投資
            $table->integer('storeinvest_saving_budget');
            $table->integer('storeinvest_saving');
            $table->integer('storeinvest_investment_budget');
            $table->integer('storeinvest_investment');
            $table->integer('storeinvest_other_budget');
            $table->integer('storeinvest_other');

            $table->timestamps();

            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spendings');
    }
}
