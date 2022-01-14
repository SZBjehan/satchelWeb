<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use DB;
use App\User;

class postController extends Controller
{
    //
    public function index()
    {
        $data = product::all();
        return $data;
    }

    public function create()
    {
//
    }

    public function store(Request $request)
    {
        $req = new product;
        //$req->id = $request->id;
        $req->Product_name = $request->product_name;
        $req->Product_category = $request->product_category;
        $req->Product_description = $request->product_description;
        $req->Product_brand = $request->product_brand;
        $req->Product_image = $request->product_image;
        $req->Product_origin = $request->product_origin;
        $req->Product_color = $request->product_color;
        $req->Price = $request->price;
        
        $res = $req->save();
        if($res){
            return ["result"=>"Product Added"];
        }else{
            return ["result"=>"Product not Added"];
        }
        
    }

    public function show($id)
    {
        $res = product::find($id);
        return $res;
    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {
        $req = product::find($id);
        $req->Product_name = $request->product_name;
        $req->Product_category = $request->product_category;
        $req->Product_description = $request->product_description;
        $req->Product_brand = $request->product_brand;
        $req->Product_image = $request->product_image;
        $req->Product_origin = $request->product_origin;
        $req->Product_color = $request->product_color;
        $req->Price = $request->price;

        $res = $req->save();
        if($res){
            return ["result"=>"Product Updated"];
        }else{
            return ["result"=>"Product not Updated"];
        }
    }

    public function destroy($id)
    {
        $res = product::find($id);
        $result = $res -> delete();
        if($result){
            return ["result"=>"Product Deleted"];
        }else{
            return ["result"=>"Product Not Deleted"];
        }
    }
    public function search($name)
    {
        return product::where('name', 'like', '%' .$name. '%')->get();
        
    }

}
