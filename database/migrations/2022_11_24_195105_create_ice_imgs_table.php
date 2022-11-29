<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIceImgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ice_imgs', function (Blueprint $table) {
            $table->id();
            $table->string('iceCream_img',50);//冰系列_標題
            $table->string('iceCream_imgTitle',50);//冰系列_標題
            $table->string('iceCream_imgContent',50);//冰系列_標題
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
        Schema::dropIfExists('ice_imgs');
    }
}
