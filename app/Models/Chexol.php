<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chexol extends Model
{
  protected $table = "chexols";
  protected $fillable = [
    'name',
    'for',
    'quantity',
    'price',
    'total',
    'type'
  ];
}
