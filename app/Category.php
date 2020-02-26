<?php

namespace App;

use App\CategoryTypes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    protected $fillable = [ 'type_id', 'slug', 'name'];

    public function types()
    {
        return $this->belongsTo(CategoryTypes::class, 'type_id');
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
