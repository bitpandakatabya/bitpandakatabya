<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Console\Command;

class AustrianActiveUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:active-austrains';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List active users from Austria';

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
     * @return int
     */
    public function handle()
    {
        foreach (User::has('detail.country', '=', 1)->get()->toArray() as $activeAustrianUser) {

            $details = UserDetail::where('user_id', $activeAustrianUser['id'])->first();

            $this->info("{$details['first_name']} {$details['last_name']} ({$activeAustrianUser['email']})");
        }
    }
}
