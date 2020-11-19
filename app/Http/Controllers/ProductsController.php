<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index()
    {
        return view('products.index');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id)->toArray();
        return view('products.show', $product);

    }
    public function create()
    {
        $product = Product::create(['name'=>'Max', 'home'=>'New Taipei City', 'phone'=>9078, 'ceo'=>'ABC', 'created_at'=>Carbon::now()])->toArray();

        return view('products.create', $product);

    }
    public function edit()
    {
        return view('products.edit');

    }
}
