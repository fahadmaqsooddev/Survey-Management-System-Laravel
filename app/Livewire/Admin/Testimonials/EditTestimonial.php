<?php

namespace App\Livewire\Admin\Testimonials;

use Livewire\Component;
use App\Models\Testimonial;
use Livewire\WithFileUploads;


class EditTestimonial extends Component
{

   use WithFileUploads;
   public $name,$image,$message,$rating,$oldImage,$testimonial_id;


    protected $rules = [
        'name' => 'required',
        'image' => 'nullable|image|max:2048',
        'message' => 'required',
        'rating' => 'required|numeric|min:1|max:5'
    ];
    
    public function render()
    {
        return view('livewire.admin.testimonials.edit-testimonial');
    }

    public function mount($id)
    {

        $testimonial = Testimonial::findOrFail($id);
        $this->testimonial_id=$id;
        $this->name = $testimonial->name;
        $this->message = $testimonial->message;
        $this->rating = $testimonial->rating;
        $this->oldImage = $testimonial->image;

    }

    public function updateTestimonial()
    {
        $this->validate();

        $testimonial = Testimonial::updateTestimonialById(
            $this->testimonial_id,
            $this->name,
            $this->image,
            $this->message,
            $this->rating
        );

        if ($testimonial) {
            session()->flash('message', 'Testimonial Updated Successfully');
            $this->dispatch('testimonialUpdated');
        } else {
            session()->flash('message', 'Testimonial Not Found');
        }
    }
}
