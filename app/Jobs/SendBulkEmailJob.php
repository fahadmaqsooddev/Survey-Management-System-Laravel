<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class SendBulkEmailJob implements ShouldQueue
{
    use Queueable;

    public $emails;
    public $title;
    public $description;

    public function __construct($emails, $title, $description)
    {
        $this->emails = $emails;
        $this->title = $title;
        $this->description = $description;
    }

    public function handle()
    {
        Log::info([
            "Emails" => $this->emails,
            "Title" => $this->title,
            "Description" => $this->description
        ]);

        foreach ($this->emails as $email) {
            Mail::html($this->description, function ($message) use ($email) {
                $message->to($email)
                        ->subject($this->title);
            });
        }
    }
}
