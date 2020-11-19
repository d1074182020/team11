<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    //
    public function index()
    {
        return view('brands.index');
    }

    public function show($id)
    {
        $brand = Brand::findOrFail($id)->toArray();
        return view('brands.show', $brand);

    }
    public function create()
    {
        $brand = Brand::create(['name'=>'Max', 'home'=>'New Taipei City', 'phone'=>9078, 'ceo'=>'ABC', 'created_at'=>Carbon::now()])->toArray();

        return view('brands.create', $brand);

    }
    public function edit()
    {
        return view('brands.edit');

    }
}
