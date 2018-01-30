<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

use App\Product;
use App\Category;
use Server1C;

class GetProductsFromServer implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $Server1C = New Server1C();
        $data = $Server1C->getItems();

        $category = new Category;
        foreach ($data['categorys'] as $val) {
            $category::firstOrCreate([
              'guid' => $val['groupid'],
              'name' => $val['group'],
              'parent_id' => $val['parentid']
            ]);
        }

        foreach ($data['products'] as $val) {
            $category = $category::firstOrCreate([
              'guid' => $val['groupid'],
              'name' => $val['group'],
            ]);
            $category->update([
              'items_parent' => true
            ]);
            $product = Product::where('guid', '=', $val['id'])
              ->withTrashed()->first() ?: new Product(['guid' => $val['id']]);
            $product->fill([
              'name' => $val['name'],
              'image' => 'image.tyt',
              'description' => str_replace("\n", '<br>', $val['descr']),
              'price' => (int)$val['price'],
              'count' => (int)$val['mount'],
              'unit' => $val['unit'],
              'deleted_at' => null
            ]);
            $category->products()->save($product);
        }
    }
}