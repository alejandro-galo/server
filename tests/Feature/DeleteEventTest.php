<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Event;
use Carbon\Carbon;

class DeleteEventTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
      //Arrange
      $event = Event::create([
        'name' => 'Conferencia de YouDevs',
        'featured' => 'meme.png',
        'date' => Carbon::now()->format('Y-m-d'),
        'time' => '12:00:00',
        'location' => 'EL SANTIAGO BERNABEU',
      ]);
      //Act
      $response = $this->delete('/events/'. $event->id);
      //Assert
      $response->assertStatus(204);
    }
}
