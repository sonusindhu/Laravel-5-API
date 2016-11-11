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
    
    protected $product = 'products';
    
    protected $fillable = [
        'name', 'price', 'category_id',
    ];    
    
    public function category(){
        return $this->belongsTo('Category');
    }

    
}
