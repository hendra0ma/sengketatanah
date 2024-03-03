<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsoruser extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = "sponsor_user";
}
