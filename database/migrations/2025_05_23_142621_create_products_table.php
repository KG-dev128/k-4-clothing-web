<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('Pro_Id');
            $table->string("Pro_Name");
            $table->integer("Pro_Qty");
            $table->decimal("Pro_Price");
            $table->string("Pro_Image");
            $table->string("Pro_Detail");
            $table->integer("CatId");
            $table->foreign("CatId")->references('cat_name')->on('category')->onDelete('CASCADE');
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
        Schema::dropIfExists('products');
    }
};
