<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function index()
    {
        $brands = brand::all();
        return view('brands.index',['brands'=>$brands]);
    }
    public function edit($id)
    {
        $brand = Brand::findOrFail($id)->toArray();
        return view('brands.edit', $brand);

    }
    public function show($id)
    {
        $brand = Brand::findOrFail($id)->toArray();
        return view('brands.show', $brand);

    }
    public function create()
    {
        return view('brands.create');
    }
    public function store(Request $request)
    {
        $name = $request->input('name');
        $home = $request->input('home');
        $phone = $request->input('phone');
        $ceo = $request->input('ceo');

        brand::create([
            'name'=>$name,
            'home'=>$home,
            'phone'=>$phone,
            'ceo'=>$ceo,
            'created'=>Carbon::now()
        ]);
        return redirect('brands');
    }
    public function update($id,Request $request)
    {
        $brand = brands::findOrFail($id);
        $brand ->name = $request ->input('name');
        $brand ->home = $request ->input('home');
        $brand ->phone = $request ->input('phone');
        $brand ->ceo = $request ->input('ceo');
        $brand ->save();
        return redirect('brands');
    }
    public function destroy($id)
    {
        $brand = brand::findOrFail($id);
        $brand ->delete();
        return redirect('brands');
    }
}
