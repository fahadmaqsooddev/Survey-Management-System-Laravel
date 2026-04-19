<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Testimonial as TestimonialModel; 

class Testimonials extends Component
{
    public $testimonials = [];

    public function mount()
    {
        $this->testimonials = TestimonialModel::fetchData();
    }

    public function render()
    {
        return view('livewire.testimonials');
    }
}