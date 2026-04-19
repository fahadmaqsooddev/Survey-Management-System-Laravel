<?php

namespace App\Livewire\Admin\Testimonials;

use Livewire\Component;
use App\Models\Testimonial as TestimonialModel;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\WithPagination;

#[Layout('admin_layouts.app',['page_title' => 'Testimonial List', 'title' => 'Testimonial List'])]

class TestimonialList extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $showAddTestimonial = false;
    public $showEditTestimonial = false;
    public $editTestimonialId = null;

    #[On('testimonialAdded', 'refreshList')]
    #[On('testimonialUpdated', 'refreshList')]
    
    public function refreshList()
    {

        Log::info('refresh list');
        $this->showAddTestimonial = false;
        $this->showEditTestimonial = false;
        $this->editTestimonialId = null;
    }

    public function toggleAddTestimonial()
    {
        if ($this->showAddTestimonial || $this->showEditTestimonial) {
            $this->showAddTestimonial = false;
            $this->showEditTestimonial = false;
            $this->editTestimonialId = null;
        } else {
            $this->showAddTestimonial = true;
        }
    }

    // Header text
    public function getHeaderTextProperty()
    {
        if ($this->showAddTestimonial) return 'Add Testimonial';
        if ($this->showEditTestimonial) return 'Edit Testimonial';
        return 'Testimonial List';
    }

    // Button text
    public function getButtonTextProperty()
    {
        if ($this->showAddTestimonial || $this->showEditTestimonial) return 'Cancel';
        return 'Add Testimonial';
    }

    public function editBanner($id)
    {
        $this->editTestimonialId = $id;
        $this->showEditTestimonial = true;
        $this->showAddTestimonial = false;
    }
    

    public function render()
    {
        $testimonials = TestimonialModel::fetchData(true);
        return view('livewire.admin.testimonials.testimonial-list',compact('testimonials'));
    }

    public function deleteTestimonial($id)
    {
        if (TestimonialModel::deleteTestimonialById($id)) {
            session()->flash('message','Testimonial Deleted Successfully');
        } else {
            session()->flash('message','Testimonial Not Found');
        }
    }
}
