<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up ()
  {
    Schema::create('histories', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('terminal_id');
      $table->integer('session_id');
      //Текст который искали
      $table->string('search_text')->nullable();
      //Категория, которую открыли
      $table->integer('category_id')->nullable();
      // Товар, который открыли
      $table->integer('product_id')->nullable();
      $table->dateTime('created_at');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down ()
  {
    Schema::dropIfExists('histories');
  }
}
