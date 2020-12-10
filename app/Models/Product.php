<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'brand_id',
        'class',
        'price',
        'line',
        'created_at',
        'updated_at'
    ];

    public function scopealldate($query)
    {
        $query->join('brands', 'products.brand_id', '=', 'brands.id')
            ->orderBy('products.id')
            ->select(
                'products.id',
                'products.name as pname',
                'brands.name as bname',
                'products.brand_id',
                'products.class',
                'products.price',
                'products.line');
    }

    public function scopesenior($query)
    {
        $query->join('brands', 'products.brand_id', '=', 'brands.id')
            ->orderBy('price')
            ->where('price', '>', 10000)
            ->select(
                'products.id',
                'products.name as pname',
                'brands.name as bname',
                'products.brand_id',
                'products.class',
                'products.price',
                'products.line');
    }

    public function scopeallclass($query)
    {
        $query->select('class')->groupBy('class');
    }

    //MSI微星
    public function scopeMSI($query,$pos)
    {
        $query->join('products', 'products.class', '=', 'class')
            ->where('class', '=', $pos)
            ->orderBy('products.id')
            ->select(
                'products.id',
                'products.name as pname',
                'brands.name as bname',
                'products.brand_id',
                'products.class',
                'products.price',
                'products.line');
    }
}
