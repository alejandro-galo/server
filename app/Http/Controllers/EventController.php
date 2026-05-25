<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Http\Requests\StoreEventRequest;
use Illuminate\Http\RedirectResponse;

class EventController extends Controller
{
    public function store(StoreEventRequest $request):  redirectResponse
    {
        $eventData = $request->all();

        Event::create($eventData);

        return redirect()->route('events.index');
    }
}
