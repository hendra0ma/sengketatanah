<?php

namespace App\Http\Controllers\Utama;

use App\Http\Controllers\Controller;
use App\Models\Bid_Sengketa;
use App\Models\KorbanUser;
use App\Models\Sponsoruser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class SponsorController extends Controller
{
   //  public function index()
   //  {
   //      $data['sengketa'] = KorbanUser::join('users','users.id','=','korban_user.user_id')->where('jenis_pertolongan','sponsor')->get();
   //      return view('sponsor.index',$data);
   //  }

   public function index()
    {
        $data['sengketa'] = KorbanUser::where('jenis_pertolongan','sponsor')->get();
        $get = Sponsoruser::where('user_id',Auth::id())->get();
        if(count($get) == 0){
           return view('sponsor.utama',$data);
        }else{
           return view('sponsor.index',$data);
        }
    }


    public function bid_sengketa(Request $request,$id)
    {
         $id = Crypt::decrypt($id);
         $validate = Bid_Sengketa::where('sponsor_id',Auth::id())->get();
         
         $create = Bid_Sengketa::create([
            'sengketa_id' => $id,
            'sponsor_id' => Auth::id(),
         ]);
         $request->session()->flash('status', 'Sukses!');
         return redirect(route('sponsor.index'));
    }

    public function cancel_bid_sengketa(Request $request,$id)
    {
      $id = Crypt::decrypt($id);
      $bid = Bid_Sengketa::where('sengketa_id',$id)->delete();
      return redirect(route('sponsor.index'));
    }

    public function add_sponsor (Request $request)
    {
     $create = Sponsoruser::create([
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
