<?php
namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

use Server1C;
use App\Order;
class SendOrdersToServer implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $id;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($id = 0)
    {
        $this->id = $id;
    }
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if ($this->id) {
            $order = Order::find($this->id);
        } else {
            $order = Order::where('status', 'complete')
              ->orWhere(function ($query) {
                  $query->where('status', 'canceled')
                    ->whereNotNull('tel');
              })
              ->first();
        }
        $orderProd = $order->products;
        $curl = new Server1C();
        $arr = [];
        $arr[0] = [
          "type" => "0",
          "idterm" => strtoupper(env('ID_TERM', "test")),
          "IdOrder" => (string) $order->id,
          "date" => (string) date('YmdHis'),
          "name" => (string) $order->client->name,
          "telnumber" => (string) $order->client->tel,
          "address" => (string) $order->address,
          "orderDate" => (string) $order->delivery_date,
          "timeRange" => (string) $order->delivery_time,
          "Pay" => $order->money,
          "Delivery" => 0,
          "reason" => $order->reason
        ];
        $summ = 0;
        foreach ($orderProd as $product) {
            $summ += $product->count * $product->price;
            $arr[] = [
              "type" => "1",
              "name" => intval($product->product->guid),
              "count" => $product->count,
              "price" => $product->price,
              "sum" => $product->count * $product->price
            ];
        }
        $arr[0]["Delivery"] = ($summ < 2000) ? 300 : 0;
        $arr[0]["Summ"] = $summ;
        if (count($arr) <= 1) {
            return;
        }
        // dispatch(new SendOrderToManager($arr));
        // $curl->post($arr);
        $response = $curl->request('crm/hs/Terminal/zakaz', 'POST', $arr);
        $data = json_decode($response['html'], true);
        $order->status = 'sended';
        $order->save();
    }
}