<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Produk extends Model
{
    
    use HasApiTokens, HasFactory;
    protected $primaryKey = "id";
    protected $table="tbl_produk";
    protected $fillable = ['nama', 'tipe', 'status', 'deskripsi', 'harga', 'diskon', 'harga2', 'stok', 'tglakhirdiskon', 'img'];
  
}
