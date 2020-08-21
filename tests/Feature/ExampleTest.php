<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHomePageIsGood()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testRedirectToHomePage()
    {
        $response = $this->get('/home');

        $response->assertRedirect('/');
    }
}
