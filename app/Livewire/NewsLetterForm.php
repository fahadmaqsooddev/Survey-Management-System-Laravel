<?php

namespace App\Livewire;

use App\Models\NewsletterSubscriber;
use Livewire\Component;

class NewsLetterForm extends Component
{
    // Form properties

    public $email;

    // Validation rules
    protected $rules = [
        'email' => 'required|email|max:255'
    ];

    /**
     * Save contact form data
    */

    public function render()
    {
        return view('livewire.news-letter-form');
    }
    
    public function submit()
    {
         $this->validate();

        // Save the email
        NewsletterSubscriber::create([
            'email' => $this->email,
        ]);

        // Reset the input field
        $this->reset('email');

        // Optional: show success message
        $this->dispatch('newsletterSubscribed');

    }     
}
