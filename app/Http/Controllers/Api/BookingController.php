<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Booking;
use App\Models\Kamar;
use App\Models\User;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookingData = Booking::join('kamars', 'bookings.id_kamar', '=', 'kamars.id')->select(
                            'bookings.id',
                            'bookings.nama_pemesan',
                            'bookings.jumlah_tamu',
                            'bookings.check_in',
                            'bookings.check_out', 
                            'bookings.total_harga', 
                            'kamars.nama_kamar',
                            'kamars.id as id_kamar')->get();

        if(is_null($bookingData)) {
            return response()->json([
                "status"=> "empty",
                "message"=> "Data Booking Masih Kosong",
            ], 200);
        }

        return response()->json([
            "status"=> "success",
            "message"=> "Berhasil Mengambil Data Booking",
            "data" => $bookingData,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $bookingData = $request->all();

            $validator = Validator::make($bookingData, [
                "nama_pemesan" => "required",
                "check_in" => "required",
                "check_out" => "required",
                "durasi" => "required",
                "jumlah_tamu" => "required",
                "total_harga" => "required",
            ]);

            if ($validator->fails()) {
                return response()->json([
                    "status"=> "fail",
                    "message"=> $validator->errors()->first(),
                ], 400);
            }

            $findKamar = Kamar::find($bookingData["id_kamar"]);
            $findUser = User::find($bookingData["id_user"]);

            if(is_null($findKamar)){
                return response()->json([
                    "status"=> "fail",
                    "message"=> "Data Kamar Tidak Ditemukan",
                ], 400);
            }

            if(is_null($findUser)){
                return response()->json([
                    "status"=> "fail",
                    "message"=> "Data User Tidak Ditemukan",
                ], 400);
            }

            Booking::create($bookingData);

            $tersedia = $findKamar->tersedia - 1;
            Kamar::where("id", $findKamar->id)->update(["tersedia" => $tersedia]);

            return response()->json([
                "status"=> "success",
                "message"=> "Berhasil Memasukkan Data Booking",
                "data" => $findKamar,
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
    public function show($id)
    {
        $bookingDataCertainUser = Booking::join("kamars", "bookings.id_kamar", "=", "kamars.id")->where("bookings.id_user", $id)
                                            ->select("bookings.*", "kamars.*")->get();

        if(is_null($bookingDataCertainUser)){
            return response()->json([
                "status"=> "success",
                "message"=> "Data Booking Anda Masih Kosong",
            ], 200);
        }

        return response()->json([
            "status"=> "success",
            "message"=> "Berhasil Mengambil Data Booking Anda",
            "data"=> $bookingDataCertainUser,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $findBooking = Booking::find($id);
    
            if(is_null($findBooking)){
                return response()->json([
                    "status"=> "fail",
                    "message"=> "Data Booking Tidak Ditemukan",
                ], 400);
            }

            $findKamar = Kamar::where("id", $findBooking->id_kamar)->first();

            if(is_null($findKamar)){
                return response()->json([
                    "status"=> "fail",
                    "message"=> "Data Kamar Tidak Ditemukan",
                ], 400);
            }

            $tersedia = $findKamar->tersedia + 1;

            $findKamar->update(["tersedia" => $tersedia]);

            $findBooking->delete();

            return response()->json([
                "status"=> "success",
                "message"=> "Berhasil Hapus Booking",
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                "status"=> "error",
                "message"=> $e->getMessage(),
            ], 400);
        }
    }
}
