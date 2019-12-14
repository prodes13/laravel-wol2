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

    /**
     * Get the user's first name.
     *
     * @param  string  $value
     * @return string
     */
    public function getAnswersAttribute($json)
    {
        $arr = json_decode($json);
        
        $value = implode("\r\n", $arr);
        // dd($json);
        return $value;
    }
}
