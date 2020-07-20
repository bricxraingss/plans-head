<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_tb', function (Blueprint $table) {
          $table->timestamps();
          $table->bigIncrements('id');
          $table->string('login_id')->unique();
          $table->string('login_password');
          $table->string('name');
          $table->string('e_mail')->nullable();
          $table->tinyInteger('auth_level')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_tb');
    }
}
