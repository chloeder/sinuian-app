<?php

namespace App\Livewire;

use App\Models\DataPenduduk;
use App\Models\Surat;
use Livewire\Attributes\Rule;
use Livewire\Component;

class SuratOnline extends Component
{
  #[Rule('required')]
  public $nama, $nik, $email, $jenis_surat, $pesan;
  public function save()
  {
    $this->validate();

    $existingNik = DataPenduduk::where('nik', $this->nik)->first();

    if (!$existingNik) {
      toastr()->error('NIK Tidak Ditemukan', 'Gagal');
      return;
    }

    Surat::create([
      'nama' => $this->nama,
      'nik' => $this->nik,
      'email' => $this->email,
      'jenis_surat' => $this->jenis_surat,
      'pesan' => $this->pesan
    ]);
    $this->reset();
    toastr()->success('Surat Berhasil', 'Berhasil');
  }
  public function render()
  {
    return view('livewire.surat-online');
  }
}
