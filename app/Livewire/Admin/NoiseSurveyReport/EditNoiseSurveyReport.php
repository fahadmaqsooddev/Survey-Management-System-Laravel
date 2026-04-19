<?php

namespace App\Livewire\Admin\NoiseSurveyReport;

use Livewire\Component;
use App\Models\NoiseSurveyReport;
use Livewire\WithFileUploads;

class EditNoiseSurveyReport extends Component
{

    use WithFileUploads;
    public $noise_survey_report_id;
    public $heading;
    public $description;
    public $image;
    public $oldImage;

    protected $rules = [
        'heading' => 'required',
        'description' => 'required',
        'image' => 'nullable|image'
    ];

    public function mount($id)
    {
        $noise_survey_report = NoiseSurveyReport::findOrFail($id);
        $this->noise_survey_report_id = $noise_survey_report->id;
        $this->heading = $noise_survey_report->heading;
        $this->description = $noise_survey_report->description;
        $this->oldImage = $noise_survey_report->image;
    }


    public function updateNoiseSurveyReport()
    {
        $this->validate();

        $banner = NoiseSurveyReport::updateNoiseSurveyReportById(
            $this->noise_survey_report_id,
            $this->heading,
            $this->description,
            $this->image ?? null
        );

        if ($banner) {
            session()->flash('message', 'Noise Survey Report Updated Successfully');
            $this->dispatch('noisesurveyreportUpdated');
        } else {
            session()->flash('message', 'Noise Survey Report Not Found');
        }
    }
    public function render()
    {
        return view('livewire.admin.noise-survey-report.edit-noise-survey-report');
    }
}
