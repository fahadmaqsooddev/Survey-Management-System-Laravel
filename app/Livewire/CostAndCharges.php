<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\CostAndCharge;
use App\Models\QuoteRequirement;
class CostAndCharges extends Component
{
    public $cost_and_charges;
    public $quote_requirements = [];
   
    public function mount(){
        $this->cost_and_charges = CostAndCharge::fetchData();
        $this->quote_requirements=QuoteRequirement::fetchData();
    }
    public function render()
    {
        return view('livewire.cost-and-charges');
    }
}
