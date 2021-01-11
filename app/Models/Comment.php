<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function author(){
        return $this->belongsTo('App\Models\User', 'user');
    }

    public function getImagePathAttribute(){
        return Storage::disk('public')->url($this->image);
    }
}
