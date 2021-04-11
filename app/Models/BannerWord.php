<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerWord extends Model
{
    use HasFactory;
    protected $fillable = ['word'];
    public $timestamps = false;
}
