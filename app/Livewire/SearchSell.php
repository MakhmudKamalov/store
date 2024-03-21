<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Adapter;
use App\Models\Chexol;
use App\Models\Naushnik;
use App\Models\Others;
use App\Models\Shnur;

use Illuminate\Support\Collection;

class SearchSell extends Component
{
  public $search = '';
  public $products;

  public function render()
  {
    $this->products = [];

    if (strlen($this->search) > 0) {
      $this->products = collect();
      $this->products = $this->searchProducts($this->search);
    }

    return view('livewire.search-sell', ['products' => $this->products]);
  }

  private function searchProducts($searchTerm)
  {
    return collect()
      ->merge(Adapter::where('name', 'LIKE', '%' . $searchTerm . '%')->get())
      ->merge(Chexol::where('name', 'LIKE', '%' . $searchTerm . '%')->get())
      ->merge(Naushnik::where('name', 'LIKE', '%' . $searchTerm . '%')->get())
      ->merge(Others::where('name', 'LIKE', '%' . $searchTerm . '%')->get())
      ->merge(Shnur::where('name', 'LIKE', '%' . $searchTerm . '%')->get());
  }
}
