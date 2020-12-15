<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $table = 'foods';

    protected $fillable = ['title', 'desc', 'enable', 'price', 'cgy_id', 'options', 'location', 'pic', 'sell_at'];
}
