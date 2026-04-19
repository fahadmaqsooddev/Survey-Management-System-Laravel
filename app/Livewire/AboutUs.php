<?php

namespace App\Livewire;
use App\Models\AboutUs as AboutUsModel;
use Livewire\Component;

class AboutUs extends Component
{

    public $about;

    public function mount(){
        $this->about=AboutUsModel::fetchData();
    }

    public function render()
    {
        return view('livewire.about-us');
    }
}
