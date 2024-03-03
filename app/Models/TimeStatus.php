<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeStatus extends Model
{
    use HasFactory;
    protected $table = 'time_status';
    protected $fillable = ['sengketa_tanah_id','time_verifikasi','time_diproses','time_selesai','user_id'];
}
