<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\SupportTicket;
class Tickets extends Component
{
    public function render()
    {
        return view('livewire.tickets',
    [
        'tickets' => SupportTicket::all()
    ]);
    }
}
