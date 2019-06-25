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
        Schema::create('spending', function (Blueprint $table) {
            $table->increments('spend_id');
            $table->integer('user_id')->unsigned();
            $table->integer('fixed_rent');
            $table->integer('fixed_insurance');
            $table->integer('variable_utilities');
            $table->integer('variable_food');
            $table->integer('variable_daily');
            $table->integer('variable_transportation');
            $table->integer('variable_automotive');
            $table->integer('variable_communication');
            $table->integer('variable_education');
            $table->integer('variable_medical');
            $table->integer('variable_clothing');
            $table->integer('variable_allowance');
            $table->integer('variable_pocketmoney');
            $table->integer('variable_favorite');
            $table->integer('variable_saving');
            $table->integer('variable_investment');
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
        Schema::dropIfExists('spending');
    }
}
