<?php

namespace App\Console\Commands;

use App\Notifications\TweetTime;
use App\Time;
use Illuminate\Console\Command;
use Carbon\Carbon;

class SendTweet extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tweet:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send new tweet';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $time = new Time();
        $time->notify(new TweetTime());
    }
}
