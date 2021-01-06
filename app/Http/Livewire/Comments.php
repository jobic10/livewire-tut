<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Comment;
use DateTime;

class Comments extends Component
{
    public $newComment;
    public $comments ;

    public function mount(){
        $this->comments = Comment::all();
    }
    public function addComment(){
        if (strlen($this->newComment) < 3) return  ;
        Comment::create([
            'body' => $this->newComment,
            'user' => mt_rand(1,4)
        ]);
        $this->mount();
        $this->newComment = '';
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
