<div>
<h1 class="text-3x">Support Tickets</h1>

@foreach ($tickets as $ticket)

<div class=" cursor-pointer rounded {{ $active == $ticket->id ? 'bg-gray-400': ''}} border shadow p-3 my-2" wire:click="$emit('ticketSelected', {{ $ticket->id }})">

    <p class="text-gray-800 break-words">{{ $ticket->question }}</p>

</div>
@endforeach
</div>
