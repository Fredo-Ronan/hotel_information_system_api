<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Mail\MailSend;

use function PHPSTORM_META\registerArgumentsSet;

class RegisterController extends Controller
{
    public function register(Request $request){

        try {
            $str = Str::random(100);
    
            $registerData = $request->all();
    
            $validator = Validator::make($registerData, [
                'firstname' => 'required',
                'lastname'  => 'required',
                'email'     => 'required|email|unique:users,email',
                'no_telp'   => 'required|min:8',
                'username'  => 'required',
                'password'  => 'required|min:8',
            ]);
    
            if ($validator->fails()){
                return response()->json([
                    "status" => "fail",
                    "message"=> $validator->errors()->first(),
                ], 400);
            }
    
            $registerData["password"] = Hash::make($registerData["password"]);
            $registerData["verify_key"] = $str;
    
            $user = User::create($registerData);
    
            $details = [
                "firstname" => $registerData["firstname"],
                "username" => $registerData["username"],
                "website" => "The 5 Stars Hotel",
                "tanggal_register" => date("Y-m-d H:i:s"),
                "url" => 'https://tubes-hotel-15-frontend.vercel.app/verify/' . $str,
            ];
    
            Mail::to($registerData['email'])->send(new MailSend($details));

            return response()->json([
                'status'=> 'success',
                'message'=> 'Register Success',
                'data' => $user,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status'=> 'internal error',
                'message'=> $e->getMessage(),
            ], 400);
        }
    }

    public function verify($verify_key){
        $keyCheck = User::select("verify_key")->where("verify_key", $verify_key)->exists();

        if(!$keyCheck){
            return response()->json([
                "status"=> "fail",
                "message"=> "Not a Valid Verifcation Key"
            ], 403);
        }

        $user = User::where("verify_key", $verify_key)->update(["active" => 1, "email_verified_at" => date("Y-m-d H:i:s")]);

        return response()->json([
            "status"=> "success",
            "message"=> "Berhasil Verifikasi Akun Anda | Akun Anda sudah aktif",
            "data"=> $user,
        ], 200);
    }
}
