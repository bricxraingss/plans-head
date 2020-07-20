<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMsdataTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msdata_tb', function (Blueprint $table) {
          $table->dateTime('input_date', 0);
          $table->tinyInteger('del_flg')->default(0);
          $table->string('file_name')->primary();
          $table->string('uid')->unique()->nullable();
          $table->dateTime('ms_date', 0);
          $table->string('gender')->nullable();
          $table->tinyInteger('age')->nullable();
          $table->string('faceup')->nullable();
          $table->string('bedding')->nullable();
          $table->string('pillow_hardness')->nullable();
          $table->tinyInteger('head_no')->nullable();
          $table->tinyInteger('neck_no')->nullable();
          $table->tinyInteger('back_no')->nullable();
          $table->tinyInteger('waist_no')->nullable();
          $table->tinyInteger('hips_no')->nullable();
          $table->double('head_length', 3, 1)->nullable();
          $table->double('neck_length', 3, 1)->nullable();
          $table->double('back_length', 3, 1)->nullable();
          $table->double('waist_length', 3, 1)->nullable();
          $table->double('hips_length', 3, 1)->nullable();
          $table->smallInteger('head_height')->nullable();
          $table->smallInteger('neck_height')->nullable();
          $table->smallInteger('back_height')->nullable();
          $table->smallInteger('waist_height')->nullable();
          $table->smallInteger('hips_height')->nullable();
          $table->double('bmi', 3, 1)->nullable();
          $table->double('l1', 4, 1)->nullable();
          $table->double('l2', 4, 1)->nullable();
          $table->double('l5', 4, 1)->nullable();
          $table->double('height', 3, 2)->nullable();
          $table->double('weight', 4, 1)->nullable();
          $table->string('matless_hardness_bmi')->nullable();
          $table->string('matless_hardness_l1')->nullable();
          $table->string('matless_hardness_l2')->nullable();
          $table->string('spring_type_l1')->nullable();
          $table->string('spring_type_l2')->nullable();
          $table->string('direction')->nullable();
          $table->string('adaptation_type_l1')->nullable();
          $table->string('adaptation_type_l2')->nullable();
          $table->string('adaptation_type_direction')->nullable();
          $table->string('pillow_height')->nullable();
          $table->string('matless_hardness')->nullable();
          $table->string('spring_type')->nullable();
          $table->double('msdata1', 9, 6)->nullable();
          $table->double('msdata2', 9, 6)->nullable();
          $table->double('msdata3', 9, 6)->nullable();
          $table->double('msdata4', 9, 6)->nullable();
          $table->double('msdata5', 9, 6)->nullable();
          $table->double('msdata6', 9, 6)->nullable();
          $table->double('msdata7', 9, 6)->nullable();
          $table->double('msdata8', 9, 6)->nullable();
          $table->double('msdata9', 9, 6)->nullable();
          $table->double('msdata10', 9, 6)->nullable();
          $table->double('msdata11', 9, 6)->nullable();
          $table->double('msdata12', 9, 6)->nullable();
          $table->double('msdata13', 9, 6)->nullable();
          $table->double('msdata14', 9, 6)->nullable();
          $table->double('msdata15', 9, 6)->nullable();
          $table->double('msdata16', 9, 6)->nullable();
          $table->double('msdata17', 9, 6)->nullable();
          $table->double('msdata18', 9, 6)->nullable();
          $table->double('msdata19', 9, 6)->nullable();
          $table->double('msdata20', 9, 6)->nullable();
          $table->double('msdata21', 9, 6)->nullable();
          $table->double('msdata22', 9, 6)->nullable();
          $table->double('msdata23', 9, 6)->nullable();
          $table->double('msdata24', 9, 6)->nullable();
          $table->double('msdata25', 9, 6)->nullable();
          $table->double('msdata26', 9, 6)->nullable();
          $table->double('msdata27', 9, 6)->nullable();
          $table->double('msdata28', 9, 6)->nullable();
          $table->double('msdata29', 9, 6)->nullable();
          $table->double('msdata30', 9, 6)->nullable();
          $table->double('msdata31', 9, 6)->nullable();
          $table->double('msdata32', 9, 6)->nullable();
          $table->double('msdata33', 9, 6)->nullable();
          $table->double('msdata34', 9, 6)->nullable();
          $table->double('msdata35', 9, 6)->nullable();
          $table->double('msdata36', 9, 6)->nullable();
          $table->double('msdata37', 9, 6)->nullable();
          $table->double('msdata38', 9, 6)->nullable();
          $table->double('msdata39', 9, 6)->nullable();
          $table->double('msdata40', 9, 6)->nullable();
          $table->double('msdata41', 9, 6)->nullable();
          $table->double('msdata42', 9, 6)->nullable();
          $table->double('msdata43', 9, 6)->nullable();
          $table->double('msdata44', 9, 6)->nullable();
          $table->double('msdata45', 9, 6)->nullable();
          $table->double('msdata46', 9, 6)->nullable();
          $table->double('msdata47', 9, 6)->nullable();
          $table->double('msdata48', 9, 6)->nullable();
          $table->double('msdata49', 9, 6)->nullable();
          $table->double('msdata50', 9, 6)->nullable();
          $table->double('msdata51', 9, 6)->nullable();
          $table->double('msdata52', 9, 6)->nullable();
          $table->double('msdata53', 9, 6)->nullable();
          $table->double('msdata54', 9, 6)->nullable();
          $table->double('msdata55', 9, 6)->nullable();
          $table->double('msdata56', 9, 6)->nullable();
          $table->double('msdata57', 9, 6)->nullable();
          $table->double('msdata58', 9, 6)->nullable();
          $table->double('msdata59', 9, 6)->nullable();
          $table->double('msdata60', 9, 6)->nullable();
          $table->double('msdata61', 9, 6)->nullable();
          $table->double('msdata62', 9, 6)->nullable();
          $table->double('msdata63', 9, 6)->nullable();
          $table->double('msdata64', 9, 6)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('msdata_tb');
    }
}
