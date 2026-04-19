<?php

namespace App\Livewire\Admin\Services;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Log;
use App\Models\Service as ServiceModel;
use Livewire\Component;

#[Layout('admin_layouts.app',['page_title' => 'Services List', 'title' => 'Services List'])]

class ServicesList extends Component
{
    public $showAddService = false;
    public $showEditService = false;
    public $editServiceId = null;

    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    

    #[On('serviceAdded', 'refreshList')]
    #[On('serviceUpdated', 'refreshList')]
    public function refreshList()
    {

        Log::info('refresh list');
        $this->showAddService = false;
        $this->showEditService = false;
        $this->editServiceId = null;
    }

    public function toggleAddService()
    {
        if ($this->showAddService || $this->showEditService) {
            $this->showAddService = false;
            $this->showEditService = false;
            $this->editServiceId = null;
        } else {
            $this->showAddService = true;
        }
    }

    public function render()
    {
        $services = ServiceModel::fetchData(true);
        return view('livewire.admin.services.services-list',compact('services'));
    }

    // Header text
    public function getHeaderTextProperty()
    {
        if ($this->showAddService) return 'Add Service';
        if ($this->showEditService) return 'Edit Service';
        return 'Service List';
    }

    // Button text
    public function getButtonTextProperty()
    {
        if ($this->showAddService || $this->showEditService) return 'Cancel';
        return 'Add Service';
    }

    public function editService($id)
    {
        $this->editServiceId = $id;
        $this->showEditService = true;
        $this->showAddService = false;
    }

    public function deleteService($id)
    {
        if (ServiceModel::deleteServiceById($id)) {
            session()->flash('message','Service Deleted Successfully');
        } else {
            session()->flash('message','Service Not Found');
        }
    }
}
