<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     */
    public function up():void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->uuid("Pro_Id")->primary();
            $table->string("Pro_Name");
            $table->integer("Pro_Qty");
            $table->decimal("Pro_Price");
            $table->string("Pro_Image");
            $table->string("pro_Detail");
            $table->integer("CatId");
            $table->foriegn("CatId")->refrences('cat_id')
            ->on('category')->onDelete('CASCADE');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     */
    public function down():void
    {
        Schema::dropIfExists('products');
    }
};
