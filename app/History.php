<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
  protected $table = 'histories';

  protected $fillable = [];

  protected $hidden = [];

  public function category()
  {
    return $this->belongsTo('App\Category');
  }
  public function product()
  {
    return $this->belongsTo('App\Product');
  }
}
