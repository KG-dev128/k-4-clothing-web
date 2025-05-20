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
            $table->uuid("pro_id")->primary();
            $table->string("pro_name");
            $table->integer("pro_qty");
            $table->decimal("pro_price");
            $table->string("pro_image");
            $table->string("pro_detail");
            $table->string("CatId")->refrences('cat_id')
            ->on('category')->onDelete('CASCADE');
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
