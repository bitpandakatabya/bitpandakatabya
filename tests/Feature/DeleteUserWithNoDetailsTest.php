<?php

namespace Tests\Feature;

use App\Models\UserDetail;
use App\Models\User;
use Tests\TestCase;

class DeleteUserWithNoDetailsTest extends TestCase
{
    public function
    test_console_command_that_allows_us_to_delete_users_with_no_details_that_skips_a_user()
    {
        $user = \App\Models\UserDetail::factory()->make();
        $user->save();
        $user = $user->toArray();

        $this->artisan('user:delete-if-has-no-details', ['user' => $user['user_id']])
            ->expectsOutput("User {$user['user_id']} has details, no action has been performed");
    }


    public function test_console_command_that_allows_us_to_delete_a_user_because_it_has_details()
    {

        $user = User::factory()->make();
        $user->save();
        $user = $user->toArray();

        $this->artisan('user:delete-if-has-no-details', ['user' => $user['id']])
            ->expectsOutput("User {$user['id']} has no details, proceeding to delete");
    }
}
