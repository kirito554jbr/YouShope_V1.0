<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status',
        'Prix_Total',
        'Adress'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
