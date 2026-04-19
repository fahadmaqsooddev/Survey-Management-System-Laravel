<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\NoiseSurveyReport as NoiseSurveyReportModel;
class NoiseSurveyReport extends Component
{

    public $data=[];

    public function mount(){
        $this->data=NoiseSurveyReportModel::fetchData();
    }

    public function render()
    {
        return view('livewire.noise-survey-report');
    }
}
