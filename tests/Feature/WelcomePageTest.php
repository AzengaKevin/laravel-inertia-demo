<?php

namespace Tests\Feature;

use Tests\TestCase;
use Inertia\Testing\AssertableInertia;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomePageTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @group welcome */
    public function testGuestsCanVisitTheWelcomePage()
    {
        $this->withoutExceptionHandling();

        $response = $this->get(route('welcome'));

        $response->assertInertia(fn(AssertableInertia $page) => 
            $page->component('Welcome')
                ->has('appName')
        );
    }
}
