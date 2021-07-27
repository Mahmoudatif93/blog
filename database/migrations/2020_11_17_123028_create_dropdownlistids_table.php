<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDropdownlistidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dropdownlistids', function (Blueprint $table) {
            $table->id();
            $table->integer('mainTitle_id')->unsigned();
            $table->integer('DirectSale_id')->unsigned();
            $table->foreign('mainTitle_id')->references('id')->on('main_titles')->onDelete('cascade');
            $table->foreign('DirectSale_id')->references('id')->on('direct_sales')->onDelete('cascade');
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
        Schema::dropIfExists('dropdownlistids');
    }
}
