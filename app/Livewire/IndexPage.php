<?php

namespace App\Livewire;

use App\Models\Otchet;
use App\Models\Spend;
use Carbon\Carbon;
use Livewire\Component;

class IndexPage extends Component
{

  public function render()
  {
    $date = date('Y-m-d');
    $table_1 = Otchet::where('created_at', 'like', '%' . $date . '%')->orderBy('created_at', 'desc')->get();
    $table_3 = Spend::where('created_at', 'like', '%' . $date . '%')->orderBy('created_at', 'desc')->get();

    $otchet_sum = Otchet::where('created_at', 'like', '%' . $date . '%')->sum('pul');
    $rasxod = Spend::where('created_at', 'like', '%' . $date . '%')->sum('price');

    if ($otchet_sum > $rasxod) {
      $sum = $otchet_sum - $rasxod;
    } else {
      $sum = $rasxod - $otchet_sum;
    }

    return view('livewire.index-page', ['table_1' => $table_1, 'table_3' => $table_3, 'payda' => $sum]);
  }
}
