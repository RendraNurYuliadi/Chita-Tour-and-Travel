<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;


class Artikel extends Model
{
    use HasApiTokens, HasFactory;
    protected $primaryKey = 'id';
    protected $table="tbl_artikel";
    protected $fillable = ['title', 'img0', 'img1', 'img2', 'img3', 'img4', 'img5', 'content0', 'content1', 'content2', 'content3', 'content4', 'content5', 'author', 'created_date'];
}
