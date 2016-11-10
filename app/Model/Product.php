<?php

//namespace App;
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'price', 'category_id',
    ];
    
    protected function categories(){
        return $this->belongsTo('Category' , 'category_id'); // links this->category_id to category.id
//        return $this->belongsTo(\App\Model\Category::class);
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
}
