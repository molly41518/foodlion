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
            $table->string('title', 100);
            $table->string('pic', 255)->nullable();
            $table->integer('price')->default(1);
            $table->text('desc', 100)->nullable();
            $table->bigInteger('cgy_id')->references('id')->on('cgys')->onDelete('cascade');
            $table->boolean('enabled')->default(true);
            $table->timestamp('sell_at')->nullable();
            $table->string('source', 100);
            $table->string('options', 200)->nullable();
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
        Schema::table('product', function (Blueprint $table) {
            $table->dropForeign(['cgy_id']);
        });
        Schema::dropIfExists('products');
    }
}
