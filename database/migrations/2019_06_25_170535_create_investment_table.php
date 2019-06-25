<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investment', function (Blueprint $table) {
            $table->increments('invest_id');
            $table->integer('user_id');
            $table->integer('domestic_bonds');
            $table->integer('developed_bonds');
            $table->integer('emerging_bonds');
            $table->integer('domestic_stock');
            $table->integer('developed_stock');
            $table->integer('emerging_stock');
            $table->integer('japan_riet');
            $table->integer('oversea_riet');
            $table->integer('other');
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
        Schema::dropIfExists('investment');
    }
}
