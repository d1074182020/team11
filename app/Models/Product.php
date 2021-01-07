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
    public function brand()
    {
        return $this->belongsTo('App\Models\Brand','brand_id','id');
    }

    public function scopesenior($query)
    {
        $query ->where('price', '>', 10000)
            ->orderby('price');

    }

    public function scopeallclasss($query)
    {
        $query->select('class')->groupBy('class');
    }

    public function scopecategory($query,$ca)
    {
        $query->where('class', '=', $ca)
            ->orderBy('class');
    }

}
