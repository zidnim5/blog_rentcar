<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ArticleTest extends TestCase
{

    /** @test */
    public function can_get_article_list(){
        $this->withExceptionHandling();
        
        $response = $this->get('/api/article');
        
        $response->assertStatus(200);
    }
    
    /** @test */
    public function can_show_article(){
        $this->withExceptionHandling();
        $response = $this->get('/api/article/article-1sds');

        $response->assertStatus(200);
    }
}
