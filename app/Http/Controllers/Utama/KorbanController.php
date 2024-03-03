<?php

namespace App\Http\Controllers\Utama;

use App\Http\Controllers\Controller;
use App\Models\JadwalMeeting;
use App\Models\KorbanUser;
use App\Models\Sponsoruser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class KorbanController extends Controller
{
  

   public function index()
    {
        $data['sengketa'] = KorbanUser::where('user_id',Auth::id())->get();
        $data['title'] = "Project";
        $get = KorbanUser::where('user_id',Auth::id())->get();
        if(count($get) == 0){
           return view('korban.utama',$data);
        }else{
           return view('korban.index',$data);
        }
    }

    public function bidding()
    {
        $data['title'] = "Bidding";
        $data['sengketa'] = KorbanUser::where([
            'user_id' => Auth::id(),
            'status_sengketa' => 5,
        ])->get();
        return view('korban.bidding', $data);
    }

    public function project_disetujui()
    {
        $data['title'] = "Bidding";
        $data['sengketa'] = KorbanUser::where([
            'user_id' => Auth::id(),
            'status_sengketa' => 5,
        ])->get();
        return view('korban.project_disetujui', $data);
    }
    
    public function tambah_sengketa()
    {
        $data['sengketa'] = KorbanUser::where('user_id',Auth::id())->get();
        $data['title'] = "Project";
        return view('korban.utama',$data);
    }
    public function list_sengketa_saya()
    {
        // $data['sengketa'] = KorbanUser::join('users','users.id','=','korban_user.user_id')->where('jenis_pertolongan','sponsor')->get();
        // $data['sengketa'] = KorbanUser::join('users','users.id','=','korban_user.user_id')->where('user_id',Auth::id())->get();
        // return view('korban.index',$data);
        
        $data['sengketa'] = KorbanUser::where('user_id',Auth::id())->get();
        $data['title'] = "Project";
        return view('korban.index',$data);

    }

    public function add_korban(Request $request)
    {

        if($request['file_kronologi'] == NULL){    
            $create = KorbanUser::create([
                'user_id' => Auth::id(),
                'objek_sengketa' => $request['objek_sengketa'],
                'luas' => $request['luas'],
                'lokasi' =>  $request['provinsi'].', '.$request['kota'].', '.$request['kecamatan'].', '.$request['desa'],
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
            }else{
                $file_kronologi = time().'.'.$request->file_kronologi->extension();
                $request->file_kronologi->move(public_path('files/users/file_kronologi'), $file_kronologi);
                $create = KorbanUser::create([
                    'user_id' => Auth::id(),
                    'objek_sengketa' => $request['objek_sengketa'],
                    'luas' => $request['luas'],
                    'lokasi' =>  $request['provinsi'].', '.$request['kota'].', '.$request['kecamatan'].', '.$request['desa'],
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
                return redirect(route('korban.index'));
            }


    }


    public function add_korban_file($id)
    {
        $id = Crypt::decrypt($id);
        $data['title'] = "Project";
        $data['korban'] = KorbanUser::where('id',$id)->first();
        return view('korban.add_korban_file',$data);

    }


    public function action_add_korban_file(Request $request,$id)
    {
        $id = Crypt::decrypt($id);
        if($request['file_kronologi'] == NULL){    
            $imageKtp = time().'.'.$request->imagektp->extension();
            $request->imagektp->move(public_path('images/users/ktp'), $imageKtp);
    
            $imageLokasi = time().'.'.$request->imagelokasi->extension();
            $request->imagelokasi->move(public_path('images/users/lokasi'), $imageLokasi);
    
         $korban = KorbanUser::where('id',$id)->update([
                        'foto_ktp' => $imageKtp,
                        'foto_lokasi' => $imageLokasi,
                        'foto_dokumen_hak_tanah' =>  "NULL",
                        'status_file_upload' => 'yes',
            ]);
           return redirect(route('korban.list_sengketa_saya'));
        }else{
            $imageKtp = time().'.'.$request->imagektp->extension();
            $request->imagektp->move(public_path('images/users/ktp'), $imageKtp);
    
            $imageLokasi = time().'.'.$request->imagelokasi->extension();
            $request->imagelokasi->move(public_path('images/users/lokasi'), $imageLokasi);
    
            $image_dokumen_hak_tanah = time().'.'.$request->image_dokumen_hak_tanah->extension();
            $request->image_dokumen_hak_tanah->move(public_path('images/users/dokumen_hak_tanah'), $image_dokumen_hak_tanah);
    
            $korban = KorbanUser::where('id',$id)->update([
                        'foto_ktp' => $imageKtp,
                        'foto_lokasi' => $imageLokasi,
                        'foto_dokumen_hak_tanah' =>  $image_dokumen_hak_tanah,
                        'status_file_upload' => 'yes',
            ]);
            return redirect(route('korban.list_sengketa_saya'));
        }

    }

    public function hasil_berkas_sengketa($id)
    {
        $id = Crypt::decrypt($id);
        $data['title'] = "Project";
        $data['sengketa'] = KorbanUser::where('id',$id)->first();
        return view('korban.hasil_berkas_sengketa',$data);
    }

    public function jadwal_wawancara($id)
    {
        $id = Crypt::decrypt($id);
        $data['jadwal_meeting'] = JadwalMeeting::where('sengketa_id',$id);
        return view('korban.jadwal_wawancara',$data);

    }

    public function progress()
    {
        $data['title'] = "as";
        return view('korban.progress',$data);
    }
}
