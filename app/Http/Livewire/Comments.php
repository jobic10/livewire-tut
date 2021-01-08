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

    public function deleteComment($commentId){
        $comment = Comment::find($commentId);
        if ($comment) $comment->delete();
        $this->comments = $this->comments->where('id', '!=', $commentId);
    }
    public function mount(){
        $this->comments = Comment::latest()->get();
    }
    public function updated($field){
        $this->validateOnly($field, [
            'newComment' => 'required|min:5'
        ]);
    }
    public function addComment(){
        $this->validate([
            'newComment' => 'required'
        ]);
        $dbComment = Comment::create([
            'body' => $this->newComment,
            'user' => mt_rand(1,4)
        ]);
        $this->comments->prepend($dbComment);
        $this->newComment = '';
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
