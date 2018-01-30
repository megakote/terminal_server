<?php

namespace App\Http\Controllers\gate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Order;
use App\Client;
use App\OrderProducts;
use App\Product;

class ordersController extends Controller
{

    public function __construct ()
    {
    }

    /*
        Тестовый Post запрос
        val: 123
        {"name":"Иван","tel":9996241313,"address":"address mira 8-24","delivery_date":"2018-01-21","delivery_time":"11-14","money":400,"products":[{"guid":"0003","count":10,"price":100}]}
    */
    public function index (Request $request)
    {

        /*
            TODO: надо сформировать:
            session_id
            Автоматом проставить:
            reason
            Получить в процессе:
            guid
        */

        /*
         *   TODO: Добавить получение чека ИЛИ формировать чек на месте, а получать только данные для него
        */
        $order_data = json_decode($request->input('order'), true);

        $order = Order::Create([
            'status' => 'received',
            'terminal_id' => $request->terminal->id,
            'address' => $order_data['address'],
            'name' => $order_data['name'],
            'tel' => $order_data['tel'],
            'delivery_date' => $order_data['delivery_date'],
            'delivery_time' => $order_data['delivery_time'],
            'received' => 'received',
            'money' => $order_data['money'],
        ]);


        $OrderProducts = collect($order_data['products'])->map(function ($item, $key) {
            $OrderProduct = new OrderProducts($item);
            $OrderProduct->save();
            $prod = Product::where('guid', $item['guid'])->first();
            return $OrderProduct->product()->associate($prod);
        });
        // Привяжем присланные товары к заказу
        $order->products()->saveMany($OrderProducts);

        $client = Client::firstOrCreate([
            'tel' => $order_data['tel']
        ]);
        // Если в базе данный клиент еще не был, то добавим имя, если уже был то не трогаем.
        if ( !$client->name ) {
            $client->update(['name' => $order_data['name']]);
        }
        // Привяжем клиента к заказу
        $order->client()->associate($client);

        $order->save();

        return 'ok';
    }
}
