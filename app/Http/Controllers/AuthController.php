<?php

namespace App\Http\Controllers;

use App\Account;
use App\Libraries\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signIn(Request $request){
        $credentials = $request->only('email', 'password');
        if (!$auth = Auth::guard('siswa')->attempt($credentials)) {
            return Response::error('Unauthorized', 401);
        }
        return Response::success($auth);
    }

    public function signUp(Request $request){
        $createAccount = Account::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role_id' => 1
        ]);
        return Response::success($createAccount);
    }
}
