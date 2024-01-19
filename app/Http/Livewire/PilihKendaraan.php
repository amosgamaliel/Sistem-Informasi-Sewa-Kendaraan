<?php

namespace App\Http\Livewire;

use App\Models\Kendaraan;
use App\Models\Type;
use App\Models\Brand;
use App\Models\Category;
use Livewire\WithPagination;
use Livewire\Component;

class PilihKendaraan extends Component
{
    use WithPagination;

    public $modelId;
    public $modalFormVisible;
    public $modal;
    public $modalConfirmDeleteVisible;
    public $namaMobil;
    public $selectedJenisKendaraan;
    public $selectedBrand;
    public $selectedTransmission;
    public function render()
    {
        return view('livewire.pilih-kendaraan', [
            'kendaraan' => $this->filter(),
            'jenisKendaraan' => $this->getJenisKendaraan(),
            'brands' => $this->getBrands(),
            'categories' => $this->getCategories(),
        ]);
    }

    public function mount()
    {
        $this->resetPage();
    }

    public function filter(){
        $builder = Kendaraan::query()->orderBy('nama', 'asc');

        if ($this->namaMobil) {
            $builder->where('nama', 'like', '%' . $this->namaMobil . '%');
        }

        if ($this->selectedJenisKendaraan) {
            $builder->where('category_id', $this->selectedJenisKendaraan);
        }

        if ($this->selectedTransmission) {
            $builder->where('type_id', $this->selectedTransmission);
        }

        if ($this->selectedBrand) {
            $builder->where('brand_id', $this->selectedBrand);
        }
        return $builder->paginate(9);
    }

    public function getJenisKendaraan(){

        return Type::all()->toArray();
    }

    public function getBrands(){
        return Brand::all()->toArray();
    }

    public function getCategories(){
        return Category::all()->toArray();
    }
}
