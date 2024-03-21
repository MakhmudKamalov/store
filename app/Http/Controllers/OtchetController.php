<?php

namespace App\Http\Controllers;

use App\Models\Otchet;
use Illuminate\Http\Request;

class OtchetController extends Controller
{
  protected function index()
  {
    $report = Otchet::orderBy('created_at', 'desc')->get();
    return view('otchet-page', compact('report'));
  }
}
