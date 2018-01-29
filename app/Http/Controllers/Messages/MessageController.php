<?php

namespace App\Http\Controllers\Messages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function index(Request $request)
    {
        return auth()->user()->messages()->with(['user'])->get();
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'message' => 'required'
        ]);
        $msg = $request->user()->messages()->create([
            'body' => $request->message
        ])->load('user');

        return $msg;
    }
}
