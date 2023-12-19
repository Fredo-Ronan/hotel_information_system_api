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
        //
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
    public function show(string $id)
    {
        //
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
                "image" => "required|image:jpeg,png,jpg,gif,svg|max:2048",
            ]);
    
            if($validate->fails()){
                return response()->json([
                    "status" => "fail",
                    "message" => $validate->errors()->first(),
                ], 400);
            }

            $uploadFolder = "profile_images";
            $profileImage = $request->file("image");
            $image_upload_path = $profileImage->store($uploadFolder, 'public');
            $uploadedResponse = basename($image_upload_path);

            $userToUpdate = User::findOrfail($id);

            $userToUpdate->update(["profile_img" => $uploadedResponse]);

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
