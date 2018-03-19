<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $fillable =[
        'id',
        'title',
        'body',
        'user_id',
    ];

    public function user (){
        return $this->belongsTo(User::class, 'user_id');
    }
}
