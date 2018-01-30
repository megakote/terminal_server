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
      $table->string('guid'); //Айдишник в базе 1С
      $table->string('name', 100);
      $table->integer('price'); //Цена
      $table->integer('count'); //Колво
      $table->string('unit', 10); //Единица измерения
      $table->text('description');
      $table->integer('order')->default(500);
      $table->integer('category_id')->nullable(); //Айдишник Категории родительской
      $table->softDeletes();
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
