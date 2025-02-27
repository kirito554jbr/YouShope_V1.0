<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'image',
        'quantity',
        'description',
        'price',
        'categorie_id'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
}
