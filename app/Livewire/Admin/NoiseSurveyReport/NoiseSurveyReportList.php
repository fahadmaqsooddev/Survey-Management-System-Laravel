<?php

namespace App\Livewire\Admin\NoiseSurveyReport;

use Livewire\Component;
use App\Models\NoiseSurveyReport as NoiseSurveyReportModel;
use Illuminate\Support\Facades\Log;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
#[Layout('admin_layouts.app',['page_title' => 'Update Noise Survey Report', 'title' => 'Update Noise Survey Report'])]
class NoiseSurveyReportList extends Component
{
    use WithPagination;
    public function render()
    {
        $noise_survey_reports = NoiseSurveyReportModel::fetchData(true);
        return view('livewire.admin.noise-survey-report.noise-survey-report-list',compact('noise_survey_reports'));
    }

    public $showAddNoiseSurveyReport = false;
    public $showEditNoiseSurveyReport = false;
    public $editNoiseSurveyReportId = null;
    

    protected $paginationTheme = 'bootstrap';
    

    #[On('noisesurveyreportAdded', 'refreshList')]
    #[On('noisesurveyreportUpdated', 'refreshList')]
    public function refreshList()
    {

        Log::info('refresh list');
        $this->showAddNoiseSurveyReport = false;
        $this->showEditNoiseSurveyReport = false;
        $this->editNoiseSurveyReportId = null;
    }

    public function toggleAddNoiseSurveyReport()
    {
        if ($this->showAddNoiseSurveyReport || $this->showEditNoiseSurveyReport) {
            $this->showAddNoiseSurveyReport = false;
            $this->showEditNoiseSurveyReport = false;
            $this->editNoiseSurveyReportId = null;
        } else {
            $this->showAddNoiseSurveyReport = true;
        }
    }

   
    public function getHeaderTextProperty()
    {
        if ($this->showAddNoiseSurveyReport) return 'Add Noise Survey Report';
        if ($this->showEditNoiseSurveyReport) return 'Edit Noise Survey Report';
        return 'Noise Survey Report List';
    }

    
    public function getButtonTextProperty()
    {
        if ($this->showAddNoiseSurveyReport || $this->showEditNoiseSurveyReport) return 'Cancel';
        return 'Add Noise Survey Report';
    }

    public function editNoiseSurveyReport($id)
    {
        $this->editNoiseSurveyReportId = $id;
        $this->showEditNoiseSurveyReport = true;
        $this->showAddNoiseSurveyReport = false;
    }

    public function deleteNoiseSurveyReport($id)
    {
        if (NoiseSurveyReportModel::deleteNoiseSurveyReportById($id)) {
            session()->flash('message','Noise Survey Report Deleted Successfully');
        } else {
            session()->flash('message','Noise Survey Report Not Found');
        }
    }
}
