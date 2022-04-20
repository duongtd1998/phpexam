<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create($all)
 */
class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'quantity',
        'size',
        'color',
        'mfg',
        'exp',
    ];
    use HasFactory;
}
