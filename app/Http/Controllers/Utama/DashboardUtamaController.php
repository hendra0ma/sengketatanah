<?php

namespace App\Http\Controllers\Utama;

use App\Http\Controllers\Controller;
use App\Models\KorbanUser;
use App\Models\Sponsoruser as ModelsSponsoruser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SponsorUser;

class DashboardUtamaController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $data['user'] = User::find($id);
        $data['role'] = $data['user']['role'];
        return view('dashboard.index',$data);   
    }

    public function add_korban(Request $request)
    {


        if($request['file_kronologi'] == NULL){    
        $create = KorbanUser::create([
            'user_id' => Auth::id(),
            'objek_sengketa' => $request['objek_sengketa'],
            'luas' => $request['luas'],
            'lokasi' => $request['lokasi'],
            'kronologi' => $request['kronologi'],
            'file_kronologi' =>  'NULL',
            'status_pelapor' => $request['status_pelapor'],
            'jenis_pertolongan' => $request['jenis_pertolongan'],
            'status_sengketa' => 1,
            'jumlah_dana' => $request['jumlah_dana'],
            'pengembalian_dana' => $request['pengembalian_dana'],
            'jaminan_dana' => $request['jaminan'],
            'jaminan_berupa' => $request['jaminan_berupa'],
            'status_pelapor' => $request['status_pelapor'],
        ]);
        return redirect(route('korban.index'));
        }
        // // $imageKtp = time().'.'.$request->foto_ktp->extension();
        // // $request->foto_ktp->move(public_path('images/users/ktp'), $imageKtp);

        // // $imageLokasi = time().'.'.$request->foto_lokasi->extension();
        // // $request->foto_lokasi->move(public_path('images/users/lokasi'), $imageLokasi);

        // // $image_dokumen_hak_tanah = time().'.'.$request->dokumen_tanah->extension();
        // // $request->dokumen_tanah->move(public_path('images/users/dokumen_hak_tanah'), $image_dokumen_hak_tanah);


        
        $file_kronologi = time().'.'.$request->file_kronologi->extension();
        $request->file_kronologi->move(public_path('files/users/file_kronologi'), $file_kronologi);


        $create = KorbanUser::create([
            'user_id' => Auth::id(),
            'objek_sengketa' => $request['objek_sengketa'],
            'luas' => $request['luas'],
            'lokasi' => $request['lokasi'],
            'kronologi' => $request['kronologi'],
            'file_kronologi' =>  $file_kronologi,
            'status_pelapor' => $request['status_pelapor'],
            'jenis_pertolongan' => $request['jenis_pertolongan'],
            // 'foto_ktp' => $imageKtp,
            // 'foto_lokasi' => $imageLokasi,
            // 'foto_dokumen_hak_tanah' =>  $image_dokumen_hak_tanah,
            'status_sengketa' => 1,
            'jumlah_dana' => $request['jumlah_dana'],
            'pengembalian_dana' => $request['pengembalian_dana'],
            'jaminan_dana' => $request['jaminan'],
            'jaminan_berupa' => $request['jaminan_berupa'],
            'status_pelapor' => $request['status_pelapor'],
        ]);
        User::where('id',Auth::id())->update([
            'role' => 'korban',
        ]);

    }

    public function add_sponsor(Request $request)
    {
        $create = ModelsSponsoruser::create([
            'user_id' => Auth::id(),
            'sumber_dana' => $request['sumber_dana'],
            'total_dana' => $request['total_dana'],
            'pengelolaan_dana' => $request['pengelolaan_dana'],
        ]);
        User::where('id',Auth::id())->update([
            'role' => 'sponsor',
        ]);
        return redirect(route('sponsor.index'));
    }
}
