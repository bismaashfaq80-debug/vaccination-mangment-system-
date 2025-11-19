<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class wishlist extends Model
{
    protected $fillable = ['user_id', 'id_id'];

    public function hospital()
    {
        return $this->belongsTo(Hospital::class, 'hospital_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
