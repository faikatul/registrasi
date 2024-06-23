<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSantri extends Model
{
    use HasFactory;
    
    protected $guarded = []; //semua file bisa dimasukkan dalam database
    protected $dates = ['created_at'];
}
