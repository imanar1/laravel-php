<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
    'productid',
    'producname',
    'price',
    'Qty',
    'Tax',
    'Total',
    'Desc',
    'Net',
    'Userid',
    'Username',
    ];
}
