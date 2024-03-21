<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Others extends Model
{
  protected $table = "others";
  protected $fillable = [
    'name',
    'for',
    'quantity',
    'price',
    'total',
    'type'
  ];
}
