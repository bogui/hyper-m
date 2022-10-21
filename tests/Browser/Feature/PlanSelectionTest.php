<?php

namespace Tests\Browser\Feature;

use App\Models\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PlanSelectionTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * @test
     * 
     * a user can see plans dropdown.
     *
     * @return void
     */
    public function a_user_can_see_plans_dropdown()
    {
        $user = User::factory()->create();

        $this->browse(function (Browser $browser) use ($user) {
            $browser->loginAs($user)
                ->visitRoute('teams.create')
                ->assertPresent('select[data-role="plan-selector"]');
        });
    }
}
