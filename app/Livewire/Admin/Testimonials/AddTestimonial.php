<?php

namespace App\Livewire\Admin\Testimonials;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Testimonial as TestimonialModel;
use Livewire\WithFileUploads;

#[Layout('admin_layouts.app',['page_title' => 'Add Testiomonial', 'title' => 'Add Testimonial'])]

class AddTestimonial extends Component
{
    public $name,$image,$message,$rating;
    use WithFileUploads;

    protected $rules = [
        'name' => 'required',
        'image' => 'nullable|image|max:2048',
        'message' => 'required',
        'rating' => 'required|numeric|min:1|max:5'
    ];

    public function render()
    {
        return view('livewire.admin.testimonials.add-testimonial');
    }

    public function addTestimonial(){

        $this->validate();
        $data=TestimonialModel::createData($this->name,$this->image,$this->message,$this->rating); 

        if ($data) {

            $this->reset(['name','image','message','rating']);
            $this->dispatch('testimonialAdded');
            
            session()->flash('message', 'Testimonial Added Successfully');
        } else {
            session()->flash('error', 'Testimonial Updated Successfully');
        }      
    }

}
