<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use TCG\Voyager\Traits\HasRelationships;
use TCG\Voyager\Traits\Translatable;

class Client extends Model
{
    use Translatable,
    HasRelationships;

  protected $table = 'clients';

  protected $fillable = ['name', 'tel'];

  protected $hidden = [];

  public function orders()
  {
    return $this->hasMany('App\Order');
  }
}
