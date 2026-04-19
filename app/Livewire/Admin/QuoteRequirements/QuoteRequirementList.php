<?php

namespace App\Livewire\Admin\QuoteRequirements;

use Livewire\Component;

use Livewire\Attributes\Layout;
use App\Models\QuoteRequirement as QuoteRequirementModel;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Log;

#[Layout('admin_layouts.app',['page_title' => 'Quote Requirement List', 'title' => 'Quote Requirement List'])]
class QuoteRequirementList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $showAddQuoteRequirement = false;
    public $showEditQuoteRequirement = false;
    public $editQuoteRequirementId = null;


    #[On('quoterequirementAdded', 'refreshList')]
    #[On('quoterequirementUpdated', 'refreshList')]
    
    public function refreshList()
    {

        Log::info('refresh list');
        $this->showAddQuoteRequirement = false;
        $this->showEditQuoteRequirement = false;
        $this->editQuoteRequirementId = null;
    }


    public function render()
    {
        $quote_requirements = QuoteRequirementModel::fetchData(true);
        return view('livewire.admin.quote-requirements.quote-requirement-list',compact('quote_requirements'));
    }


    public function toggleAddQuoteRequirement()
    {
        if ($this->showAddQuoteRequirement || $this->showEditQuoteRequirement) {
            $this->showAddQuoteRequirement = false;
            $this->showEditQuoteRequirement = false;
            $this->editQuoteRequirementId = null;
        } else {
            $this->showAddQuoteRequirement = true;
        }
    }

    // Header text
    public function getHeaderTextProperty()
    {
        if ($this->showAddQuoteRequirement) return 'Add Quote Requirement';
        if ($this->showEditQuoteRequirement) return 'Edit Quote Requirement';
        return 'Quote Requirement List';
    }

    // Button text
    public function getButtonTextProperty()
    {
        if ($this->showAddQuoteRequirement || $this->showEditQuoteRequirement) return 'Cancel';
        return 'Add Quote Requirement';
    }

    public function editQuoteRequirement($id)
    {
        $this->editQuoteRequirementId = $id;
        $this->showEditQuoteRequirement = true;
        $this->showAddQuoteRequirement = false;
    }
    

    public function deleteQuoteRequirement($id)
    {
        if (QuoteRequirementModel::deleteQuoteRequirementById($id)) {
            session()->flash('message','Quote Requirement Deleted Successfully');
        } else {
            session()->flash('message','Quote Requirement Not Found');
        }
    }
}
