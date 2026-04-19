<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ContactDetail as ContactDetailModel;

class ContactDetail extends Component
{

    public $contact_detail;

    public function mount(){
        $this->contact_detail=ContactDetailModel::fetchData();

    }

    public function render()
    {
        
        return view('livewire.contact-detail');
    }
}
