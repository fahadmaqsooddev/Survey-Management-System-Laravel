<?php

namespace App\Livewire\Admin\QuoteRequirements;

use Livewire\Component;
use App\Models\QuoteRequirement;
class EditQuoteRequirement extends Component
{

    public $quote_requirement_id;
    public $title;
    public $description;

    protected $rules = [
        'title' => 'required',
        'description' => 'required',
    ];

    public function render()
    {
        return view('livewire.admin.quote-requirements.edit-quote-requirement');
    }

    
    public function mount($id)
    {
        try {
            $quote = QuoteRequirement::fetchDataById($id);

            $this->quote_requirement_id = $quote->id;
            $this->title = $quote->title;
            $this->description = $quote->description;

        } catch (\Exception $e) {

            session()->flash('error', 'Quote Requirement Not Found');
            return redirect()->route('admin.quote-requirements');
        }
    }


     public function updateQuoteRequirement()
    {
        $this->validate();

        try {
            QuoteRequirement::updateQuoteRequirementById(
                $this->quote_requirement_id,
                $this->title,
                $this->description
            );

            session()->flash('message', 'Quote Requirement Updated Successfully');

            $this->dispatch('quoterequirementUpdated');

        } catch (\Exception $e) {

            session()->flash('error', 'Quote Requirement Not Found');
            return redirect()->route('admin.quote-requirements');
            
        }
    }
}
