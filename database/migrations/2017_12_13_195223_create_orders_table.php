<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    $platform = Schema::getConnection()->getDoctrineSchemaManager()->getDatabasePlatform();
    $platform->registerDoctrineTypeMapping('enum', 'string');
    Schema::create('orders', function (Blueprint $table) {
      $table->increments('id');
      /*
      TODO: Пересмотреть в разрезе админки терминалов
          status:
              received = Получен от терминала
              sended = Отправлен в 1С
              complete = Завершен
              canceled = Отменен
      */
      $table->string('status')->nullable(); // Статус заказа
      $table->integer('terminal_id');
      // guid = Айдишник заказа пришедший от 1С, заполняется только для заказов со статусом "отправлен"
      $table->integer('guid')->nullable();
      $table->integer('client_id')->nullable();
      $table->integer('session_id')->nullable();
      $table->integer('money')->nullable(); // внесенная сумма
      $table->string('address')->nullable(); // адрес доставки
      $table->date('delivery_date')->nullable(); // дата доставки
      $table->enum('delivery_time', ['morning','evening'])->nullable(); // время доставки
      /*
          reason:
              fullpayed = оплачен полностью
              prepayed = предоплата
              partpayed = Деньги внесены не полностью
              timeout = Закрыт по таймауту
              cleared = Очищен
      */
      $table->string('reason')->nullable(); // Причина закрытия
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
    Schema::dropIfExists('orders');
  }
}
