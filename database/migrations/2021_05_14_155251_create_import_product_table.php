<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('import_product', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id')->unsigned();
            $table->unsignedBigInteger('import_id')->unsigned();
            $table->integer('amount');

            $table->foreign('product_id')->references('id')
                ->on('products')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('import_id')->references('id')
                ->on('imports')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('import_product');
    }
}
