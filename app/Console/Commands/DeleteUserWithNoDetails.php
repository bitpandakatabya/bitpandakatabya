<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class DeleteUserWithNoDetails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:delete-if-has-no-details {user}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Given a user ID, deletes the user if the user has no details';

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

        $userId = $this->argument('user');

        $user = User::findOrFail($userId);

        if ($user->detail) {
            $this->info("User {$userId} has details, no action has been performed");
        } else {
            $this->info("User {$userId} has no details, proceeding to delete");
            $user->delete();
        }
    }
}
