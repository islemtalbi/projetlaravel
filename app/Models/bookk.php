<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookk extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'author',
        'pages',
        'price'
    ];
}
