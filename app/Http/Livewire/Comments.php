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
        array_unshift($this->comments, [
            'body' => 'Livewire is super cool',
            'created_at' => '1 Min Ago',
            'author' => 'Akinola Roseline'
        ]);
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
