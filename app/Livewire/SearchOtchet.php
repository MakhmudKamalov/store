<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Otchet;
use Illuminate\Support\Facades\Session;


class SearchOtchet extends Component
{
  public $search = '';
  public function render()
  {
    $results = [];
    $count = strlen($this->search);
    if ($count >= 1) {
      $results = Otchet::where('name', 'like', '%' . $this->search . '%')->orWhere('created_at', 'like', '%' . $this->search . '%')->limit(10)->get();
    }

    Session::flash('livewire', true);
    return view('livewire.search-otchet', ['users' => $results]);
    // return redirect()->route('otchet-page', ['users' => $results]);
  }
}
