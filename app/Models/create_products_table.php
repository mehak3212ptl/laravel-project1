<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class create_products_table extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable=[
        'name',
        'price',  
        'image',   
    ];
}
