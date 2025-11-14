<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class prodect extends Model
{
    protected $fillable = ['name', 'price', 'description', 'image'];

    public function wishlists()
    {
        return $this->hasMany(wishlist::class, 'product_id');
    }
}
