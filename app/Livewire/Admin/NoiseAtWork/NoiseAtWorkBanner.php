<?php

namespace App\Livewire\Admin\NoiseAtWork;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\WithFileUploads;
use App\Models\NoiseAtWorkBanner as NoiseAtWorkBannerModel;
#[Layout('admin_layouts.app',['page_title' => 'Update Noise At Work Banner', 'title' => 'Update Noise At Work Banner'])]
class NoiseAtWorkBanner extends Component
{

    public $id,$title,$image,$existingImage;
    use WithFileUploads;

    protected $rules = [
        'title' => 'required',
        'image' => 'nullable|image'
    ];


    public function mount()
    {
        $data = NoiseAtWorkBannerModel::fetchData();
        $this->id=$data->id;
        $this->title=$data->title;
        $this->existingImage = $data->image;
    }

    public function render()
    {
        return view('livewire.admin.noise-at-work.noise-at-work-banner');
    }

    public function addUpdateBanner(){
        $this->validate();
        $data=NoiseAtWorkBannerModel::updateData($this->id,$this->title,$this->image);  
        if ($data) {
            session()->flash('message', 'Banner Updated Successfully');
        } else {
            session()->flash('error', 'Banner Not Updated Successfully');
        }      
    }

}
