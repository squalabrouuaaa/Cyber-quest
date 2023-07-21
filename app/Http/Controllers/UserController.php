<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class UserController extends Controller
{
    /**
     * Register a user
     * @unauthenticated
     * @return JsonResponse
     */
    public function register(Request $request)
    {
    
        $User = User::updateOrCreate(
            [
                'email' =>  $request['email'],
            ],
            [
                'email'                   => $request['email'],
                'lastname'                => $request['lastname'],
                'firstname'               => $request['firstname'],
                'password'                => $request['password']
            ]
        );

        return response()->json();
    }

    public function login(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        if (! $token = auth()->attempt($validator->validated())) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return $this->createNewToken($token);


    }

}
