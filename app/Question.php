<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $fillable = [
        'name',
        'message',
        'topic_id',
        'answers'
    ];
}
