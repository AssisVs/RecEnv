<?php

namespace App\Jobs;

use App\Models\Webhook;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class ProcessWebhook implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public Webhook $webhook,
    ) {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //
    }
}
