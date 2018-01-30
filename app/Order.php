<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use TCG\Voyager\Traits\HasRelationships;
use TCG\Voyager\Traits\Translatable;
/**
 * App\Order
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\OrderProducts[] $products
 * @property-read \App\Terminal $terminal
 * @mixin \Eloquent
 */
class Order extends Model
{
    use Translatable,
    HasRelationships;
  protected $table = 'orders';

  protected $fillable = ['guid', 'status', 'address', 'terminal_id', 'money', 'delivery_date', 'delivery_time', 'reason'];

  protected $hidden = [];

  public function terminal()
  {
    return $this->belongsTo('App\Terminal');
  }

  public function client()
  {
    return $this->belongsTo('App\Client');
  }

  public function products()
  {
    return $this->hasMany('App\OrderProducts');
  }
}
