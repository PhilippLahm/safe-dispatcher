<?php

namespace SaasSafeDispatcher\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use SaasSafeDispatcher\Traits\SafeDispatchable;

class QueueJob implements ShouldQueue
{
    use Queueable;
    use SafeDispatchable;

    public function __construct(public string $hello)
    {
    }

    public function handle(): void
    {
        Log::info('Hello ' . $this->hello);
    }
}
