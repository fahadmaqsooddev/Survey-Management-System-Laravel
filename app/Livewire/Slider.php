<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Banner;
class Slider extends Component
{

    public $banners = [];
    public function render()
    {
        return view('livewire.slider');
    }

    public function mount(){
        $this->banners=Banner::fetchData();
    }
}
