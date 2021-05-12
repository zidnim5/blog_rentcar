<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactTest extends TestCase
{
    /** @test */
    public function can_get_contact(){
        $this->withExceptionHandling();
        $response = $this->get('/api/contact');

        $response->assertStatus(200);
    }
}
