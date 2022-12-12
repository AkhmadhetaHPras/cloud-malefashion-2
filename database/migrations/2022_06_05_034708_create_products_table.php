<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 100);
            $table->foreignId('brand_id')->constrained();
            $table->foreignId('category_id')->constrained();
            $table->string('product_name', 100)->unique();
            $table->unsignedBigInteger('price');
            $table->string('yt_link');
            $table->text('description');
            $table->text('short_desc');
            $table->string('tags', 100);
            $table->unsignedTinyInteger('rating');
            $table->string('thumbnail');
            $table->string('display1');
            $table->string('display2');
            $table->string('display3');
            $table->string('display4');
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
}
