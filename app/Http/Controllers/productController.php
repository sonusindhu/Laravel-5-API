<?php

namespace App\Http\Controllers;
use App\Model\Product;
use App\Model\Category;

//use Illuminate\Http\Request;
use Illuminate\Http\Response;

//use App\Http\Requests;

class productController extends Controller {
    
    public function index() {
        $products = Product::all(); //array('id','name','price','category_id')
        return response()->json(array(
            'error' => false,
            'products' => $products,
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
        $products = Product::find($id , array('id','name','price','category_id'));
        return response()->json(array(
            'error' => false,
            'products' => $products,
            'status_code' => 200
        ));
    }
    
    
    public function getbycategory($id=null) {
        if($id==null){
            return response()->json(array(
                'error' => true,
                'products' => array(),
                'status_code' => 0
            ));
        }
        $products = Product::where(array('category_id' => $id))->get();
        return response()->json(array(
            'error' => false,
            'products' => $products,
            'status_code' => 200
        ));
    }
    
}
