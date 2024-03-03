@extends('layouts.template-admin.main')
@section('content')
<div class="container-fluid mt-3">
    <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="card">
            <div class="card-header">
                Hasil Bid Sengketa
            </div>
            <div class="card-body">
                @if (Session::has('success'))
                        <div class="alert alert-success">
                          {{Session::get('success')}}
                            </div>
                        @endif
                <table class="table"id="myTable">
                    <thead class="thead-dark">
                        <tr>
                            <th>no</th>
                            <th>nama</th>
                            <th>objek sengketa</th>
                            <th>Luas Objek Sengketa</th>
                       
                            <th>Status Laporan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach($sengketa as $data)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->objek_sengketa}}</td>
                          
                            <td>{{$data->luas}} meter</td>
                            <td>
                            @if($data->status_laporan == 1)
                            <span class="badge badge-primary">Menunggu Verifikasi</span>
                            @elseif($data->status_laporan == 2)
                            <span class="badge badge-dark">Terverifikasi</span>
                            @elseif($data->status_laporan == 3)
                            <span class="badge badge-warning">Diproses</span>
                            @elseif($data->status_laporan == 4)
                            <span class="badge badge-success">Selesai</span>
                            @endif
                            </td>
                            <td> 
                                <a href="{{url('/')}}/admin/sengketa-tanah/selengkapnya/{{encrypt($data->id)}}" class="btn btn-primary">Selengkapnya</a>
                             </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
