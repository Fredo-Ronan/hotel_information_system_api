<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataKamar = Kamar::all();

        if(is_null($dataKamar)){
            return response()->json([
                "status"=> "empty",
                "message"=> "Data Kamar Masih Kosong",
            ], 200);
        }

        return response()->json([
            "status" => "OK",
            "data"=> $dataKamar,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $inputanKamar = $request->all();

            $validator = Validator::make($inputanKamar, [
                "nama_kamar"=> "required",
                "deskripsi" => "required",
                "tersedia" => "required",
                "harga" => "required",
            ]);

            if ($validator->fails()) {
                return response()->json([
                    "status"=> "fail",
                    "message"=> $validator->errors()->first(),
                ], 400);
            }

            Kamar::create($inputanKamar);

            return response()->json([
                "status"=> "success",
                "message"=> "Berhasil Input Data Kamar",
                "data" => $inputanKamar,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                "status"=> "error",
                "message"=> $e->getMessage(),
            ], 400);
        }
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
    public function update(Request $request, $id)
    {
        try {
            $kamarUpdate = $request->all();

            $validator = Validator::make($kamarUpdate, [
                "nama_kamar"=> "required",
                "deskripsi" => "required",
                "tersedia" => "required",
                "harga" => "required",
            ]);

            if ($validator->fails()) {
                return response()->json([
                    "status"=> "fail",
                    "message"=> $validator->errors()->first(),
                ], 400);
            }

            $kamarToUpdate = Kamar::find($id);

            if(is_null($kamarToUpdate)) {
                return response()->json([
                    "status"=> "fail",
                    "message"=> "Data Kamar Tidak Ditemukan",
                ], 400);
            }

            $kamarToUpdate->update($kamarUpdate);

            return response()->json([
                "status"=> "success",
                "message"=> "Berhasil Mengupdate Data Kamar",
                "data" => $kamarUpdate,
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                "status"=> "error",
                "message"=> $e->getMessage(),
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $kamarDelete = Kamar::find($id);

            if(is_null($kamarDelete)) {
                return response()->json([
                    "status"=> "fail",
                    "message"=> "Data Kamar Tidak Ditemukan",
                ], 400);
            }

            $kamarDelete->delete();

            return response()->json([
                "status"=> "success",
                "message"=> "Berhasil Menghapus Data Kamar",
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                "status"=> "error",
                "message"=> $e->getMessage(),
            ], 400);
        }
    }
}
