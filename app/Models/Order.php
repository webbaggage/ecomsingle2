<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'shipping_phoneNumber',
        'user_id',
        'shipping_city',
        'shipping_postalcode',
        'product_name',
        'quantity',
    ];
}
