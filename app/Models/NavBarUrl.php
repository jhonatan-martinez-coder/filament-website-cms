<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NavBarUrl extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'url',
        'type',
        'child_urls'
    ];

    public $casts = [
        'child_urls' => 'array'
    ];
}
