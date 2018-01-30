<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTerminalsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('terminals', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('address');
      $table->string('image')->nullable();
      $table->text('comment')->nullable();
      $table->string('geo')->nullable();
      $table->string('token');
      $table->timestamp('ping')->nullable(); // Содержит время когда последний раз выходил на связь
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
    Schema::dropIfExists('terminals');
  }
}
