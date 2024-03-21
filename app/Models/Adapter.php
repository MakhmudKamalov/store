<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adapter extends Model
{
  protected $table = "adapters";
  protected $fillable = [
    'name',
    'for',
    'quantity',
    'price',
    'total',
    'type'
  ];
}
