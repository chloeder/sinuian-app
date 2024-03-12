<?php

namespace App\Livewire;

use Livewire\Component;

class ShowHome extends Component
{
  public function render()
  {
    return view(
      'livewire.show-home',
      [
        'informasiDesa' => \App\Models\InformasiDesa::orderBy('created_at', 'desc')->take(6)->get(),
        'populerPost' => \App\Models\InformasiDesa::orderBy('views', 'desc')->take(5)->get()
      ]
    );
  }
}
