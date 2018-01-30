<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Spatial;

use TCG\Voyager\Traits\HasRelationships;
use TCG\Voyager\Traits\Translatable;
/**
 * App\Terminal
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Event[] $events
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Order[] $orders
 * @mixin \Eloquent
 */
class Terminal extends Model
{
  use Translatable,
    HasRelationships;
  use Spatial;

  protected $table = 'terminals';

  protected $fillable = ['name', 'address', 'image', 'comment'];

  protected $hidden = [];

  public function events()
  {
    return $this->hasMany('App\Event');
  }

  public function orders()
  {
    return $this->hasMany('App\Order');
  }

  public function sessions()
  {
    return $this->hasMany('App\Session');
  }
}
