<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use TCG\Voyager\Traits\HasRelationships;
use TCG\Voyager\Traits\Translatable;
/**
 * App\OrderProducts
 *
 * @property-read \App\Order $order
 * @property-read \App\Product $product
 * @mixin \Eloquent
 */
class OrderProducts extends Model
{
    use Translatable,
    HasRelationships;
  protected $table = 'order_products';

  protected $fillable = ['guid', 'count', 'price'];

  protected $hidden = [];

  public function order()
  {
    return $this->belongsTo('App\Order');
  }


  public function product()
  {
    return $this->belongsTo('App\Product');
  }
}
