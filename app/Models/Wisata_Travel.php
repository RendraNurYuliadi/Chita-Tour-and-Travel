<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Wisata_Travel extends Model
{
    use HasApiTokens, HasFactory;
    protected $primaryKey = "id";
    protected $table="tbl_wisata";
    protected $fillable = ['nama_tempat', 'lokasi', 'deskripsi', 'kategori', 'biaya_masuk', 'jam_buka', 'jam_tutup', 'fasilitas', 'rating', 'ulasan', 'website', 'telepon', 'email', 'latitude', 'longitude', 'img'];
  
}
