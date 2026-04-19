<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\NoiseSurveyReportBanner as NoiseSurveyReportBannerModel;
class NoiseSurveyReportBanner extends Component
{

    public $data=null;

    public function mount(){
        $this->data=NoiseSurveyReportBannerModel::fetchData();

    }

    public function render()
    {
        return view('livewire.noise-survey-report-banner');
    }
}
