@foreach ($events as $events)
<div class="event">
    <h2>{{ $events->name }}</h2>
    <p>fecha: {{ $events->date }}</p>
    <p>hora: {{ $events->time }}</p>
    <p>Ubicación: {{ $events->location }}</p>
</div>
@endforeach
