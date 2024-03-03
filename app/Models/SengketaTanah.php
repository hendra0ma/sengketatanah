<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SengketaTanah extends Model
{
    use HasFactory;
    protected $table = "sengketa_tanah";
    protected $fillable = ['nama','alamat','no_hp','objek_sengketa','luas','lokasi','kronologi',
                        'status_pelapor','foto_ktp','dokumen_tanah','status_laporan',"pengembalian_dana_sponsor","kebutuhan_dana_sponsor",'jaminan','jaminan_berupa'];
}
