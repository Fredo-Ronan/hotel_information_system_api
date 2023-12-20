<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        if(is_null($users)) {
            return response()->json([
                "status"=> "empty",
                "message"=> "Data Pengguna Masih Kosong",
            ], 200);
        }

        return response()->json([
            "status"=> "success",
            "message"=> "Berhasil Mengambil Data Pengguna",
            "data" => $users,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $user = User::find($id);

            if($user) {
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
                    "status" => "success",
                    "message"=> "Berhasil Mengambil Data User ID " . $id,
                    "data"=> $userDataResponse,
                ], 200);
            }

            return response()->json([
                "status"=> "fail",
                "message"=> "No User Found",
            ], 400);
        } catch (\Exception $e) {
            return response()->json([
                "status" => "error",
                "error"=> $e->getMessage()
            ], 400);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateFotoProfil(Request $request, $id)
    {
        // Update Only Profile Photo

        try {

            $imageData = $request->all();
    
            $validate = Validator::make($imageData, [
                "image" => "required|image:jpeg,png,jpg|max:2048",
            ]);
    
            if($validate->fails()){
                return response()->json([
                    "status" => "fail",
                    "message" => $validate->errors()->first(),
                ], 400);
            }

            $profileImage = $request->file("image");
            $imgExt = $profileImage->getClientOriginalExtension();
            $imageBinData = file_get_contents($profileImage->getRealPath());

            $userToUpdate = User::findOrfail($id);

            $userToUpdate->update([
                "profile_img" => $imageBinData,
                "img_ext" => $imgExt,
            ]);

            return response()->json([
                "status"=> "success",
                "message"=> "Updated Profile Picture",
            ], 200);
        }catch (\Exception $e){
            return response()->json([
                "status"=> "error",
                "message"=> $e->getMessage(),
            ], 400);
        }
    }

    public function updateDataProfil(Request $request, $id){
        // Update Only Profile Data (except profile photo)
        try {
            $formData = $request->all();

            $validate = Validator::make($formData, [
                "firstname"=> "required",
                "lastname"=> "required",
                "email"=> "required",
                "no_telp"=> "required",
                "username"=> "required",
            ]);

            if($validate->fails()){
                return response()->json([
                    "status"=> "fail",
                    "message"=> $validate->errors()->first(),
                ],400);
            }

            $userToUpdate = User::findOrfail($id);

            $userToUpdate->update([
                "firstname"=> $formData["firstname"],
                "lastname"=> $formData["lastname"],
                "email"=> $formData["email"],
                "no_telp"=> $formData["no_telp"],
                "username"=> $formData["username"],
            ]);

            return response()->json([
                "status"=> "success",
                "message"=> "Berhasil Update Data Profil",
            ], 200);
        } catch (\Exception $e){
            return response()->json([
                "status"=> "error",
                "message"=> $e->getMessage(),
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
