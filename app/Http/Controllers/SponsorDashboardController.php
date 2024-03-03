<?php

namespace App\Http\Controllers;

use App\Models\Bid_Sengketa;
use Illuminate\Http\Request;
use App\Models\SengketaTanah;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class SponsorDashboardController extends Controller
{
   public function index()
   {
      $data['sengketa'] = SengketaTanah::get();
      return view('sponsor.index',$data);
   }

   public function browse_sengketa($id)
   {
       $id = Crypt::decrypt($id);
       $data['result'] = SengketaTanah::find($id);
       return view('sponsor.detail_sengketa',$data);
   }

   public function bid_sengketa(Request $request,$id)
    {
         $id = Crypt::decrypt($id);
         $validate = Bid_Sengketa::where('sponsor_id',Auth::id())->get();
       
     
         if(count($validate) == 0){
            $create = Bid_Sengketa::create([
               'sengketa_id' => $id,
               'sponsor_id' => Auth::id(),
            ]);
            $request->session()->flash('status', 'Sukses!');
            return redirect(route('sponsor.index'));
         }else{
            $request->session()->flash('status', 'Anda Sudah Ngebid!');
            return redirect(route('sponsor.index'));
         };
    }
}
