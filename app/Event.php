<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Event
 *
 * @property-read \App\Terminal $terminal
 * @mixin \Eloquent
 */
class Event extends Model
{
  protected $table = 'events';

  protected $fillable = ['name', 'comment'];

  protected $hidden = [];

  public function terminal()
  {
    return $this->belongsTo('App\Terminal');
  }
}
