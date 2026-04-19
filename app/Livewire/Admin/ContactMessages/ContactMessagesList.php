<?php

namespace App\Livewire\Admin\ContactMessages;

use Livewire\Component;

use App\Models\ContactUs as ContactUsModel;
use Livewire\Attributes\Layout;

#[Layout('admin_layouts.app',['page_title' => 'Contact Messages List', 'title' => 'Contact Messages List'])]
class ContactMessagesList extends Component
{
 
    public function render()
    {
        $contact_messages = ContactUsModel::fetchData(true);
        return view('livewire.admin.contact-messages.contact-messages-list',compact('contact_messages'));
    }

    /**
     * Delete a contact message
    */
    public function deleteMessage($id)
    {
        $deleted = ContactUsModel::deleteMessageById($id);

        if ($deleted) {
            session()->flash('message', 'Message deleted successfully!');
        } else {
            session()->flash('message', 'Message not found.');
        }
    }


}
