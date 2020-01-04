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

    protected $appends = ['answers_json'];

    public function getAnswersJsonAttribute($json)
    {
        $data = explode("\r\n", $this->answers);

        return $data;
    }
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

    public function topic()
    {
        return $this->belongsTo(\App\Topic::class);
    }
}
