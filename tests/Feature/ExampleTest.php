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
    public function testBasicTest()
    {
        $response = $this->get('/anurags');

        $response->assertStatus(200);
    }


    public function testDocBasic()
    {
        $response = $this->get('/anurags');
        
        $response->assertSee("Welcome to developers zone");
    }
}
