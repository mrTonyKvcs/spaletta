<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;

    protected $fillable = [ 'category_id', 'slug', 'name', 'comment','price', 'less_price', 'wine'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];


    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
