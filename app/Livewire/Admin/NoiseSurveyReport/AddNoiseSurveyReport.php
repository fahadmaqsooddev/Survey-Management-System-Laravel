<?php

namespace App\Livewire\Admin\NoiseSurveyReport;

use Livewire\Component;
use App\Models\NoiseSurveyReport;
use Livewire\WithFileUploads;


class AddNoiseSurveyReport extends Component
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

    public function addNoiseSurveyReport()
    {
        $this->validate();

        NoiseSurveyReport::createData($this->heading, $this->description, $this->image);

        session()->flash('message', 'Noise Survey Report Added Successfully');

        $this->reset(['heading','description','image']);
        
        $this->dispatch('noisesurveyreportAdded');
    }

    public function render()
    {
        return view('livewire.admin.noise-survey-report.add-noise-survey-report');
    }
}
