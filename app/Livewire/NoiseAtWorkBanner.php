<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\NoiseAtWorkBanner as NoiseAtWorkBannerModel; 
class NoiseAtWorkBanner extends Component
{
    public $data=null;
    
    public function mount(){
        $this->data=NoiseAtWorkBannerModel::fetchData();
    }

    public function render()
    {
        return view('livewire.noise-at-work-banner');
    }
}
