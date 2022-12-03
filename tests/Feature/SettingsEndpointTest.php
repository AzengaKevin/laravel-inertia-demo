<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Inertia\Testing\AssertableInertia;
use Tests\TestCase;

class SettingsEndpointTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @group settings */
    public function testGuestCanVisitSettingsPage()
    {
        $this->withoutExceptionHandling();

        $response = $this->get(route('settings'));

        $response->assertInertia(fn(AssertableInertia $page) => 
            $page->component('Settings')
                ->has('appName')
        );
        
    }
}
