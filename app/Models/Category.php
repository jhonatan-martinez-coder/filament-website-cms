<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'description'
    ];

    public function products(){
        return $this->morphedByMany(Product::class, 'categorizable');
    }
}
