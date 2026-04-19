<?php

namespace App\Livewire\Admin\Services;

use Livewire\Component;
use App\Models\Service;
use Livewire\WithFileUploads;

class EditService extends Component
{

use WithFileUploads;

    public $service_id;
    public $heading;
    public $description;
    public $image;
    public $oldImage;

    protected $rules = [
        'heading' => 'required',
        'description' => 'required',
        'image' => 'nullable|image|max:2048'
    ];

    public function render()
    {
        return view('livewire.admin.services.edit-service');
    }

    public function mount($id)
    {
        $banner = Service::findOrFail($id);

        $this->service_id = $banner->id;
        $this->heading = $banner->heading;
        $this->description = $banner->description;
        $this->oldImage = $banner->image;
    }


    public function updateService()
    {
        $this->validate();

        $banner = Service::updateServiceById(
            $this->service_id,
            $this->heading,
            $this->description,
            $this->image ?? null
        );

        if ($banner) {
            session()->flash('message', 'Service Updated Successfully');
            $this->dispatch('serviceUpdated');
        } else {
            session()->flash('message', 'Service Not Found');
        }
    }

    
}
