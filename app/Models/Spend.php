<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spend extends Model
{
    protected $table = 'spends';
    protected $fillable = [
        'name',
        'price'
    ];
}
