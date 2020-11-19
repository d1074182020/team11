<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'home',
        'phone',
        'ceo',
        'created_at',
        'updated_at'
    ];

    public static function create(array $array)
    {
    }
}
