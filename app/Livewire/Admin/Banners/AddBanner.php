<?php

namespace App\Livewire\Admin\Banners;

use Livewire\Component;
use App\Models\Banner;
use Livewire\WithFileUploads;

class AddBanner extends Component
{

    use WithFileUploads;

    public $heading;
    public $description;
    public $image;

    protected $rules = [
        'heading' => 'required',
        'description' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];

    public function render()
    {
        return view('livewire.admin.banners.add-banner');
    }

    public function addBanner()
    {
        $this->validate();

        Banner::createData($this->heading, $this->description, $this->image);

        session()->flash('message', 'Banner Added Successfully');

        $this->reset(['heading','description','image']);
        
        $this->dispatch('bannerAdded');
    }
}
