<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryTypes extends Model
{
    use SoftDeletes;

    protected $fillable = [ 'slug', 'name'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];


    public function categories()
    {
        $this->hasMany(Category::class);
    }
}
