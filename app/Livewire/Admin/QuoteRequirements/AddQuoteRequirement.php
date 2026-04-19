<?php

namespace App\Livewire\Admin\QuoteRequirements;

use Livewire\Component;
use App\Models\QuoteRequirement;
class AddQuoteRequirement extends Component
{

    public $title;
    public $description;
   

    protected $rules = [
        'title' => 'required',
        'description' => 'required',
    ];

    public function render()
    {
        return view('livewire.admin.quote-requirements.add-quote-requirement');
    }

    public function addQuoteRequirement()
    {
        $this->validate();

        try {

            QuoteRequirement::createData($this->title, $this->description);

            session()->flash('message', 'Quote Requirement Added Successfully');

            $this->reset(['title','description']);
            
            $this->dispatch('quoterequirementAdded');

        } catch (\Exception $e) {
            session()->flash('error', 'Something went wrong');
        }
    }
}
