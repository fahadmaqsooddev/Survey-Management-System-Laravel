<?php

namespace App\Livewire\Admin\NoiseAtWork;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use App\Models\NoiseSurveyReportBanner as NoiseSurveyReportBannerModel;
use Livewire\WithFileUploads;

#[Layout('admin_layouts.app',['page_title' => 'Update Noise Survey Banner Report', 'title' => 'Update Noise Survey Banner Report'])]
class NoiseSurveyBannerReport extends Component
{
    
    public $id,$title,$image,$existingImage;
    use WithFileUploads;

    protected $rules = [
        'title' => 'required',
        'image' => 'nullable|image|max:2048'
    ];

    public function render()
    {
        return view('livewire.admin.noise-at-work.noise-survey-banner-report');
    }

    public function mount()
    {
        $data = NoiseSurveyReportBannerModel::fetchData();
        $this->id=$data->id;
        $this->title=$data->title;
        $this->existingImage = $data->image;
    }

    public function addUpdateBanner(){
        $this->validate();
        $data=NoiseSurveyReportBannerModel::updateData($this->id,$this->title,$this->image);  
        if ($data) {
            session()->flash('message', 'Banner Updated Successfully');
        } else {
            session()->flash('error', 'Banner Not Updated Successfully');
        }      
    }
}
