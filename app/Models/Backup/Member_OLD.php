<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Laravel\Sanctum\HasApiTokens;

class Member extends Model
{
     
    use HasApiTokens, HasFactory;
    protected $primaryKey = 'id';
    protected $table="tbl_member";
    protected $fillable = ['nama_lengkap', 'tgl_lahir', 'alamat', 'no_telepon', 'tipe', 'status', 'tgl_expired'];
   
}
