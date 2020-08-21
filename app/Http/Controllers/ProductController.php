<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use Session;

class ProductController extends Controller
{
    public function list(Request $request){

    	$search = $request->search;
    	$prod_cnt = Product::count();
    	$product_list = Product::get();

    	return view('list', compact('product_list','prod_cnt'));
    }

    public function add(Request $request){   	

    	return view('add');

    }

    public function save(Request $request){
    	//dd($request);
        $request->validate([
        'name' => 'required|min:3',
        'category' => 'required',
        ]); 
        $product = new Product;
        $product->name          = $request->name;
        $product->category      = $request->category;
        
        $result = $product->save();

        if($result){
        Session::flash('success', 'Product added successfully'); 
        }else{
          Session::flash('danger', 'Error encounterd');   
        }
        return redirect()->route('list');
    }

    public function edit($id){      
        $product = Product::findOrFail($id);
        return view('edit',compact('product'));
    }

    public function update(Request $request , $id){
        
        $request->validate([
        'name' => 'required|min:3',
        'category' => 'required',
        ]); 

        $product = Product::find($id);

        $product->name          =  $request->name;
        $product->category      = $request->category;
        
        $result = $product->save();

        if($result){
        Session::flash('success', 'Product updated successfully'); 
        }else{
          Session::flash('danger', 'Error encounterd');   
        }
        return redirect()->route('list');

    }

    public function show($id){
        $product = Product::findOrFail($id);
        return view('show',compact('product'));
    }

    public function destroy($id){
         $result = Product::destroy($id);
        

        if($result){
           Session::flash('success', 'Product deleted successfully'); 
        } else {
           Session::flash('danger', 'Error Encounterd');
        }
         return redirect()->back();
    }
}
