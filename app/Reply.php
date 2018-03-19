<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $fillable = [
        'body',
        'thread_id',
        'user_id',
    ];
    
    public function thread (){
        return $this->belongsTo(Thread::class, 'thread_id');
    }

    public function user (){
        return $this->belongsTo(User::class, 'user_id');
    }
}
