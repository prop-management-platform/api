<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_owner_id',
        'name',
        'address',
        'city',
        'phone_number',
        'email',
    ];

    public $timestamps = false;
}
