<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\OrderFactory;

class Order extends Model
{
    use HasFactory;


protected $fillable = [
            'name',
            'product',
            'quantity',
];

protected static function newFactory()
{
    return OrderFactory::new();
}

}
