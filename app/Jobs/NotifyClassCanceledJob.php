<?php

namespace App\Jobs;

use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ClassCanceledNotification;

class NotifyClassCanceledJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public $members, public $details)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //
        Notification::send($this->members, new ClassCanceledNotification($this->details));
    }
}
