<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
    ];
    protected $category = 'categories';
    
    public function product() {
        return $this->hasMany('Product', 'category_id');
    }
    
}
