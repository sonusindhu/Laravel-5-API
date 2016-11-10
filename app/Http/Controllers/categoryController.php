<?php

namespace App\Http\Controllers;

use App\Model\Category;
//use App\Model\Product;

use Illuminate\Http\Response;


class categoryController extends Controller {
    
    public function index() {
        $categories = Category::all(array('id','name'));
        return response()->json(array(
            'error' => false,
            'products' => $categories,
            'status_code' => 200
        ));
    }
    
}
