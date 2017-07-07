<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->rememberToken();
            $table->timestamps();;
        });

        Schema::create('product_tag', function (Blueprint $table) {
            //I used an id because we will use this later in another table (See the TadawaDB.pdf). However, this table is still identified by the combination of the physician_id and the hospital_id and that's why I used the unique property.
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('tag_id');
            $table->unique(['product_id', 'tag_id']);
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
        Schema::dropIfExists('product_tag');
    }
}
