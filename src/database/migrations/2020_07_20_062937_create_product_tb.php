<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_tb', function (Blueprint $table) {
          $table->timestamps();
          $table->bigIncrements('id');
          $table->string('name')->nullable();
          $table->integer('code')->nullable();
          $table->integer('price')->nullable();
          $table->string('classification')->nullable();
          $table->string('customer')->nullable();
          $table->string('hardness')->nullable();
          $table->date('registed_at')->nullable();
          $table->string('abolished_type')->nullable();
          $table->text('feature')->nullable();
          $table->string('image_file')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_tb');
    }
}
