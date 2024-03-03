<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtpEmail extends Model
{
    use HasFactory;
    protected $table = 'otp_email';
    protected $fillable = ['user_id','otp'];
}
