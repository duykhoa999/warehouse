<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExportProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('export_product', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id')->unsigned();
            $table->unsignedBigInteger('export_id')->unsigned();
            $table->integer('amount');

            $table->foreign('product_id')->references('id')
                ->on('products')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('export_id')->references('id')
                ->on('exports')
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
        Schema::dropIfExists('export_product');
    }
}
