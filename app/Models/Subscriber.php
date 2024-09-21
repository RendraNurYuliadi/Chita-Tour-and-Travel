<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Subscriber extends Model
{
    use HasApiTokens, HasFactory;
    protected $primaryKey = 'id';
    protected $table="tb_subscribers";
    protected $fillable = ['email'];
   
}
