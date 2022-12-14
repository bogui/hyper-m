<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;
use Laravel\Dusk\Page;

class Register extends Page
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '/register';
    }

    /**
     * Assert that the browser is on the page.
     *
     * @param  Browser  $browser
     * @return void
     */
    public function assert(Browser $browser)
    {
        $browser->assertPathIs($this->url());
    }

    /**
     * Get the element shortcuts for the page.
     *
     * @return array
     */
    public function elements()
    {
        return [
            '@name_field' => 'input[data-name="name-field"]',
            '@email_field' => 'input[data-name="email-field"]',
            '@password_field' => 'input[data-name="password-field"]',
            '@password_confirmation_field' => 'input[data-name="password-confirmation-field"]',
            '@submit_button' => 'button[data-role="submit"]',
            '@terms' => 'input[data-name="terms"]',
        ];
    }
}
