@extends('layouts.template-admin.main')
@section('content')

{{-- sas --}}
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">Data Korban</div>
                <div class="card-body">
                     <div class="row">
                        <div class="col-4">
                            <div class="card">
                               <img src="https://www.pngall.com/wp-content/uploads/12/Avatar-Profile-Vector-PNG-File.png" style="width: 200px; height: auto;" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-8">
                            <table>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>{{$korban->name}}</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>{{$korban->address}}</td>
                                </tr>
                                <tr>
                                    <td>No Handphone</td>
                                    <td>:</td>
                                    <td>{{$korban->phone}}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>{{$sponsor->email}}</td>
                                </tr>
                                
                            </table>
                            <table class="my-2 table">
                                <thead class="bg-dark text-white ">
                                  <tr>
                                      <td colspan="2">Hubungi Korban</td>
                                    </tr>
                                </thead>
                               <tbody>
                                  <tr>
                                      <td>Email</td>
                                      <td>{{$sponsor->email}}</td>
                                    </tr>
                                    <tr>
                                      <td>Email</td>
                                      <td>{{$korban->phone}}</td>
                                    </tr>
                               </tbody>
                             </table>
                        </div>
                     </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">Data Sponsor</div>
                <div class="card-body">
                    <div class="row">
                       <div class="col-4">
                           <div class="card">
                              <img src="https://www.pngall.com/wp-content/uploads/12/Avatar-Profile-Vector-PNG-File.png" style="width: 200px; height: auto;" class="img-fluid" alt="">
                           </div>
                       </div>
                       <div class="col-8">
                           <table>
                               <tr>
                                   <td>Nama</td>
                                   <td>:</td>
                                   <td>{{$sponsor->name}}</td>
                               </tr>
                               <tr>
                                   <td>Alamat</td>
                                   <td>:</td>
                                   <td>{{$sponsor->address}}</td>
                               </tr>
                               <tr>
                                   <td>No Handphone</td>
                                   <td>:</td>
                                   <td>{{$sponsor->phone}}</td>
                               </tr>
                               <tr>
                                   <td>Email</td>
                                   <td>:</td>
                                   <td>{{$sponsor->email}}</td>
                               </tr>
                           </table>

                           <table class="my-2 table">
                              <thead class="bg-dark text-white ">
                                <tr>
                                    <td colspan="2">Hubungi Sponsor</td>
                                  </tr>
                              </thead>
                             <tbody>
                                <tr>
                                    <td>Email</td>
                                    <td>{{$sponsor->email}}</td>
                                  </tr>
                                  <tr>
                                    <td>No Hp</td>
                                    <td>{{$sponsor->phone}}</td>
                                  </tr>
                             </tbody>
                           </table>
                       </div>
                    </div>
               </div>
            </div>
        </div>
    </div>
    <div class="row">
       <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-6">

                        <h3> Keterangan Data korban Tanah 
                        @if($korban->status_laporan == 1)
                        <span class="badge badge-primary">Menunggu Verifikasi</span>
                        @elseif($korban->status_laporan == 2)
                        <span class="badge badge-dark">Terverifikasi</span>
                        @elseif($korban->status_laporan == 3)
                        <span class="badge badge-warning">Diproses</span>
                        @elseif($korban->status_laporan == 4)
                        <span class="badge badge-success">Selesai</span>
                        @endif
                        </h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Objek Sengketa</th>
                            <td>:</td>
                            <td>{{$korban->objek_sengketa}}</td>
                        </tr>
                        <tr>
                            <th>Luas</th>
                            <td>:</td>
                            <td>{{$korban->luas}}</td>
                        </tr>
                        <tr>
                            <th>lokasi</th>
                            <td>:</td>
                            <td>{{$korban->lokasi}}</td>
                        </tr>
                        <tr>
                            <th>kronologi</th>
                            <td>:</td>
                            <td>{{$korban->kronologi}}</td>
                        </tr>
                        <tr>
                            <th>Status Pelapor</th>
                            <td>:</td>
                            <td>{{$korban->status_pelapor}}</td>
                        </tr>
                        <tr>
                            <th>Foto KTP</th>
                            <td>:</td>
                            <td>

                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#fotoktp">
                                    Foto KTP
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th>Dokumen Tanah</th>
                            <td>:</td>
                            <td>
                                <button type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#dokumentanah">
                                    Dokumen Tanah
                                </button>
                            </td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
       </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
         
            <div class="card">
                <div class="card-header">
                    <h4>Jadwal Meeting Online/Offline</h3>
                </div>
                <div class="card-body">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                      <button type="button" class="close" data-dismiss="alert">×</button>	
                        <strong>{{ $message }}</strong>
                    </div>
                   @endif
                    <button type="button" class="btn btn-primary my-3" data-toggle="modal"
                    data-target="#addJadwalMeeting">
                    Tambah Jadwal Meeting Offline
                   </button>
                   <button type="button" class="btn btn-info my-3" data-toggle="modal"
                   data-target="#addJadwalMeetingZoom">
                   Tambah Jadwal Meeting Zoom
                  </button>
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                               <td>No</td>
                            <td>Jenis Meeting</td>
                            <td>Lokasi / Link</td>
                            <td>Deskripsi </td>
                            <td>Tanggal & Jam </td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($meeting as $item)
                        <tr>
                            <td>{{$item['id']}}</td>
                            <td>{{$item['jenis_meeting']}}</td>
                            @if ($item['jenis_meeting'] == 'online')
                            <td><a class="btn btn-info" href="{{$item['location']}}">Link Zoom</a></td>
                            @else
                            <td>{{$item['location']}}</td>
                            @endif
                        
                            <td>{{$item['deskripsi']}}</td>
                            <td>{{$item['date']}} {{$item['time']}}</td>
                        </tr>
                         @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>No</td>
                                <td>Jenis Meeting</td>
                                <td>Lokasi / Link</td>
                                <td>Deskripsi </td>
                                <td>Tanggal & Jam </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="fotoktp" tabindex="-1" aria-labelledby="fotoktpLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="fotoktpLabel">Foto KTP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <center>
                                <img src="{{url('/')}}/images/users/ktp/{{$korban->foto_ktp}}" alt="" class="img-fluid">
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="dokumentanah" tabindex="-1" aria-labelledby="dokumentanahLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dokumentanahLabel">Dokumen Tanah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <center>
                                <img src="{{url('/')}}/images/users/dokumen_hak_tanah/{{$korban->foto_dokumen_hak_tanah}}" alt=""
                                    class="img-fluid">
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="addJadwalMeeting" tabindex="-1" aria-labelledby="addJadwalMeetingLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addJadwalMeetingLabel">Tambah Data Jadwal Meeting</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
           <form action="{{url('/')}}/administrator/add_meeting/{{Crypt::encrypt($sponsor['id'])}}/{{Crypt::encrypt($korban['id'])}}" method="post">
            @csrf
            <div class="card-body">
                {{-- <div class="form-group">
                  <label for="company">Jenis Meeting</label>
                  <select name="jenis" class="form-control" id="">
                    <option selected>Pilih</option>
                    <option value="offline">Offline</option>
                    <option value="online" disabled>Online</option>
                  </select>
                </div> --}}
                <input type="hidden" value="offline" name="jenis" id="">
                <div class="form-group">
                  <label for="location">Lokasi</label>
                  <input class="form-control" id="location" name="location" type="text" placeholder="Sebutkan Nama Jalan,Gedung,Dan lain lain" required>
                </div>
                <div class="form-group">
                  <label for="deskripsi">Deskripsi</label>
                  <textarea class="form-control" id="deskripsi" name="deskripsi" rows="9" placeholder="Deskripsi.." required></textarea>
                </div>
                <div class="row">
                  <div class="form-group col-sm-6">
                    <label for="city">Tanggal</label>
                    <input class="form-control" id="city" type="date" name="date" placeholder="Enter your city">
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="postal-code">Jam /Waktu</label>
                    <input class="form-control" id="postal-code" type="time" name="time" placeholder="Postal Code">
                  </div>
                </div>
                <!-- /.row-->
              </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
           </form>
        </div>
    </div>
</div>
<div class="modal fade" id="addJadwalMeetingZoom" tabindex="-1" aria-labelledby="addJadwalMeetingZoomLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addJadwalMeetingZoomLabel">Tambah Data Jadwal Meeting Zoom</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
           <form action="{{url('/')}}/administrator/create_zoom_meeting/{{Crypt::encrypt($sponsor['id'])}}/{{Crypt::encrypt($korban['id'])}}" method="post">
            @csrf
            <div class="card-body">
                
                <div class="form-group">
                  <label for="deskripsi">Deskripsi</label>
                  <textarea class="form-control" id="deskripsi" name="deskripsi" rows="9" placeholder="Deskripsi.." required></textarea>
                </div>
                <div class="row">
                  <div class="form-group col-sm-6">
                    <label for="city">Tanggal</label>
                    <input class="form-control" id="city" type="date" name="date" placeholder="Enter your city">
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="postal-code">Jam /Waktu</label>
                    <input class="form-control" id="postal-code" type="time" name="time" placeholder="Postal Code">
                  </div>
                </div>
                <!-- /.row-->
              </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
           </form>
        </div>
    </div>
</div>


@endsection
