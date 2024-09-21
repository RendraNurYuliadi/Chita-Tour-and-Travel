<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Transaksi extends Model
{
       
    use HasApiTokens, HasFactory;
    protected $primaryKey = 'id';
    protected $table="tbl_transaksi";
    protected $fillable = ['pembeli', 'produk', 'harga', 'qty', 'member', 'diskon', 'totalharga', 'uangbayar', 'tanggal'];
   
}