<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Comment;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;
use Livewire\WithPagination;

class Comments extends Component
{
    use WithPagination;
    public $newComment;
    public $image;

    protected $listeners = ['fileUpload' => 'processFileUpload'];

    public function processFileUpload($imageData){
        $this->image = $imageData;
    }

    public function deleteComment($commentId){
        $comment = Comment::find($commentId);
        if ($comment){
            if ($comment->image) Storage::disk('public')->delete($comment->image);
            $comment->delete();
            session()->flash('message', 'Comment Deleted!');
        }

    }

    public function updated($field){
        $this->validateOnly($field, [
            'newComment' => 'required|min:2'
        ]);
    }

    public function storeImage(){
        if (!$this->image) return null;
        $img = ImageManagerStatic::make($this->image)->encode('jpg');
        $path = 'image'.mt_rand(1,10000).'.jpg';
        Storage::disk('public')->put($path, $img);
        return $path;

    }

    public function addComment(){
        $this->validate([
            'newComment' => 'required'
        ]);
        $image = $this->storeImage();
        $dbComment = Comment::create([
            'body' => $this->newComment,
            'user' => mt_rand(1,4),
            'image' => $image,
        ]);
        $this->newComment = '';
        $this->image = '';
        session()->flash('message', 'New Comment Added');
    }

    public function render()
    {
        if (session('message'))
        $this->resetPage();
        $comments = Comment::latest()->paginate(5);
    return view('livewire.comments', ['comments' => $comments]);
    }

}

?>


