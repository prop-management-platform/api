<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prop extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_id',
        'name',
        'description',
        'price',
        'image',
        'quantity',
    ];
}
