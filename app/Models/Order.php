<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'from',
        'to',
        'date',
        'time',
        'number_of_person',
        'phone',
    ];

    // user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
