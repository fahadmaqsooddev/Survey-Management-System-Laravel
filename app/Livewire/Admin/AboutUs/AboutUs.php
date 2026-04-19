<?php

namespace App\Livewire\Admin\AboutUs;

use App\Models\AboutUs as ModelsAboutUs;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;
#[Layout('admin_layouts.app',['page_title' => 'AboutUs', 'title' => 'AboutUs'])]

class AboutUs extends Component
{
    use WithFileUploads;
    public $id,$heading,$image,$description,$oldImage;
  

    protected $rules = [
        'heading' => 'required',
        'description' => 'required',
        'image' => 'nullable|image'
    ];

    public function mount()
    {
        try {

            $data = ModelsAboutUs::fetchData();

            if (!$data) {
                session()->flash('error', 'About Us Record Not Found');
                return;
            }

            $this->id = $data->id;
            $this->heading = $data->heading;
            $this->description = $data->description;
            $this->oldImage = $data->image;

        } catch (\Exception $e) {
            session()->flash('error', 'Error fetching About Us data');
        }
    }

    public function updateAboutUs()
    {
        $this->validate();

        try {

            $data = ModelsAboutUs::updateData(
                $this->id,
                $this->heading,
                $this->description,
                $this->image
            );

            session()->flash('message', 'About Us Updated Successfully');

            
            $this->oldImage = $data->image;

            $this->reset('image');

        } catch (\Exception $e) {

            session()->flash('error', 'Something went wrong while updating About Us');
            Log::error('AboutUs update failed: ' . $e->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.admin.about-us.about-us');
    }

}
