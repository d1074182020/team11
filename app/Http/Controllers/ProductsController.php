<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index()
    {
        $products = product::alldate()->get();
        $classs = product::allclass()->get();
        $data = [];
        foreach ($classs as $class)
        {
            $data["$class->class"] = $class->class;
        }
        return view('products.index', ['products' => $products,'classs' => $data]);
    }
    public function senior()
    {
        $products = product::senior()->get();

             return view('products.index', ['products' => $products]);
    }
    public function MSI(Request $request)
    {
        $products = product::class($request->input('pos'))->get();
        $classs = product::allclass()->get();
        $data = [];
        foreach ($classs as $class)
        {
            $data["$class->class"] = $class->class;
        }
        return view('products.index', ['products' => $products,'classs' => $data]);
    }
    public function create()
    {
        $brands = DB::table('brands')
            ->select('brands.id', 'brands.name')
            ->orderBy('brands.id', 'asc')
            ->get();
        $data = [];
        foreach ($brands as $brand)
        {
            $data[$brand->id] = $brand->name;
        }

        return view('products.create', ['brands' => $data]);

    }
    public function edit($id)
    {
        $brands = DB::table('brands')
            ->select('brands.id', 'brands.name')
            ->orderBy('brands.id', 'asc')
            ->get();

        $data = [];
        foreach ($brands as $brand)
        {
            $data[$brand->id] = $brand->name;
        }
        $product = product::findOrFail($id);

        return view('products.edit', ['product' =>$product, 'brands' => $data]);
    }

    public function show($id)
    {

        $product = product::findOrFail($id);
        $brand = brand::findOrFail($product->brand_id);
        return view('products.show', ['product'=> $product, 'brand_name' => $brand->name]);
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
        $product = product::findOrFail($id);

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
