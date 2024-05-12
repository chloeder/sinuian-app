<?php

namespace App\Livewire;

use Livewire\Component;

class ShowUmkm extends Component
{
  public function render()
  {
    return view('livewire.show-umkm', [
      'usahas' => \App\Models\Usaha::paginate(6),
    ]);
  }
}
