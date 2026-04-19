<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ContactUs as ContactUsModel;
class ContactUs extends Component
{
    // Form properties
    public $first_name;
    public $email;
    public $subject;
    public $message;

    // Success message
    public $status = false;

    // Validation rules
    protected $rules = [
        'first_name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ];

    public function render()
    {
        return view('livewire.contact-us');
    }


    public function submit()
    {

        // Validate form input
        $this->validate();

        // Example: Send email (optional)
        // Mail::to('admin@example.com')->send(new ContactFormMail($this->name, $this->email, $this->subject, $this->message));

        ContactUsModel::saveContact([
            'first_name' => $this->first_name,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);


        // Reset form fields
        $this->reset(['first_name', 'email', 'subject', 'message']);

        // Show success message
        $this->status = true;

        // Optionally emit browser event to close modal
        $this->dispatch('contactFormSubmitted');
    }
}
