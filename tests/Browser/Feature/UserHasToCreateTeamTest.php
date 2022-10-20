<?php

namespace Tests\Browser\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\Browser\Pages\Dashboard;
use Tests\Browser\Pages\Login;
use Tests\DuskTestCase;

class UserHasToCreateTeamTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = User::factory()->create();

        $this->assertEquals(0, $user->teams->count());

        $this->browse(function (Browser $browser) use ($user) {
            $browser->visit(new Login)
                ->type('@email_field', $user->email)
                ->type('@password_field', 'password')
                ->click('@submit_button')
                ->on(new Dashboard)
                ->assertNotPresent('@team-card')
                ->assertPresent('@create_team_button');
        });
    }
}
