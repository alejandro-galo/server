<?php

namespace App\Http\Controllers;

use Illuminate\Http\RequestResponse;
use Illuminate\view\View;
use App\Models\Event;
use App\Http\Requests\StoreEventRequest;
use Illuminate\Http\RedirectResponse;

class EventController extends Controller
{

    public function index()
    {
        $events = Event::all();
        return view('events.index', ['events' => $events]);
    }

    public function store(StoreEventRequest $request):  redirectResponse
    {
        $eventData = $request->all();

        Event::create($eventData);

        return redirect()->route('events.index');
    }

    public function update(Request $request, Event $event)

    {
        $event->update($request->all());

        return response()->json($event, 200);
    }

    public function destroy(Event $event)
    {
        $event->delete();

        return response(null, 204);
    }


}

