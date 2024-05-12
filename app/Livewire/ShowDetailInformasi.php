<?php

namespace App\Livewire;

use App\Models\InformasiDesa;
use Livewire\Component;

class ShowDetailInformasi extends Component
{
  public $informasiDesa, $populerPost, $informasiId;
  public function mount($id)
  {
    $this->informasiId = $id;
    $this->informasiDesa = InformasiDesa::find($this->informasiId);
    $this->informasiDesa->increment('views');
    $this->populerPost = InformasiDesa::orderBy('views', 'desc')->take(5)->get();
  }
  public function render()
  {

    return view('livewire.show-detail-informasi', [
      // 'informasiDesa' => InformasiDesa::find($this->informasiId),
      // 'populerPost' => InformasiDesa::orderBy('views', 'desc')->take(5)->get()
    ]);
  }
}
