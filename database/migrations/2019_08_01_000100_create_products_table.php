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
            $table->string('sku')->nullable();
            $table->string('name');
            $table->string('description')->nullable();
            $table->decimal('price', 8, 2);            
            $table->datetime('effectiveFrom');
            $table->datetime('effectiveTo');
            $table->boolean('active')->default(true);

            $table->integer('productTypeId')->unsigned();
            $table->foreign('productTypeId')->references('id')->on('product_types');

            $table->integer('measurementId')->unsigned();
            $table->foreign('measurementId')->references('id')->on('units_of_measurements');

            $table->integer('createdBy')->nullable();
            $table->integer('updatedBy')->nullable();
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
