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
                                            <span class="badge mr-4 bg-success"><i class="lni lni-eye"></i> Tayang
                                                (0)</span>
                                        </div>





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
                                <div class="row mt-3">

                                    <div class="col-lg-4">
                                        <div class="card radius-10">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <p class="mb-0 text-secondary"></p>
                                                        <h4 class="my-1">
                                                           3
                                                        </h4>
                                                    </div>
                                                    <div class="text-primary ms-auto font-35"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xmlns:svgjs="http://svgjs.com/svgjs" width="40px" x="0"
                                                            y="0" viewBox="0 0 50 60"
                                                            style="enable-background:new 0 0 512 512"
                                                            xml:space="preserve" class="">
                                                            <circle r="25" cx="25" cy="30" fill="#ffffff"
                                                                shape="circle"></circle>
                                                            <g transform="matrix(0.7,0,0,0.7,7.500000286102296,9)">
                                                                <g xmlns="http://www.w3.org/2000/svg" id="Page-1"
                                                                    fill="none" fill-rule="evenodd">
                                                                    <g id="001---Bid-Sign" fill="rgb(0,0,0)"
                                                                        fill-rule="nonzero">
                                                                        <path id="Shape"
                                                                            d="m3 52h8.072c.4576865.0004997.9089573.107668 1.318.313l1.456.733c2.5817025 1.2790372 5.42284 1.9475804 8.304 1.954h2.63c.5642399.6337052 1.3715062.9973386 2.22 1v1c0 1.6568542 1.3431458 3 3 3s3-1.3431458 3-3v-1c1.1856144.005247 2.2620981-.691231 2.7432243-1.7748484.4811261-1.0836175.2758048-2.3492169-.5232243-3.2251516 1.0400491-1.1305142 1.0400491-2.8694858 0-4 1.0400491-1.1305142 1.0400491-2.8694858 0-4 .5806193-.6333292.85885-1.4868812.7629994-2.3407179-.0958505-.8538368-.5564082-1.6244534-1.2629994-2.1132821 1.9862979-.6121975 3.325279-2.4679926 3.28-4.546 0-1.1045695-.8954305-2-2-2h-3v-2h14c1.6568542 0 3-1.3431458 3-3v-24c0-1.65685425-1.3431458-3-3-3h-34c-1.6568542 0-3 1.34314575-3 3v24c0 1.6568542 1.3431458 3 3 3h14v2h-2.64c-4.3481249.0027575-8.558163 1.5272159-11.9 4.309-.5364453.4462991-1.2121774.6907656-1.91.691h-7.55c-1.65685425 0-3 1.3431458-3 3v9c0 1.6568542 1.34314575 3 3 3zm22-11c0-.5522847.4477153-1 1-1h7c.5522847 0 1 .4477153 1 1s-.4477153 1-1 1h-7c-.5522847 0-1-.4477153-1-1zm9 4c0 .5522847-.4477153 1-1 1h-7c-.5522847 0-1-.4477153-1-1s.4477153-1 1-1h7c.5522847 0 1 .4477153 1 1zm-1 3c.5522847 0 1 .4477153 1 1s-.4477153 1-1 1h-7c-.5522847 0-1-.4477153-1-1s.4477153-1 1-1zm-2 9c0 .5522847-.4477153 1-1 1s-1-.4477153-1-1v-1h2zm2-3h-6c-.5522847 0-1-.4477153-1-1s.4477153-1 1-1h6c.5522847 0 1 .4477153 1 1s-.4477153 1-1 1zm3-20c0 2.1-1.684 2.748-3 2.932v-2.932zm-24-7v-24c0-.55228475.4477153-1 1-1h34c.5522847 0 1 .44771525 1 1v24c0 .5522847-.4477153 1-1 1h-34c-.5522847 0-1-.4477153-1-1zm19 3v8h-2v-8zm-29 10c0-.5522847.44771525-1 1-1h7.55c1.1656656-.0009424 2.2943701-.4091295 3.191-1.154 2.982163-2.4823219 6.7388958-3.8429391 10.619-3.846h2.64v4h-1c-1.1856144-.005247-2.2620981.691231-2.7432243 1.7748484-.4811261 1.0836175-.2758048 2.3492169.5232243 3.2251516-1.0400491 1.1305142-1.0400491 2.8694858 0 4-.5967576.6515543-.8725607 1.5349101-.752536 2.4102596s.6234232 1.6518641 1.373536 2.1187404c-.2595214.4470314-.3977522.9541075-.401 1.471h-1.85c-2.570894-.0058162-5.1060912-.602152-7.41-1.743l-1.451-.731c-.6882064-.3448961-1.4472076-.5249748-2.217-.526h-8.072c-.55228475 0-1-.4477153-1-1z"
                                                                            fill="#17a00e" data-original="#000000"
                                                                            class=""></path>
                                                                        <path id="Shape"
                                                                            d="m25 11c-.0033061-2.76005315-2.2399468-4.99669388-5-5h-3c-1.1045695 0-2 .8954305-2 2v14c0 1.1045695.8954305 2 2 2h3c2.1566753.0062173 4.0727751-1.3751502 4.7484261-3.423267.675651-2.0481169-.0423886-4.2984577-1.7794261-5.576733 1.272967-.9358543 2.0265663-2.4200479 2.031-4zm-2 8c0 1.6568542-1.3431458 3-3 3h-3v-6h3c1.6568542 0 3 1.3431458 3 3zm-3-5h-3v-6h3c1.6568542.00000003 2.9999999 1.34314578 2.9999999 3 0 1.6568542-1.3431457 3-2.9999999 3z"
                                                                            fill="#17a00e" data-original="#000000"
                                                                            class=""></path>
                                                                        <path id="Shape"
                                                                            d="m38 24h2c3.3123376-.0033074 5.9966926-2.6876624 6-6v-6c-.0033074-3.31233757-2.6876624-5.99669262-6-6h-2c-1.1045695 0-2 .8954305-2 2v14c0 1.1045695.8954305 2 2 2zm0-16h2c2.209139 0 4 1.790861 4 4v6c0 2.209139-1.790861 4-4 4h-2z"
                                                                            fill="#17a00e" data-original="#000000"
                                                                            class=""></path>
                                                                        <path id="Shape"
                                                                            d="m34 23c0-.5522847-.4477153-1-1-1h-2v-14h2c.5522847 0 1-.44771525 1-1s-.4477153-1-1-1h-6c-.5522847 0-1 .44771525-1 1s.4477153 1 1 1h2v14h-2c-.5522847 0-1 .4477153-1 1s.4477153 1 1 1h6c.5522847 0 1-.4477153 1-1z"
                                                                            fill="#17a00e" data-original="#000000"
                                                                            class=""></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card radius-10">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <p class="mb-0 text-secondary">Berkas</p>
                                                        <h4 class="my-1"></h4>
                                                    </div>
                                                    <div class="text-success ms-auto font-35"><i
                                                            class="lni lni-empty-file"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card radius-10">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <p class="mb-0 text-secondary">Wawancara</p>
                                                        <h4 class="my-1"></h4>
                                                    </div>
                                                    <div class="text-success ms-auto font-35"><i
                                                            class="lni lni-mic"></i></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
