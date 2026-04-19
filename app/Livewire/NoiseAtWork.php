<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\NoiseAtWork as NoiseAtWorkModel;
class NoiseAtWork extends Component
{
    public $data=[];
    public function mount(){
        $this->data=NoiseAtWorkModel::fetchData();
    }

    public function render()
    {
        return view('livewire.noise-at-work');
    }
}
