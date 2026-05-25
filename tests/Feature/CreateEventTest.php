<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use carbon\Carbon;

class CreateEventTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_an_event_can_be_created(): void
    {
        //Arrange:
        $eventData ={
            'name' => 'Conferencia de YouDevs',
            'featured' => 'meme.png',
            'date' => Carbon::now(),
            'time' => '12:00:00',
            'location' => 'EL SANTIAGO BERNABEU',
        };
        //Act:
        $response = $this->post('/events', $eventData);
        
        //Assert:
        $response->assert(302);
        $this->assertDatabaseHas('events', $eventData);
    }
}
