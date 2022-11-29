<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIceTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ice_types', function (Blueprint $table) {
            $table->id();
            $table->string('ice_type',50);//冰系列
            $table->string('ice_type_title',50);//冰系列_標題
            $table->string('ice_type_img',50);//冰系列_圖片
            $table->string('ice_type_imgTitle',50);//冰系列_圖片標題
            $table->string('ice_type_imgContent',255);//冰系列_圖片內容
            $table->string('ice_type_imgSale',50);//冰系列_圖片優惠
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
        Schema::dropIfExists('ice_types');
    }
}
