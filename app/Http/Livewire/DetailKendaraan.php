<?php

namespace App\Http\Livewire;

use App\Models\Kendaraan;
use App\Models\Pelanggan;
use Livewire\Component;

class DetailKendaraan extends Component
{
    public $kendaraanId;
    public $slug;
    public $selectedPelanggan;

    public function render()
    {
        $kendaraans = Kendaraan::where('slug',$this->slug)->first();

        return view('livewire.detail-kendaraan',[
            'kendaraan' => $kendaraans,
            'pelanggans' => $this->getPelanggans(),
        ]);
    }

    public function mount($kendaraan)
    {
        $this->slug = $kendaraan;
    }

    public function getPelanggans(){
        return Pelanggan::all()->toArray();
    }
}
