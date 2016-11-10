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
    
    
    public function get($id=null) {
        if($id==null){
            return response()->json(array(
                'error' => true,
                'products' => array(),
                'status_code' => 0
            ));
            exit;
        }
        $category = Category::find($id , array('id','name'));
        return response()->json(array(
            'error' => false,
            'products' => $category,
            'status_code' => 200
        ));
        exit;
    }
    
    
}
