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

                    $token = $user->createToken("Authentication Token")->accessToken;

                    $userDataResponse = [
                        'id' => $user->id,
                        'firstname' => $user->firstname,
                        'lastname' => $user->lastname,
                        'email'=> $user->email,
                        'no_telp'=> $user->no_telp,
                        'username'=> $user->username,
                        'profile_img' => "data:image/" . $user->img_ext . ";base64," . base64_encode($user->profile_img),
                        'verify_key' => $user->verify_key,
                        'active' => $user->active,
                        'created_at' => $user->created_at,
                        'updated_at'=> $user->updated_at,
                        'email_verified_at' => $user->email_verified_at,
                    ];

                    return response()->json([
                        "status"=> "success",
                        "message"=> "Authenticated",
                        "token" => $token,
                        "token_type" => 'Bearer',
                        "data" => $userDataResponse,
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
