<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Consumer;

class ConsumerController extends Controller
{
    public function create(Request $request)
    {
        $consumers = new Consumer();

        $consumers->email = $request->input('email');
        $consumers->password = $request->input('password');
        $consumers->address = $request->input('address');
        $consumers->active = $request->input('active');
        $consumers->role = $request->input('role');
        $consumers->email_verified_at = $request->input('email_verified_at');

        $consumers->save();
        return response()->json($consumers);
    }
}
