<?php

namespace App\Livewire\Admin\EmailSubscribers;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\NewsletterSubscriber as NewsLetter;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Log;
use App\Jobs\SendBulkEmailJob;
#[Layout('admin_layouts.app',['page_title' => 'Email Subscribers List', 'title' => 'Email Subscribers List'])]
class EmailSubscribersList extends Component
{
    use WithPagination;
    public $selected = [];
    public $title;
    public $description;


    public $selectAllState = false;

    public function toggleSelectAll()
    {
        if ($this->selectAllState) {
            Log::info("In");
            $this->selected = [];
            $this->selectAllState = false;
        } else {
            Log::info("Out");
            $this->selected = NewsLetter::pluck('id')->toArray();
            $this->selectAllState = true;
        }
    }

    public function render()
    {
        $records = NewsLetter::fetchData(true);
        return view('livewire.admin.email-subscribers.email-subscribers-list',compact('records'));
    }

    

    public function sendEmail()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        if (empty($this->selected)) {
            $this->addError('selected', 'At least one receiver is required.');
            return;
        }

        $emails = NewsLetter::whereIn('id', $this->selected)
                    ->pluck('email')
                    ->toArray();

        // 🔥 Dispatch job
        SendBulkEmailJob::dispatch($emails, $this->title, $this->description);

        session()->flash('message', 'Emails are being sent in background!');

        $this->reset(['selected', 'title', 'description']);
    }

}
