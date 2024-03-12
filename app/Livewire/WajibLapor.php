<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use Livewire\Component;

class WajibLapor extends Component
{
  #[Rule('required')]
  public $nama_tamu, $jaga_id, $lama_bertamu, $keperluan_bertamu;
  public function save()
  {
    $this->validate();
    \App\Models\WajibLapor::create([
      'nama_tamu' => $this->nama_tamu,
      'jaga_id' => $this->jaga_id,
      'lama_bertamu' => $this->lama_bertamu,
      'keperluan_bertamu' => $this->keperluan_bertamu
    ]);
    $this->reset();
    toastr()->success('Wajib Lapor Berhasil', 'Berhasil');
  }
  public function render()
  {
    return view('livewire.wajib-lapor', [
      'jagas' => \App\Models\Jaga::all()
    ]);
  }
}
