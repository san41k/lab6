<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function dish()
    {
        return $this->belongsToMany(Dish::class);
    }

}
