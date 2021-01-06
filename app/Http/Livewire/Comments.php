<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comments extends Component
{
    public $comments = [
        [
            'body' => 'Livewire is cool',
            'created_at' => '2 Mins Ago',
            'author' => 'Owonubi Job Sunday'
        ]
    ];

    public function addComment(){
        $this->comments[] = [
            'body' => 'Livewire is cool',
            'created_at' => '2 Mins Ago',
            'author' => 'Owonubi Job Sunday'
        ];
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
