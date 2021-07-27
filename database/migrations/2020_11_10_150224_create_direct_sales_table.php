<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direct_sales', function (Blueprint $table) {
            $table->id();
            $table->integer('cate_id')->unsigned();
            $table->string('img1')->nullable();
            $table->string('img2')->nullable();
            $table->string('img3')->nullable();
            $table->string('band_rkm');
            $table->string('general_description');
            $table->text('dropdownlist')->nullable();
            $table->string('price')->nullable();
            $table->string('available_number')->default(0);
           // $table->foreign('cate_id')->references('id')->on('posts')->onDelete('cascade');
            $table->string('publisher_id')->nullable();
            $table->tinyInteger('isbooked')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('direct_sales');
    }
}
