<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InertiaRoot extends TestCase
{
    /** @test */
    public function root_route_should_return_200()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @test */
    public function base_template_should_be_app()
    {
        $response = $this->get('/');

        $response->assertViewIs('app');
    }

    /** @test */
    public function able_to_see_welcome()
    {
        $response = $this->get('/');

        $response->assertSee('Welcome');
    }
}
