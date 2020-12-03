<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = product::all();
        return view('products.index',['products'=>$products]);
    }

    public function edit($id)
    {
        $product = product::findOrFail($id)->toArray();
        return view('products.edit', $product);
    }

    public function show($id)
    {
        $product = product::findOrFail($id)->toArray();
        return view('products.show', $product);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $brand_id = $request->input('brand_id');
        $class = $request->input('class');
        $price = $request->input('price');
        $line = $request->input('line');
        product::create([
            'name'=>$name,
            'brand_id'=>$brand_id,
            'class'=>$class,
            'price'=>$price,
            'line'=>$line,
            'created'=>Carbon::now()
        ]);
        return redirect('products');
    }

    public function update($id,Request $request)
    {
        $product = products::findOrFail($id);
        $product ->name = $request ->input('name');
        $product ->brand_id = $request ->input('brand_id');
        $product ->class = $request ->input('class');
        $product ->price = $request ->input('price');
        $product ->line = $request ->input('line');
        $product ->save();
        return redirect('products');
    }
    public function destroy($id)
    {
        $product = product::findOrFail($id);
        $product ->delete();
        return redirect('products');
    }
}
