<?php

namespace App\Livewire\Admin\CostAndCharges;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\CostAndCharge;


use Livewire\Attributes\Layout;
use Livewire\Attributes\On;

#[Layout('admin_layouts.app',['page_title' => 'Banners List', 'title' => 'Banner List'])]

class CostAndCharges extends Component
{
    use WithFileUploads;

    public $id, $title, $description, $banner_title;
   
    public $image, $banner_image;

    public $oldImage, $oldBannerImage;

    protected $rules = [
        'title' => 'required',
        'banner_title' => 'required',
        'description' => 'required',
        'image' => 'nullable|image|max:2048',
        'banner_image' => 'nullable|image|max:2048',
    ];

    public function mount()
    {
        $data = CostAndCharge::fetchData();

        if (!$data) return;

        $this->id = $data->id;
        $this->title = $data->title;
        $this->banner_title = $data->banner_title;
        $this->description = $data->description;

        $this->oldImage = $data->image;
        $this->oldBannerImage = $data->banner_image;
    }

    public function updateCostAndCharges()
    {
        $this->validate();

        $data = CostAndCharge::updateData(
            $this->id,
            $this->title,
            $this->banner_title,
            $this->description,
            $this->image,
            $this->banner_image
        );

        if ($data) {
            $this->reset(['image', 'banner_image']);
            session()->flash('message', 'Cost and Charges Updated Successfully');
        } else {
            session()->flash('error', 'Record not found');
        }
    }

    public function render()
    {
        return view('livewire.admin.cost-and-charges.cost-and-charges');
    }
}