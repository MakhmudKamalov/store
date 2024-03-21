<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Naushnik extends Model
{
  protected $table = "naushniks";
  protected $fillable = [
    'name',
    'for',
    'quantity',
    'price',
    'total',
    'type'
  ];
}
