<?php 
use App\Models\Bid_Sengketa;
use App\Models\User;
use App\Models\KorbanUser;


$project = KorbanUser::where([
    'user_id' => auth()->user()->id,
])->get();


$project_di_setujui = KorbanUser::where([
    'user_id' => auth()->user()->id,
    'status_sengketa' => 5,
])->get();
?>
?>


@extends('layouts.template-korban.main')
@section('content')

<div class="page-wrapper">
    <div class="page-content">

        {{-- s --}}
        {{-- <a class="btn btn-successs my-4" href="{{route('korban.tambah_sengketa')}}">Tambah Project</a> --}}

        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
            <a href="{{url('')}}/korban/list_sengketa_saya">
                <div class="col">
                    <div class="card radius-10 bg-gradient-deepblue">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0 text-white">{{count($project)}}</h5>
                                <div class="ms-auto">
                                    <i class='bx bx-cart fs-3 text-white'></i>
                                </div>
                            </div>
                            <div class="progress my-2 bg-white-transparent" style="height:4px;">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 55%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex align-items-center text-white">
                                <p class="mb-0">Project</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{url('')}}/korban/project_disetujui">
                <div class="col">
                    <div class="card radius-10 bg-gradient-ohhappiness">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0 text-white">{{count($project_di_setujui)}}</h5>
                                <div class="ms-auto">
                                    <i class='bx bx-dollar fs-3 text-white'></i>
                                </div>
                            </div>
                            <div class="progress my-2 bg-white-transparent" style="height:4px;">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 55%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex align-items-center text-white">
                                <p class="mb-0">Project Di Setujui</p>
                                <p class="mb-0 ms-auto">+1.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{url('')}}/korban/bidding">
                <div class="col">
                    <div class="card radius-10 bg-gradient-ibiza">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0 text-white">{{count($project_di_setujui)}}</h5>
                                <div class="ms-auto">
                                    <i class='bx bx-group fs-3 text-white'></i>
                                </div>
                            </div>
                            <div class="progress my-2 bg-white-transparent" style="height:4px;">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 55%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex align-items-center text-white">
                                <p class="mb-0">Bidding</p>

                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{route('korban.progress')}}">
                <div class="col">
                    <div class="card radius-10 bg-gradient-moonlit">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0 text-white">5630</h5>
                                <div class="ms-auto">
                                    <i class='bx bx-envelope fs-3 text-white'></i>
                                </div>
                            </div>
                            <div class="progress my-2 bg-white-transparent" style="height:4px;">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 55%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex align-items-center text-white">
                                <p class="mb-0">Closing</p>
                                <p class="mb-0 ms-auto">+2.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <hr>
        <div class="row">
            <style>
                @media (min-width: 768px) {
                    .col-md-9.sp {
                        padding-right: 0px !important
                    }

                    .col-md-3.sp {
                        padding-left: 0px !important
                    }
                }
            </style>
            <div class="col-md-12">
                <div class="row mb-3">

                    @foreach ($sengketa as $item)
                    <?php $users = User::where('id',$item['user_id'])->first(); ?>
                    <div class="col-md-12 sp">
                        <div class="card mb-0 rounded-0">
                            <div class="card-header bg-white">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <b>PROJECT</b><b class="text-danger"> SP-00{{$item['id']}}</b>
                                    </div>
        
                                    <div class="dropdown options ms-auto">
        
                                        <div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                                            <span class="badge mr-4 bg-success">Tayang</span>
                                        </div>
        
                               
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item disabled" href="javascript:;">Edit</a></li>
                                            <li><a class="dropdown-item disabled" href="javascript:;">Delete</a></li>
                                        </ul>
                                   
        
        
        
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card text-white">
                                    <div class="card-header bg-info ">
                                        Data Project
                                    </div>
                                    <div class="card-body">
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
                                                    <?php
                                                    $angka = $item['jumlah_dana'];
                $format_angka = number_format($angka, "2", ",", ".");
                 ?>
                                                    <td>&nbsp; Rp.{{$format_angka}}</td>
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
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="card">
                                            <div class="card-header bg-info text-white">
                                                Bid 1
                                            </div>
                                            <div class="card-body">
                                                Nama Sponsor: Andriano Qalbi
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card">
                                            <div class="card-header  bg-info text-white">
                                                Bid 2
                                            </div>
                                            <div class="card-body">
                                                Nama Sponsor: Reza Pardede
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card">
                                            <div class="card-header  bg-info text-white">
                                                Bid 3
                                            </div>
                                            <div class="card-body">
                                                Nama Sponsor: Ibob Taligan
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <a href="" class="btn btn-block btn-sm mt-3 btn-info text-white">
                                        Promosikan Project</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>


        </div>
    </div>
</div>
@endsection
