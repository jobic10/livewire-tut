@if ($paginator->hasPages())

<ul class='flex justify-between'>
    <li class='w-16 px-2 py-1 text-center rounded border shadow bg-gray-500' wire:click='previousPage'>Prev</li>
    <li class="w-16 px-2 py-1 text-center rounded border shadow bg-gray-500" wire:click='nextPage'>Next</li>
</ul>

@endif
