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
     * @test
     *
     * A user sees options to create team after fresh registration.
     *
     * @return void
     */
    public function a_user_sees_options_to_create_team_after_fres_registration()
    {
        $user = User::factory()->create();

        $this->assertEquals(0, $user->teams->count());

        $this->browse(function (Browser $browser) use ($user) {
            $browser->visit(new Login)
                ->type('@email_field', $user->email)
                ->type('@password_field', 'password')
                ->click('@submit_button')
                ->on(new Dashboard)
                ->assertPresent('@create_team_button')
                ->click('@create_team_button')
                ->waitForRoute('teams.create')
                ->assertRouteIs('teams.create');
        });
    }

    /**
     * @test
     *
     * A User has to pick payment plan.
     *
     * @return void
     */
    public function a_user_has_to_pic_payment_plan()
    {
        $user = User::factory()->create();

        $this->browse(function (Browser $browser) use ($user) {
            $browser->loginAs($user)
                ->visit(new Dashboard)
                ->click('@create_team_button')
                ->waitForRoute('teams.create')
                ->assertSee(__('Choose your plan'));
        });
    }

    /**
     * @test
     *
     * A Dusk test example.
     *
     * @return void
     */
    public function after_fresh_registration_user_has_to_create_team_or_join_team()
    {
        $this->markTestSkipped('Need to implement billing plans');

        $user = User::factory()->create();

        $this->assertEquals(0, $user->teams->count());

        $this->browse(function (Browser $browser) use ($user) {
            $browser->visit(new Login)
                ->type('@email_field', $user->email)
                ->type('@password_field', 'password')
                ->click('@submit_button')
                ->on(new Dashboard)
                ->assertNotPresent('@team-card')
                ->assertPresent('@create_team_button')
                ->assertPresent('@join_team_button');
        });
    }
}
