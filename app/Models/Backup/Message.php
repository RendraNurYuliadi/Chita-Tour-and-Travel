<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Message extends Model
{
    use HasApiTokens, HasFactory;
    protected $primaryKey = 'id';
    protected $table="tbl_pesan";
    protected $fillable = ['pengirim', 'penerima', 'pesan', 'jawaban', 'waktu'];
   
}
