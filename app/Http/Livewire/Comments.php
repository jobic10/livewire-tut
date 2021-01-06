<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;

class Comments extends Component
{
    public $newComment;
    public $comments = [
        [
            'body' => 'Livewire is cool',
            'created_at' => '2 Mins Ago',
            'author' => 'Owonubi Job Sunday'
        ]
    ];

    public function addComment(){
        array_unshift($this->comments, [
            'body' => $this->newComment,
            'created_at' => Carbon::now()->diffForHumans(),
            'author' => Str::random()
        ]);
        $this->newComment = '';
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
