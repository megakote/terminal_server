<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use TCG\Voyager\Traits\HasRelationships;
use TCG\Voyager\Traits\Translatable;

/**
 * App\Product
 *
 * @property-read \App\Category $category
 * @mixin \Eloquent
 */
class Product extends Model
{

    use Translatable,
    HasRelationships,
    SoftDeletes;

    protected $table = 'products';

    protected $fillable = ['guid', 'name', 'price', 'count', 'unit', 'description'];

    protected $hidden = [];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function inHistory()
    {
        return $this->hasMany('App\History');
    }
}
