<?php 
use App\Models\Bid_Sengketa;
use App\Models\User;
?>


@extends('layouts.template-korban.main')
@section('content')

<div class="container-fluid mt-3 mb-5">
    {{-- <a class="btn btn-successs my-4" href="{{route('korban.tambah_sengketa')}}">Tambah Project</a> --}}
    <div class="row justify-content-center mb-2">
        <div class="col-3">
            <div class="row">
                <div class="col-12">
                    <center><img src="{{asset('/')}}images/icon/icon_rounded.png" alt="" class="img-fluid"
                            style="width: 100px;height: auto;"></center>
                </div>
                <div class="col-12 text-center">
                    <a href="{{url('')}}/korban/list_sengketa_saya" class="text-dark"
                        style="text-decoration: none">Project</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="row">
                <div class="col-12">
                    <center><img src="{{asset('/')}}images/icon/icon_rounded.png" alt="" class="img-fluid"
                            style="width: 100px;height: auto;"></center>
                </div>
                <div class="col-12 text-center">
                    <a href="{{url('')}}/korban/bidding" class="text-dark" style="text-decoration: none">Bidding</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="row">
                <div class="col-12">
                    <center><img src="{{asset('/')}}images/icon/icon_rounded.png" alt="" class="img-fluid"
                            style="width: 100px;height: auto;"></center>
                </div>
                <div class="col-12 text-center">
                    Agenda
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="row">
                <div class="col-12">
                    <center><img src="{{asset('/')}}images/icon/icon_rounded.png" alt="" class="img-fluid"
                            style="width: 100px;height: auto;"></center>
                </div>
                <div class="col-12 text-center">
                    Progress
                </div>
            </div>
        </div>
    </div>

    <hr>
    <div class="row">
        <?php $i = 1;    ?>
        @foreach ($sengketa as $item)
        <?php $users = User::where('id',$item['user_id'])->first(); ?>
        <div class="col-md-12">
            <div class="row mb-3">
                <div class="col-md-12 sp">
                    <div class="card mb-0">
                        <div class="card-header bg-white">
                            <div class="row">
                                <div class="col-6">
                                    <b>PROJECT</b><b class="text-danger"> SP-00{{$item['id']}}</b>
                                </div>

                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-9 mt-1">
                                            <div class="d-flex  justify-content-end">
                                                @if($item['status_sengketa'] == 1)
                                                <span class="badge badge-danger">Menunggu Verifikasi</span>
                                                @elseif($item['status_sengketa'] == 2)
                                                <span class="badge badge-success">Terverifikasi Tahap 1</span>
                                                @elseif($item['status_sengketa'] == 3)
                                                <span class="badge badge-success">Terverifikasi Tahap 2</span>
                                                @elseif($item['status_sengketa'] == 4)
                                                <span class="badge badge-success">Selesai</span>
                                                @elseif($item['status_sengketa'] == 0)
                                                <span class="badge badge-danger">Pending</span>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="col-1">
                                            <a id="show">
                                                <svg class="c-icon mr-2">
                                                    <use
                                                        xlink:href="{{url('/')}}/core-ui/vendors/@coreui/icons/svg/free.svg#cil-bell">
                                                    </use>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="col-1">
                                            <div class="dropdown d-flex  justify-content-end">
                                                <a id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <svg class="c-icon mr-2">
                                                        <use
                                                            xlink:href="{{url('/')}}/core-ui/vendors/@coreui/icons/svg/free.svg#cil-menu">
                                                        </use>
                                                    </svg>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="card-body">
                            @if($item['status_sengketa'] == 1)
                            <div class="alert alert-danger" id="alert" style="display: none" role="alert">
                                Data Anda telah kami terima dan mohon menunggu petugas kami melakukan verifikasi. Saat
                                ini anda belum dapat mengirimkan dokumen. Pastikan telepon/hp Anda dapat di hubungi
                            </div>

                            @elseif($item['status_sengketa'] == 2)
                            <div class="alert alert-warning" id="alert" style="display: none" role="alert">
                                <b>Selamat, </b>Anda berhasil melewati tahap verifikasi 1. Silahkan pilih lampiran
                                dokumen Anda untuk melewati tahap berikutnya
                            </div>
                            @elseif($item['status_sengketa'] == 3)
                            <div class="alert alert-warning" id="alert" style="display: none" role="alert">
                                <b>Selamat, </b>Anda berhasil melewati verifikasi tahap 2. Untuk menampilkan project,
                                Anda harus melewati sesi wawancara via Podcast Sengketa Tanah atau Zoom.
                            </div>
                            {{-- @elseif($item['status_sengketa']s == 3)s
                            <span class="badge badge-warning">Diproses</span>
                            @elseif($item['status_sengketa'] == 4)
                            <span class="badge badge-success">Selesai</span>
                            @elseif($item['status_sengketa'] == 0)
                            <span class="badge badge-danger">Pending</span> --}}
                            @endif

                            <table>
                                <tbody>
                                    <tr>
                                        <td>Owner/Korban</td>
                                        <td></td>
                                        <td>:</td>
                                        <td>&nbsp; {{$users->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Objek Sengketa</td>
                                        <td></td>
                                        <td>:</td>
                                        <td>&nbsp; {{$item['objek_sengketa']}}</td>
                                    </tr>
                                    <tr>
                                        <td>Luas Objek</td>
                                        <td></td>
                                        <td>:</td>
                                        <td>&nbsp; {{$item['luas']}} Ha</td>
                                    </tr>
                                    <tr>
                                        <td>Lokasi</td>
                                        <td></td>
                                        <td>:</td>
                                        <td>&nbsp; {{$item['lokasi']}}</td>
                                    </tr>
                                    <tr>
                                        <td>Kebutuhan Dana</td>
                                        <td></td>
                                        <td>:</td>
                                        <td>&nbsp; Rp.{{$item['jumlah_dana']}}</td>
                                    </tr>

                                    <tr>
                                        <td>Imbal Hasil</td>
                                        <td></td>
                                        <td>:</td>
                                        <td>&nbsp; {{$item['pengembalian_dana']}}</td>
                                    </tr>
                                    <tr>
                                        <td>Jaminan</td>
                                        <td></td>
                                        <td>:</td>
                                        <td>&nbsp; {{$item['jaminan_berupa']}}</td>

                                    </tr>

                                    <tr>
                                        <td>Jumlah Bid</td>
                                        <td></td>
                                        <td>:</td>
                                        <td>&nbsp; {{count(Bid_Sengketa::where('sengketa_id',$item['id'])->get());}}
                                        </td>
                                    </tr>
                                    {{-- <tr>
                                        <td>Kode Bid</td>
                                        <td></td>
                                        <td>:</td>
                                        <td>&nbsp; <b class="text-danger">SP-00{{$item['id']}}</b></td>
                                    </tr> --}}
                                    {{-- <tr>
                                        <td>Status</td>
                                        <td></td>
                                        <td>:</td>
                                        <td>&nbsp;
                                            @if($item['status_sengketa'] == 1)
                                            <span class="badge badge-danger">Menunggu verifikasi</span>
                                            @elseif($item['status_sengketa'] == 2)
                                            <span class="badge badge-success">Terverifikasi tahap 1</span>
                                            @elseif($item['status_sengketa'] == 3)
                                            <span class="badge badge-warning">Terverifikasi tahap 2</span>
                                            @elseif($item['status_sengketa'] == 4)
                                            <span class="badge badge-success">Selesai</span>
                                            @elseif($item['status_sengketa'] == 0)
                                            <span class="badge badge-danger">Pending</span>
                                            @endif</td>
                                    </tr> --}}
                                </tbody>
                            </table>

                            @if ($item['status_sengketa'] == 1)
                            @if ($item['status_file_upload'] == "yes")
                            <a href="{{route('korban.hasil_berkas_sengketa',Crypt::encrypt($item['id']).'')}}"
                                class="btn btn-block btn-sm text-white mt-4" style="background:#8f8f8f">Lihat Berkas</a>
                            @else
                            <a href="{{route('korban.add_korban_file',Crypt::encrypt($item['id']).'')}}"
                                class="btn btn-block btn-sm text-white mt-4 disabled" style="background:#8f8f8f"
                                disable>Upload Dokumen</a>
                            @endif

                            @elseif($item['status_sengketa'] == 3)
                            <div class="row mt-4">
                                <div class="col-6">
                                    <a href="{{route('korban.hasil_berkas_sengketa',Crypt::encrypt($item['id']).'')}}"
                                        class="btn btn-block btn-sm text-white" style="background:#8f8f8f">Lihat
                                        Berkas</a>
                                </div>
                                <div class="col-6">
                                    <a href="#" class="btn btn-block btn-sm text-white"
                                        style="background:#8f8f8f">Jadwalkan Wawancara</a>
                                </div>
                            </div>
                            @else
                            @if ($item['status_file_upload'] == "yes")
                            <a href="{{route('korban.hasil_berkas_sengketa',Crypt::encrypt($item['id']).'')}}"
                                class="btn btn-block btn-sm text-white mt-4" style="background:#8f8f8f">Lihat Berkas</a>
                            @else
                            <a href="{{route('korban.add_korban_file',Crypt::encrypt($item['id']).'')}}"
                                class="btn btn-block btn-sm text-white mt-4" style="background:#8f8f8f">Upload
                                Dokumen</a>
                            @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach


    </div>

    <a class="btn text-white btn-success" href="{{route('korban.tambah_sengketa')}}">Tambah Project</a>
</div>
@endsection
