<?php

namespace JamesMills\LaravelDataDog\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class DataDogIncrement implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $metric;
    protected $tags;
    protected $host;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($metric, $tags, $host)
    {
        $this->metric = $metric;
        $this->tags = $tags;
        $this->host = $host;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        app('datadogclient')->increment($this->metric, $this->tags, $this->host);
    }
}
