<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentmodel extends Model
{
    use HasFactory;
    protected $table='student';
    protected $fillable=[
        'name',
        'email',
        'class',
        'mobile',
    ];
}
