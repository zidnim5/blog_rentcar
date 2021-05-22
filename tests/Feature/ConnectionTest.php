<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ConnectionTest extends TestCase
{
   
    /** @test */
    public function test_connection_endpoint(){
        $this->withExceptionHandling();
        $response = $this->get('/api/connecting');
        dd($response);
        $response->assertStatus(200);
    }
}
