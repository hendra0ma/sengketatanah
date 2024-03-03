 $status = decrypt($req->status);
        $id = decrypt($id);
        $data_statusVerif = TimeStatus::where('sengketa_tanah_id',$id)
      
        ->whereNotNull('time_verifikasi')
        ->first();
        if($data_statusVerif != null){
            return redirect()->back()->with('error','data telah diverifikasi oleh Admin sebelumnya');
        }   
        $data_statusProses = TimeStatus::where('sengketa_tanah_id',$id)
      
        ->whereNotNull('time_diproses')
        ->first();
        if($data_statusProses != null){
            return redirect()->back()->with('error','data telah diproses oleh Admin sebelumnya');
        }   
        $data_statusSelesai = TimeStatus::where('sengketa_tanah_id',$id)
      
        ->whereNotNull('time_selesai')
        ->first();
        if($data_statusSelesai != null){
            return redirect()->back()->with('error','data telah selesai diproses oleh Admin sebelumnya');
        }   

        SengketaTanah::where('id',$id)->update([
            'status_laporan'=>$status
        ]);
        if($status == 2){
            TimeStatus::create([
                'sengketa_tanah_id' => $id,
                'time_verifikasi'=> Carbon::now(),
                'user_id'=>Auth::user()->id
            
            ]);
        }elseif($status == 3){
            TimeStatus::create([
                'sengketa_tanah_id' => $id,
                'time_diproses'=> Carbon::now(),
                'user_id'=>Auth::user()->id
            
            ]);
        }else{
            TimeStatus::create([
                'sengketa_tanah_id' => $id,
                'time_selesai'=> Carbon::now(),
                'user_id'=>Auth::user()->id
            
            ]);
        }

        return redirect()->back()->with('success','Status Berhasil Di rubah');