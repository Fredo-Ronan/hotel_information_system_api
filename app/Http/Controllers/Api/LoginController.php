<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        try {
            
            $loginData = [
                "username" => $request->input("username"),
                "password"=> $request->input("password"),
            ];

            if(Auth::attempt($loginData)){
                $user = Auth::user();

                if($user->active){
                    return response()->json([
                        "status"=> "success",
                        "message"=> "Authenticated",
                        "data" => $user,
                    ], 200);
                } else {
                    Auth::logout();
                    return response()->json([
                        "status"=> "fail",
                        "message"=> "Akun anda belum diverifikasi. Silahkan cek email registrasi anda.",
                    ], 400);
                }
            } else {
                return response()->json([
                    "status"=> "fail",
                    "message"=> "Username atau Password anda salah",
                ], 400);
            }

        } catch (\Exception $e) {
            return response()->json([
                "status" => "Internal Error",
                "message"=> $e->getMessage()
            ], 400);
        }
    }

    public function logout(){
        Auth::logout();

        return response()->json([
            "status"=> "success",
            "message"=> "Berhasil Logout",
        ], 200);
    }
}
