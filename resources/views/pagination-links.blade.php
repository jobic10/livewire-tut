@if ($paginator->hasPages())

<ul class='flex justify-between'>
    @if (!$paginator->onFirstPage())

    <li class='w-16 px-2 py-1 text-center rounded border cursor-pointer shadow bg-gray-500' wire:click='previousPage'>Prev</li>
    @endif
    @if ($paginator->hasMorePages())
    <li class="w-16 px-2 py-1 text-center rounded border cursor-pointer shadow bg-gray-500" wire:click='nextPage'>Next</li>
    @endif
</ul>

@endif
