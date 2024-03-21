<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Otchet extends Model
{
  use HasFactory;
  protected $table = 'otchet';

  protected $fillable = [
    'worker_name',
    'name',
    'type',
    'for',
    'count',
    'pul',
    'tolem',
    'comment'
  ];
}
