<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalMeeting extends Model
{
    use HasFactory;
    protected $table = "jadwalmeeting";
    protected $guarded = ['id'];
}
