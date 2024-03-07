<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_destinasi',
        'kota_destinasi',
        'provinsi_destinasi',
        'kategori_destinasi',
        'harga_destinasi',
        'deskripsi_destinasi',
        'gambar_destinasi',
    ];
}
