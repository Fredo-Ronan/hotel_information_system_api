<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        "id_user",
        "id_kamar",
        "nama_pemesan",
        "check_in",
        "check_out",
        "durasi",
        "jumlah_tamu",
        "total_harga",
    ];

    public function users() {
        return $this->belongsTo(User::class, "id_user");
    }

    public function bookings() {
        return $this->hasMany(Booking::class, "id_kamar");
    }
}
