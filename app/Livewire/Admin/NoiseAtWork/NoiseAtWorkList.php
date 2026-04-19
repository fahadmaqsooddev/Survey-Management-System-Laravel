<?php

namespace App\Livewire\Admin\NoiseAtWork;

use Livewire\Component;
use App\Models\NoiseAtWork as NoiseAtWorkModel;
use Illuminate\Support\Facades\Log;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
#[Layout('admin_layouts.app',['page_title' => 'Update Noise At Work', 'title' => 'Update Noise At Work'])]
class NoiseAtWorkList extends Component
{
    use WithPagination;

    public function render()
    {
        $noise_at_works = NoiseAtWorkModel::fetchData(true);
        return view('livewire.admin.noise-at-work.noise-at-work-list',compact('noise_at_works'));
    }

   public $showAddNoiseAtWork = false;
   public $showEditNoiseAtWork = false;
   public $editNoiseAtWorkId = null;
    

    protected $paginationTheme = 'bootstrap';
    

    #[On('noiseatworkAdded', 'refreshList')]
    #[On('noiseatworkUpdated', 'refreshList')]
    public function refreshList()
    {

        Log::info('refresh list');
        $this->showAddNoiseAtWork = false;
        $this->showEditNoiseAtWork = false;
        $this->editNoiseAtWorkId = null;
    }

    public function toggleAddNoiseAtWork()
    {
        if ($this->showAddNoiseAtWork || $this->showEditNoiseAtWork) {
            $this->showAddNoiseAtWork = false;
            $this->showEditNoiseAtWork = false;
            $this->editNoiseAtWorkId = null;
        } else {
            $this->showAddNoiseAtWork = true;
        }
    }

   
    public function getHeaderTextProperty()
    {
        if ($this->showAddNoiseAtWork) return 'Add Noise At Work';
        if ($this->showEditNoiseAtWork) return 'Edit Noise At Work';
        return 'Noise At Work List';
    }

    
    public function getButtonTextProperty()
    {
        if ($this->showAddNoiseAtWork || $this->showEditNoiseAtWork) return 'Cancel';
        return 'Add Noise At Work';
    }

    public function editNoiseAtWork($id)
    {
        $this->editNoiseAtWorkId = $id;
        $this->showEditNoiseAtWork = true;
        $this->showAddNoiseAtWork = false;
    }

    public function deleteNoiseAtWork($id)
    {
        if (NoiseAtWorkModel::deleteNoiseAtWorkById($id)) {
            session()->flash('message','Noise At Work Deleted Successfully');
        } else {
            session()->flash('message','Noise At Work Not Found');
        }
    }
}
