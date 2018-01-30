<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use TCG\Voyager\Traits\HasRelationships;
use TCG\Voyager\Traits\Translatable;

/**
 * App\Category
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $products
 * @mixin \Eloquent
 */
class Category extends Model
{
    use Translatable,
      HasRelationships,
      SoftDeletes;

    protected $table = 'categories';

    protected $fillable = ['guid', 'name', 'items_parent'];

    protected $hidden = [];

    public function products()
    {
        return $this->hasMany('App\Product');
    }

    public function inHistory()
    {
        return $this->hasMany('App\History');
    }

    public function parentId()
    {
        return $this->belongsTo(self::class);
    }
}
