<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Question;

class DataController extends Controller
{
    //
    public function get() {
        $questions = Question::with('topic')
                                ->get();
        
        return $questions;
    }
    
}
