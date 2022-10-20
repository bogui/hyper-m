<?php

namespace Tests\Browser\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\Browser\Pages\Register;
use Tests\DuskTestCase;

class UserHasToVerifyEmailTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(new Register)
                ->type('@name_field', 'John Doe')
                ->type('@email_field', 'john@example.com')
                ->type('@password_field', 'Superpa2$_')
                ->type('@password_confirmation_field', 'Superpa2$_')
                ->check('@terms')
                ->click('@submit_button')
                ->assertRouteIs('verification.notice')
                ->assertSee(strtoupper(__('resend verification email')));
        });
    }
}
