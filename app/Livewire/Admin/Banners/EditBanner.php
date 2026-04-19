<?php

namespace App\Livewire\Admin\Banners;

use Livewire\Component;
use App\Models\Banner;
use Livewire\WithFileUploads;

class EditBanner extends Component
{

   use WithFileUploads;

    public $banner_id;
    public $heading;
    public $description;
    public $image;
    public $oldImage;

    protected $rules = [
        'heading' => 'required',
        'description' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];

    public function mount($id)
    {
        $banner = Banner::findOrFail($id);

        $this->banner_id = $banner->id;
        $this->heading = $banner->heading;
        $this->description = $banner->description;
        $this->oldImage = $banner->image;
    }


    public function updateBanner()
    {
        $this->validate();

        $banner = Banner::updateBannerById(
            $this->banner_id,
            $this->heading,
            $this->description,
            $this->image ?? null
        );

        if ($banner) {
            session()->flash('message', 'Banner Updated Successfully');
            $this->dispatch('bannerUpdated');
        } else {
            session()->flash('message', 'Banner Not Found');
        }
    }

    public function render()
    {
        return view('livewire.admin.banners.edit-banner');
    }
}
