<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function getProducts(String $search = null)
    {
        $products = $this->where(function($query) use ($search) {
            if($search) {
                $query->where('name', 'LIKE', "%{$search}%");
            }
        })->paginate(9);


        return $products;
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }
}
