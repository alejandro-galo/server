<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Event;
use Carbon\Carbon;

class UpdateEventTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    protected $event;
    public function setup(): void
    {
        parent::setUp();
        $this->event = event::create([
            'name' => 'Conferencia de YouDevs',
            'featured' => 'meme.png',
            'date' => Carbon::now()->format('Y-m-d'),
            'time' => '12:00:00',
            'location' => 'EL SANTIAGO BERNABEU',
        ]);
    }
    public function test_example(): void
    {
        //Arrange
        $updatedData = [
            'name' => 'Evento actualizado',
        ];

         
        //Act
        $response = $this->put('/events/'. $this->event->id, $updatedData);
        
        //Assert
        $response->assertStatus(200);
        $this->assertDatabaseHas('events', $updatedData);
    }
}