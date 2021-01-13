<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
   public function login(Request $request){
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|string',
        'device_name' => 'required'
    ]);

    $user = User::where('email', $request->email)->first();

    if(!$user || !Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect'],
        ]);
    }

    return $user->createToken($request->device_name)->plainTextToken;
   }


    /**
     * Register user
     *
     * @param Request $request
     * @return JsonResponse
     * */
    public function register() {

    }
}
