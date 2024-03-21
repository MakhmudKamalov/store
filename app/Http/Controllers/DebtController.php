<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Chexol;
use App\Models\Adapter;
use App\Models\Shnur;
use App\Models\Naushnik;
use App\Models\Otchet;
use App\Models\Others;
use App\Models\Worker;
use App\Models\Spend;
use App\Models\Debt;

use Illuminate\Support\Facades\Session;


use function Ramsey\Uuid\v1;

class DebtController extends Controller
{

  protected function index()
  {
    $debt = Debt::orderBy('created_at', 'desc')->get();
    return view('debt-page', compact('debt'));
  }
  protected function satiwPage($id, $type)
  {
    $worker = Worker::all();
    if ($type == 'Чехол') {
      $product = Chexol::find($id);
    } elseif ($type == 'Адаптер') {
      $product = Adapter::find($id);
    } elseif ($type == 'Шнур') {
      $product = Shnur::find($id);
    } elseif ($type == 'Наушник') {
      $product = Naushnik::find($id);
    } else {
      $product = Others::find($id);
    }

    return view('debt-form-page', compact('product', 'worker'));
  }

  protected function satiwTovar(Request $request)
  {
    $valid = $request->validate([
      'ID' => 'required|numeric',
      'type' => 'required|string',
      'worker' => 'required',
      'count' => 'required|min:0'
    ]);
    $id = $request->ID;
    $type = $request->type;
    $worker = Worker::find($request->worker);
    if ($type == 'Чехол') {
      $product = Chexol::find($id);
    } elseif ($type == 'Адаптер') {
      $product = Adapter::find($id);
    } elseif ($type == 'Шнур') {
      $product = Shnur::find($id);
    } elseif ($type == 'Наушник') {
      $product = Naushnik::find($id);
    } else {
      $product = Others::find($id);
    }

    $pul = $request->count * $product['price'];
    $count = $product['quantity'] - $request->count;
    $sum = $product['total'] - $pul;

    $product->update([
      'quantity' => $count,
      'total' => $sum
    ]);

    $worker_name = $worker['name'] . ' ' . $worker['surname'];

    Otchet::create([
      'worker_name' => $worker_name,
      'name' =>  $product['name'],
      'type' => $product['type'],
      'for' => $product['for'],
      'count' => $request->count,
      'pul' => $pul,
      'tolem' => $request->tolem,
      'comment' => $request->comment
    ]);

    Session::flash('satildi', true);
    return back();
  }
}
