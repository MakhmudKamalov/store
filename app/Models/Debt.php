<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debt extends Model
{
    use HasFactory;
    protected $table = 'debts';

    protected $fillable = [
      'worker_name',
      'name',
      'type',
      'count',
      'pul',
      'tolem',
      'comment',
      'debtor',
      'phone1',
      'phone2'
    ];
}
