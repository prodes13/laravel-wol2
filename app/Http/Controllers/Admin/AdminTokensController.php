<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Token;

class AdminTokensController extends Controller
{
    public static function index() {
        $tokens = Token::all();

        return view('admin.tokens.all', ['tokens' => $tokens]);
    }
    public static function submitResults(Request $request) {
        $token = Token::create([
            'token' => $request->get('token'),
            'results' => json_encode($request->get('answers'))
        ]);

        return 1;
    }

    //
}
