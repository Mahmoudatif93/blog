<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookedDirectSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booked_direct_sales', function (Blueprint $table) {
            $table->id();
            $table->integer('DirectSale_id')->unsigned();
            $table->string('publisher_id')->nullable();
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
        Schema::dropIfExists('booked_direct_sales');
    }
}
