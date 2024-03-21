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
use Illuminate\Support\Facades\Session;


use function Ramsey\Uuid\v1;

class AppleController extends Controller
{
  public function home()
  {
    return view('welcome');
  }
  public function addstock()
  {
    return view('addstock');
  }
  public function spend()
  {
    return view('spend');
  }
  public function addspend(request $request)
  {
    spend::create([
      'name' => $request->name,
      'price' => $request->price
    ]);
    return view('spend');
  }
  public function allspend()
  {
    $spend = spend::all();
    return view('allspend', compact('spend'));
  }
  public function delspend($id)
  {
    spend::destroy($id);
    return back();
  }

  public function addchexol(Request $request)
  {
    $valid = $request->validate([
      'name' => 'required|string|unique:chexols|unique:adapters|unique:naushniks|unique:others|unique:shnurs',
      'for' => 'required|string',
      'quantity' => 'required|numeric|min:1',
      'price' => 'required|numeric|min:500',
      'type' => 'required'
    ]);

    $type = $request->type;

    if ($type == 'chexol') {
      Chexol::create([
        'name' => $request->name,
        'for' => $request->for,
        'quantity' => $request->quantity,
        'price' => $request->price,
        'total' => $request->quantity * $request->price,
        'type' => 'Чехол'
      ]);
    } elseif ($type == 'adapter') {
      Adapter::create([
        'name' => $request->name,
        'for' => $request->for,
        'quantity' => $request->quantity,
        'price' => $request->price,
        'total' => $request->quantity * $request->price,
        'type' => 'Адаптер'
      ]);
    } elseif ($type == 'naushnik') {
      Naushnik::create([
        'name' => $request->name,
        'for' => $request->for,
        'quantity' => $request->quantity,
        'price' => $request->price,
        'total' => $request->quantity * $request->price,
        'type' => 'Наушник'
      ]);
    } elseif ($type == 'shnur') {
      Shnur::create([
        'name' => $request->name,
        'for' => $request->for,
        'quantity' => $request->quantity,
        'price' => $request->price,
        'total' => $request->quantity * $request->price,
        'type' => 'Шнур'
      ]);
    } else {
      Others::create([
        'name' => $request->name,
        'for' => $request->for,
        'quantity' => $request->quantity,
        'price' => $request->price,
        'total' => $request->quantity * $request->price,
        'type' => 'Другой'
      ]);
    }

    Session::flash('tovar-added', true);
    return back();
    // return $this->allstock();
  }

  public function allstock()
  {
    $chexols = Chexol::all();
    $adapters = Adapter::all();
    $shnurs = Shnur::all();
    $naushniks = Naushnik::all();
    $others = Others::all();
    return view('allstock', compact('chexols', 'adapters', 'shnurs', 'naushniks', 'others'));
  }


  public function deleteTovar($id, $type)
  {
    if ($type == 'Чехол') {
      Chexol::destroy($id);
    } elseif ($type == 'Адаптер') {
      Adapter::destroy($id);
    } elseif ($type == 'Шнур') {
      Shnur::destroy($id);
    } elseif ($type == 'Наушник') {
      Naushnik::destroy($id);
    } else {
      Others::destroy($id);
    }
    return back();
  }
  protected function addTovar($id, $type)
  {
    if ($type == 'Чехол') {
      $tovar = Chexol::find($id);
    } elseif ($type == 'Адаптер') {
      $tovar = Adapter::find($id);
    } elseif ($type == 'Шнур') {
      $tovar = Shnur::find($id);
    } elseif ($type == 'Наушник') {
      $tovar = Naushnik::find($id);
    } else {
      $tovar = Others::find($id);
    }

    return view('add-tovar-page', compact('tovar'));
  }
  protected function updatestock(Request $request)
  {
    $valid = $request->validate([
      'ID' => 'required|numeric',
      'type' => 'required|string',
      'quantity' => 'required|min:0'
    ]);
    $id = $request->ID;
    $type = $request->type;

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
    $pul = $request->quantity * $product['price'];
    $count = $product['quantity'] + $request->quantity;
    $sum = $product['total'] + $pul;

    $product->update([
      'quantity' => $count,
      'total' => $sum
    ]);

    Session::flash('add-tovar', true);
    return back();
  }


  protected function editTovar($id, $type)
  {
    if ($type == 'Чехол') {
      $tovar = Chexol::find($id);
    } elseif ($type == 'Адаптер') {
      $tovar = Adapter::find($id);
    } elseif ($type == 'Шнур') {
      $tovar = Shnur::find($id);
    } elseif ($type == 'Наушник') {
      $tovar = Naushnik::find($id);
    } else {
      $tovar = Others::find($id);
    }

    return view('edit-tovar-page', compact('tovar'));
  }

  protected function updateTovar(Request $request)
  {
    $type = $request->type;
    $id = $request->id;

    if ($type == 'Чехол') {
      $tovar = Chexol::find($id);
    } elseif ($type == 'Адаптер') {
      $tovar = Adapter::find($id);
    } elseif ($type == 'Шнур') {
      $tovar = Shnur::find($id);
    } elseif ($type == 'Наушник') {
      $tovar = Naushnik::find($id);
    } else {
      $tovar = Others::find($id);
    }

    $tovar->update([
      'name' => $request->name,
      'type' =>  $request->type,
      'for' =>  $request->for,
      'quantity' =>  $request->quantity,
      'price' => $request->price,
      'total' => $request->quantity * $request->price

    ]);

    Session::flash('edit-tovar', true);
    return back();
  }


  // Satiw
  protected function satiw()
  {
    $chexols = Chexol::where('quantity', '>', 0)->get();
    $adapters = Adapter::where('quantity', '>', 0)->get();
    $shnurs = Shnur::where('quantity', '>', 0)->get();
    $naushniks = Naushnik::where('quantity', '>', 0)->get();
    $others = Others::where('quantity', '>', 0)->get();
    return view('satiw-page', compact('chexols', 'adapters', 'shnurs', 'naushniks', 'others'));
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

    return view('satiw-form-page', compact('product', 'worker'));
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

  protected function vozvratTovar($id)
  {
    $array = Otchet::find($id);
    $type = $array['type'];
    if ($type == 'Чехол') {
      $product = Chexol::Where('for', $array['for'])->first();
    } elseif ($type == 'Адаптер') {
      $product = Adapter::Where('for', $array['for'])->first();
    } elseif ($type == 'Шнур') {
      $product = Shnur::Where('for', $array['for'])->first();
    } elseif ($type == 'Наушник') {
      $product = Naushnik::Where('for', $array['for'])->first();
    } else {
      $product = Others::Where('for', $array['for'])->first();;
    }

    if (!isset($product)) {
      // return 'if';
      $pul = $array['pul'] / $array['count'];
      if ($type == 'chexol') {
        Chexol::create([
          'name' => $array['name'],
          'for' => $array['for'],
          'quantity' => $array['count'],
          'price' => $pul,
          'total' => $array['count'] * $pul,
          'type' => 'Чехол'
        ]);
      } elseif ($type == 'adapter') {
        Adapter::create([
          'name' => $array['name'],
          'for' => $array['for'],
          'quantity' => $array['count'],
          'price' => $pul,
          'total' => $array['count'] * $pul,
          'type' => 'Адаптер'
        ]);
      } elseif ($type == 'naushnik') {
        Naushnik::create([
          'name' => $array['name'],
          'for' => $array['for'],
          'quantity' => $array['count'],
          'price' => $pul,
          'total' => $array['count'] * $pul,
          'type' => 'Наушник'
        ]);
      } elseif ($type == 'shnur') {
        Shnur::create([
          'name' => $array['name'],
          'for' => $array['for'],
          'quantity' => $array['count'],
          'price' => $pul,
          'total' => $array['count'] * $pul,
          'type' => 'Шнур'
        ]);
      } else {
        Others::create([
          'name' => $array['name'],
          'for' => $array['for'],
          'quantity' => $array['count'],
          'price' => $pul,
          'total' => $array['count'] * $pul,
          'type' => 'Другой'
        ]);
      }
    } else {
      // return 'else';
      $quan = $product->quantity;
      $pricee = $product->price;
      $total = ($quan + $array['count']) * $pricee;
      $product->update([
        'quantity' => $quan + $array['count'],
        'total' => $total
      ]);
    }
    Otchet::destroy($id);
    return back();
  }


  protected function delOtchetTovar($id)
  {
    Otchet::destroy($id);
    return back();
  }
}
