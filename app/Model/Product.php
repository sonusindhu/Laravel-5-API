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
    
    protected function category(){
        return $this->belongsTo('Category'); // links this->state_id to state.id
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
}
