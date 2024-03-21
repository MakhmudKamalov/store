<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shnur extends Model
{
  protected $table = "shnurs";
  protected $fillable = [
    'name',
    'for',
    'quantity',
    'price',
    'total',
    'type'
  ];
}
