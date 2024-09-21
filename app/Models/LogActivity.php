<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Laravel\Sanctum\HasApiTokens;

class LogActivity extends Model
{
 
    use HasApiTokens, HasFactory;
    protected $primaryKey = 'id';
    protected $table="tbl_log";
    protected $fillable = ['email', 'waktu', 'aktivitas'];
   
}
