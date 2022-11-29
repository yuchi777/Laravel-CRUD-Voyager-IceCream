<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title',50);//標題
            $table->string('title_small',50);//子標題
            $table->string('img',255);//圖片
            $table->string('ice_type',50);//冰系列
            $table->string('ice_type_title',50);//冰系列_標題
            $table->string('ice_type_img',50);//冰系列_圖片
            $table->string('ice_type_imgTitle',50);//冰系列_圖片標題
            $table->string('ice_type_imgContent',255);//冰系列_圖片內容
            $table->string('ice_type_imgSale',50);//冰系列_圖片優惠
            $table->string('ice_type_desTitle',50);
            $table->string('ice_type_desContent',255);
            $table->string('iceCream_img',50);//冰系列_標題
            $table->string('iceCream_imgTitle',50);//冰系列_標題
            $table->string('iceCream_imgContent',50);//冰系列_標題
            $table->string('active_img',50);//冰系列_標題
            $table->string('active_title',50);//冰系列_標題
            $table->string('active_title_small',50);//冰系列_標題
            $table->string('active_content',50);//冰系列_標題

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
        Schema::dropIfExists('posts');
    }
}
