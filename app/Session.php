<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
  protected $table = 'sessions';

  protected $fillable = ['search_text'];

  protected $hidden = [];

  public function order()
  {
    return $this->belongsTo('App\Order');
  }

  public function history()
  {
    return $this->hasMany('App\History');
  }
}
