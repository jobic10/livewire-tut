<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Comment;

class Comments extends Component
{
    public $newComment;
    public $comments ;

    public function mount(){
        $this->comments = Comment::all();
    }
    public function addComment(){
        if (strlen($this->newComment) < 3) return  ;
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
