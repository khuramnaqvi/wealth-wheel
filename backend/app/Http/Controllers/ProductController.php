<?php

namespace App\Http\Controllers;

use App\Helpers\helperClass;
use App\Interfaces\messasges;
use App\Models\Plan;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('dashboard.product.index', compact('products'));
    }

    public function create()
    {
        return view('dashboard.product.create');
    }

    public function save(Request $request, Product $product)
    {


        $file=null;

        if ($request->hasfile('file')) {
            $file=helperClass::saveFile($request);
        }

        $product->create([
            'name'=>$request->name,
            'product_id'=>$request->product_id,
            'image'=>$file,
        ]);

        if ($product){
            return redirect('admin/products')->with('success', messasges::Save);

        }
        else{
            return back()->with('error',messasges::error);
        }

    }

    public function edit(Product $product)
    {

        return view('dashboard.product.edit', compact('product'));

    }

    public function update(Request $request,Product $product){
        $file=null;

        if ($request->hasfile('file')) {
            $file=helperClass::saveFile($request);
        }

        $list=array(
            'name'=>$request->name,
            'product_id'=>$request->product_id,

        );
        if ($file)
            $list['image']=$file;

        $product->update($list);

        if ($product){
            return redirect('admin/products')->with('success', messasges::Update);

        }
        else{
            return back()->with('error',messasges::error);
        }
    }

    public function delete(Product $product)
    {

        if ($product) {
            $product->delete();
            return redirect('admin/products')->with('success', messasges::Delete);
        } else {
            return back()->with('error', messasges::error);
        }


    }
}
