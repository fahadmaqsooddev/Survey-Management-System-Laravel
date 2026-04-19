<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Service as ServiceModel;
class Services extends Component
{

    public $service=[];

    public function mount(){
        $this->service=ServiceModel::fetchData();
    }

    public function render()
    {
        return view('livewire.services');
    }
}
