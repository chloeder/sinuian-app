<?php

namespace App\Livewire;

use Livewire\Component;

class ShowGaleri extends Component
{
  public function render()
  {
    return view('livewire.show-galeri', [
      'informasiDesa' => \App\Models\InformasiDesa::paginate(6),
    ]);
  }
}
