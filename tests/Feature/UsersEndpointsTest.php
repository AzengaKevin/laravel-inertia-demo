<?php

namespace Tests\Feature;

use Tests\TestCase;
use Inertia\Testing\AssertableInertia;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersEndpointsTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @group users */
    public function testGuestCanVisitUsersPage()
    {
        $this->withoutExceptionHandling();

        $response = $this->get(route('users.index'));

        $response->assertInertia(fn(AssertableInertia $page) => 
            $page->component('Users/Index')
                ->has('time')
                ->has('appName')
        );
        
    }
}
