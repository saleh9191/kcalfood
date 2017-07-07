<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('calories')->nullable();
            $table->string('calories_from_fat')->nullable();
            $table->string('total_fat')->nullable();
            $table->string('trans_fat')->nullable();
            $table->string('saturated_fat')->nullable();
            $table->string('cholesterol')->nullable();
            $table->string('sodium')->nullable();
            $table->string('total_carbohydrate')->nullable();
            $table->string('dietary_fiber')->nullable();
            $table->string('sugars')->nullable();
            $table->string('protein')->nullable();
            $table->string('vitamin_A')->nullable();
            $table->string('vitamin_C')->nullable();
            $table->string('calcium')->nullable();
            $table->string('iron')->nullable();
            $table->string('vitamin_d')->nullable();
            $table->string('potassium')->nullable();
            $table->string('serving_size')->nullable();
            $table->longText('description')->nullable();
            $table->string('name')->unique();
            $table->string('resource')->nullable();
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
