<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title','body','img','slug'];

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function stats() {
        return $this->hasOne(State::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
