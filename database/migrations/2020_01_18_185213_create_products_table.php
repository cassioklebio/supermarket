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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('provider_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('stand_id');
            $table->string('name');
            $table->text('description');
            $table->decimal('Weight', 10,2);
            $table->boolean('controlled');
            $table->integer('minimumquantity');
            $table->timestamps();

            $table->foreign('provider_id')->references('id')->on('provider');
            $table->foreign('category_id')->references('id')->on('category');
            $table->foreign('stand_id')->references('id')->on('stand');
        });
    }

    /**
     *
    $table->foreign('store_id')->references('id')->on('stores');
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
