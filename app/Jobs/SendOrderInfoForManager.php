<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

use Mail;
use Order;

class SendOrderInfoForManager implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $order = Order::find($id);
        $summ = 0;

        $emailData = [
          "idterm" => strtoupper(env('ID_TERM', "test")),
          'orderId' => $order->id,
          "name" => $order->client->name,
          "telnumber" => $order->client->tel,
          "address" => $order->address,
          "orderDate" => $order->delivery_date,
          "timeRange" => $order->delivery_time,
          "pay" => $order->money,
          "summ" => $summ,
          "delivery" => ($summ < 2000) ? 300 : 0,
          "products" => []
        ];

        foreach ($order->products as $product) {
            $emailData['products'][] = [
              'guid' => $product->product->guid,
              'name' => $product->product->name,
              'count' => $product->count,
              'unit' => $product->product->unit,
              'price' => $product->product->price
            ];
            $summ += $product->price * $product->count;
        }
        $emailData['summ'] = $summ;
        $this->data = $emailData;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        Mail::to("suponina@pmc34.ru")->cc("slowdream@yandex.ru")->send(new OrderInfoForManager($this->data));

    }
}
