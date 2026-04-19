<?php

namespace App\Livewire\Admin\Services;

use Livewire\Component;
use App\Models\Service;
use Livewire\WithFileUploads;

class AddService extends Component
{
     use WithFileUploads;

    public $heading;
    public $description;
    public $image;

    protected $rules = [
        'heading' => 'required',
        'description' => 'required',
        'image' => 'required|image'
    ];

    public function render()
    {
        return view('livewire.admin.services.add-service');
    }

    public function addService()
    {
        $this->validate();

        Service::createData($this->heading, $this->description, $this->image);

        session()->flash('message', 'Service Added Successfully');

        $this->reset(['heading','description','image']);
        
        $this->dispatch('serviceAdded');
    }
}
