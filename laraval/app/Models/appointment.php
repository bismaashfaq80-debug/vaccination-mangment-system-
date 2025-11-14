<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Appointment extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'date', 'hospital', 'vaccination', 'message', 'status', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
