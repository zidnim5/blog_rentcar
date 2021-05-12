<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GaleryTest extends TestCase
{
    /** @test */
    public function can_get_galery_list(){
        $this->withExceptionHandling();
        
        $response = $this->get('/api/galery');

        $response->assertStatus(200);
    }
    
    /** @test */
    public function can_show_galery(){
        $this->withExceptionHandling();
        $response = $this->get('/api/galery/galery-1sds');
        
        $response->assertStatus(200);
    }
}
