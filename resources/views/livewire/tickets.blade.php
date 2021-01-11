<div>
<h1 class="text-3x">Support Tickets</h1>

@foreach ($tickets as $ticket)

<div class="rounded border shadow p-3 my-2">

    <p class="text-gray-800 break-words">{{ $ticket->question }}</p>

</div>
@endforeach
</div>
