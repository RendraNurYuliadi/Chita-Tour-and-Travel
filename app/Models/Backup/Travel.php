<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Travel extends Model
{
     
    use HasApiTokens, HasFactory;
    protected $primaryKey = "id";
    protected $table="tbl_parawisata";
    protected $fillable = ['Nama_Tempat', 'Lokasi', 'Deskripsi', 'Kategori', 'Biaya_Masuk', 'Jam_Buka', 'Jam_Tutup', 'Fasilitas', 'Rating', 'Ulasan', 'Website', 'Telepon', 'Email', 'Latitude', 'Longitude', 'img'];
  
}
