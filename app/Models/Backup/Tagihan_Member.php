<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Laravel\Sanctum\HasApiTokens;

class Tagihan_Member extends Model
{
    use HasApiTokens, HasFactory;
    protected $primaryKey = 'id';
    protected $table="tbl_tagihan_member";
    protected $fillable = ['nama_lengkap', 'tipe', 'harga', 'durasi', 'total_harga'];
   
}
