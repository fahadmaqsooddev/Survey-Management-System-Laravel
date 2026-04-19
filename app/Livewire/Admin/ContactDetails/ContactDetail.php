<?php

namespace App\Livewire\Admin\ContactDetails;

use App\Models\ContactDetail as ModelsContactDetail;
use Livewire\Component;

use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\WithFileUploads;

#[Layout('admin_layouts.app',['page_title' => 'Contact Detail', 'title' => 'Contact Detail'])]

class ContactDetail extends Component
{

    use WithFileUploads;

    public $id, $heading, $phone, $email, $description;

    // New Images
    public $banner_image, $quote_request_image, $monitoring_setup_image;

    // Old Images
    public $oldBannerImage, $oldQuoteImage, $oldMonitoringImage;

    protected $rules = [
        'heading' => 'required',
        'phone' => 'required',
        'email' => 'required|email',
        'description' => 'required',
        'banner_image' => 'nullable|image|max:2048',
        'quote_request_image' => 'nullable|image|max:2048',
        'monitoring_setup_image' => 'nullable|image|max:2048',
    ];

    public function mount()
    {
        $data = ModelsContactDetail::fetchData();

        if (!$data) return;

        $this->id = $data->id;
        $this->heading = $data->heading;
        $this->phone = $data->phone;
        $this->email = $data->email;
        $this->description = $data->description;

        // Old Images
        $this->oldBannerImage = $data->banner_image;
        $this->oldQuoteImage = $data->quote_request_image;
        $this->oldMonitoringImage = $data->monitoring_setup_image;
    }

     public function updateContactDetails()
    {
        $this->validate();

        $data = ModelsContactDetail::updateData(
            $this->id,
            $this->heading,
            $this->phone,
            $this->email,
            $this->description,
            $this->banner_image,
            $this->quote_request_image,
            $this->monitoring_setup_image
        );

        if ($data) {

            session()->flash('message', 'Contact Details Updated Successfully');
            $this->reset(['banner_image', 'quote_request_image', 'monitoring_setup_image']);

        } else {
            session()->flash('error', 'Update Failed');
        }
    }


    public function render()
    {
        return view('livewire.admin.contact-details.contact-detail');
    }
}
