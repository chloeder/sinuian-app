<?php

namespace App\Livewire;

use Livewire\Component;

class ShowAPBD extends Component
{
  public function render()
  {
    return view('livewire.show-a-p-b-d', [
      'pendapatan' => \App\Models\DataKeuangan::where('kategori', 'pendapatan')->get(),
      'belanja' => \App\Models\DataKeuangan::where('kategori', 'belanja')->get(),
      'pembiayaan' => \App\Models\DataKeuangan::where('kategori', 'pembiayaan')->get(),
    ]);
  }
}
