<?php

namespace App\Livewire;

use Livewire\Component;

class DestinasiWisata extends Component
{
  public function render()
  {
    return view('livewire.destinasi-wisata', [
      'destinasiWisata' => \App\Models\DestinasiWisata::paginate(6),
    ]);
  }
}
