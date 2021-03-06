<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up ()
  {
    Schema::create('sessions', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('order_id')->nullable();
      $table->integer('terminal_id')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down ()
  {
    Schema::dropIfExists('sessions');
  }
}
