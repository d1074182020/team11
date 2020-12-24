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
            ->where('price', '>', 10000)
            ->orderBy('price')
            ->select(
                'products.id',
                'products.name as pname',
                'brands.name as bname',
                'products.brand_id',
                'products.class',
                'products.price',
                'products.line');
    }

    public function scopeallclasss($query)
    {
        $query->select('class')->groupBy('class');
    }

    public function scopecategory($query,$ca)
    {
        $query->join('brands', 'products.brand_id', '=', 'brands.id')
            ->where('class', '=', $ca)
            ->orderBy('class')
            ->select(
                'products.id',
                'products.name as pname',
                'brands.name as bname',
                'products.brand_id',
                'products.class',
                'products.price',
                'products.line');
    }
    public function brand()
    {
        return $this->belongsTo('App\Models\Brand','brand_id','id');
    }
}
