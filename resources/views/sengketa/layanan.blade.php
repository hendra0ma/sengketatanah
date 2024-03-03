<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sengketa Tanah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs5/dt-1.12.1/b-2.2.3/datatables.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <style>
        body {
            width: 100%;
            margin: 0px;
            padding: 0px;
            overflow-x: hidden;
        }

        .blink {
            animation: blink-animation 1s steps(5, start) infinite;
            -webkit-animation: blink-animation 1s steps(5, start) infinite;
        }

        .aboute-bottom {
            position: fixed;
            bottom: 0;
            z-index: 1030;
            left: 0;
            right: 0;
        }

        .line-1 {
            height: 3px;
            background: black;
            width: 96.999%;
            margin: 0px auto;
        }

        .dot {
            height: 15px;
            width: 15px;
            background-color: #dc3545 !important;
            border-radius: 50%;
            display: inline-block;
            margin-top: -30px;
        }

        .center {
            padding: 70px 0;
            text-align: center;
        }

        .ribbon-pop {
            background: linear-gradient(270deg, #4f396a 5.25%, #576bb0 96.68%);
            display: inline-block;
            padding: 5px 30px 5px 10px;
            color: white;
            position: relative;
            margin-top: -10px;
            margin-bottom: 10px;

        }

        .ribbon-pop:after {
            content: "";
            width: 0;
            height: 0;
            top: 0;
            position: absolute;
            right: 0;
            border-right: 20px solid #fff;
            border-top: 20px solid transparent;
            border-bottom: 20px solid transparent;
        }

        .ribbon-pop:before {
            height: 0;
            width: 0;
            border-top: 15px solid #381f57;
            border-left: 15px solid transparent;
            bottom: -15px;
            position: absolute;
            content: "";
            left: 0;
        }
    </style>

    <style>
        body {
            background-color: #eee;

        }

        .bdge {
            height: 21px;
            background-color: orange;
            color: #fff;
            font-size: 11px;
            padding: 8px;
            border-radius: 4px;
            line-height: 3px;
        }

        .comments {
            text-decoration: underline;
            text-underline-position: under;
            cursor: pointer;
        }

        .dot {
            height: 7px;
            width: 7px;
            margin-top: 3px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
        }

        .hit-voting:hover {
            color: blue;
        }

        .hit-voting {
            cursor: pointer;
        }

        .btn.btn-outline-gold.active {
            color: #fff;
            background: linear-gradient(90deg, rgba(223, 189, 105, 1) 0%, rgba(146, 111, 52, 1) 100%);
            border: 1px solid black;
        }

        .btn.btn-outline-abu.active {
            color: #fff;
            background: linear-gradient(90deg, hsla(337, 85%, 31%, 1) 42%, hsla(337, 83%, 30%, 1) 64%, hsla(318, 57%, 22%, 1) 86%);

        }

        .btn .btn-outline.abu {
            color: rgba(146, 111, 52, 1);
            background: #fff;
            border: 1px solid black;
        }

        .btn .btn-outline.gold {
            color: rgba(146, 111, 52, 1);
            background: #fff;
            border: 1px solid red;
        }

        .btn.btn-outline-pem.active {
            color: #fff;
            background: rgba(88, 24, 69, 1);
        }
        
        .searchlink {
            cursor: pointer;
            display: block;
            position: relative;
        }
        
        .searchlink:hover,
        .searchlink.open {
            cursor: pointer;
        }
        
        .searchlink.open > .searchform {
            display: block;
        }
        
        .searchform {
            display: none;
            position: absolute;
            width: 200px;
            height: 70px;
            line-height: 40px;
            top: 70px;
            right: 0;
            padding: 0 15px;
            cursor: default;
            border-radius: 2px;
            border-style: solid;
            border-width: 1px;
            border-color: #e1e1e1;
            box-shadow: 0 3px 13px 0 rgba(0, 0, 0, 0.2);
            margin-left: -120px;
            z-index: 9999999;
            background-color: #fff;
        }
        
        .searchlink.open .searchform {
            display: block;
        }
        
        #search {
            display: block;
            position: relative;
        }
        
        #s {
            width: 135px;
            background: #fff;
            padding: 0 11px;
            border: 1px solid #e1e1e1;
            border-right: none;
            color: #888;
            margin: 14px 0;
        }
        
        .sbtn {
            display: block;
            position: absolute;
            background: none;
            border: 1px solid #f00f00;
            color: #fff;
            font-size: 0.6em;
            cursor: pointer;
            right: 0px;
            top: 14px;
            width: 35px;
            background-color: #f00f00;
        }

    </style>
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg bg-light mb-2">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold fs-4" href="{{url('/')}}">
                    <img src="{{asset('/uploads/sengketa-logo_pas.png')}}" style="width:30px"
                        class="img-fluid me-2">SENGKETA TANAH</a>
                <i class="fa-solid fa-magnifying-glass"></i>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{url('/')}}/layanan">Layanan</a>
                        </li>
                        <!--<li class="nav-item">-->
                        <!--    <a class="nav-link" href="{{url("/")}}/role">Role Pengguna</a>-->
                        <!--</li>-->
                        <!--<li class="nav-item">-->
                        <!--    <a class="nav-link" href="#">Panduan</a>-->
                        <!--</li>-->
                        <!--<li class="nav-item">-->
                        <!--    <a class="nav-link" href="#">Jaminan</a>-->
                        <!--</li>-->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Bid Sengketa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Podcast Sengketa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}/tentang-pemerintah">Tentang Pemerintah</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}/tentang">Tentang Kami</a>
                        </li>
                        <!--<li class="nav-item">-->
                        <!--    <a class="nav-link" href="{{url('/')}}/contact">Hubungi Kami</a>-->
                        <!--</li>-->
                    </ul>
                    
                </div>
            </div>
        </nav>

        <div class="row d-flex mb-1 mt-1">
            <div class="col text-center">
                <a href="{{url('')}}/login" class="text-dark" style="text-decoration:none"><i
                        class="fa-solid fa-right-to-bracket"></i> Login</a>
            </div>
            <div class="col text-center">
                <a href="{{url('')}}/register" class="text-dark" style="text-decoration:none"><i
                        class="fa-solid fa-pen-to-square"></i> Register</a>
            </div>
            <div class="col text-center">
                <a href="#" class="text-dark" style="text-decoration:none"><i class="fa-solid fa-key"></i> Forgot</a>
            </div>
            <div class="col text-center">
                <a href="#" class="text-danger" style="text-decoration:none"><i class="fa-solid fa-bell"></i> (0)</a>
            </div>
        </div>

        <hr class="mt-2 mb-2">


        <!--<div class="row mt-3 mb-3">-->
        <!--    <div class="col text-center">-->
        <!--        <a href="{{url('/')}}/layanan" style="text-decoration:none">Layanan</a> | -->
        <!--        <a href="#" style="text-decoration:none"></a> | -->
        <!--        <a href="#" style="text-decoration:none"></a> | -->
        <!--        <a href="#" style="text-decoration:none"></a> | -->
        <!--        <a href="#" style="text-decoration:none"></a> -->
        <!--    </div>-->
        <!--</div>-->

        <div class="row justify-content-center mb-4">

            <div class="col-lg-12">
                
                <div class="row mb-2 g-2">
                    <div class="col">
                        <a class="btn btn-sm btn-dark w-100" href="{{url('')}}/register">Daftar Sekarang</a>
                    </div>
                    <div class="col">
                        <a class="btn btn-sm btn-danger w-100">Buat Laporan</a>
                    </div>
                </div>

                <form action="">
                    <div class="row">
                        <div class="col">
                            <div class="mb-1">
                                <select name="jenis_objek" id="jenis_objek" class="form-select">
                                    <option value="" selected disabled>Sort Objek Sengketa</option>
                                    <option value="sp">Sengketa Pertanahan</option>
                                    <option value="pp">Perkara Pertanahan</option>
                                    <option value="kp">Konflik Pertanahan</option>
                                    <option value="all">Tampil Semua</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </form>
                <form action="">
                    <div class="row">
                        <div class="col">
                        </div>
                    </div>
                </form>

                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <form action="">
                                <div class="row mb-2" id="titleSponsor">
                                    <div class="col">
                                        <div class="row fw-bold">
                                            <div class="col text-start">
                                                <h4>Sengketa Terbaru</h4>
                                            </div>
                                            <div class="col-4 text-end text-primary">
                                                <h4>11,874</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2" id="titleLawyer" style="display:none">
                                    <div class="col">
                                        <div class="row fw-bold">
                                            <div class="col text-start">
                                                <h4>Kasus Terbaru</h4>
                                            </div>
                                            <div class="col-4 text-end text-primary">
                                                <h4>8,512</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2" id="titlePemerintah" style="display:none">
                                    <div class="col">
                                        <div class="row fw-bold">
                                            <div class="col text-start">
                                                <h4>Data Terbaru</h4>
                                            </div>
                                            <div class="col-4 text-end text-primary">
                                                <h4>3,462</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <hr>

                            <div class=" mb-3">
                                <center>
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="tab btn btn-outline-secondary rounded-0 active"
                                                style="width:100%;border:1px solid rgba(146,111,52,1)  "
                                                id="btnSponsor">Sponsor </a>
                                        </div>
                                        <div class="col">
                                            <a class="tab btn btn-outline-abu rounded-0"
                                                style="width:100%;border:1px solid hsla(337, 85%, 31%, 1)"
                                                id="btnLawyer">Pengacara </a>
                                        </div>
                                        <div class="col">
                                            <a class="tab btn btn-outline-secondary rounded-0"
                                                style="width:100%;border:1px solid #581845" id="btnPemerintah"
                                                id="btnPemerintah">Pemerintah</a>
                                        </div>
                                    </div>
                                </center>
                            </div>
                            
                            <form action="">
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                </div>
                            </form>

                            <div class="col-lg-12 mt-2 show" id="dataSponsor">
                                <div class="row">
                                    @foreach($bid_sengketa as $bs)
                                    <div class="col-md-6 mb-3 {{$bs['kode_objek']}}">
                                        <div class="card mb-2">

                                            <div class="card-header text-white px-3 py-1" style="
                                            background: #8f8f8f">
                                                <div class="row">

                                                    <div class="col-lg-12">
                                                        <h5 class="mb-0 text-center">Kode Bid {{$bs['kode']}} <img
                                                                src="{{url('/')}}/uploads/biru_centang.png" alt=""
                                                                class="mb-1" style="height:20px"></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--<div class="card-header bg-white">-->
                                            <!--    <div class="row">-->
                                            <!--        <div class="col-lg-12">-->
                                            <!--            <span class="badge bg-secondary float-end"><a-->
                                            <!--                    href="{{url('')}}/login?title=Bid Sponsor" class="text-white"-->
                                            <!--                    style="text-decoration:none">Lihat Berkas</a></span>-->
                                            <!--            <span class="float-end">&nbsp;</span>-->
                                            <!--            <form action="{{url('/')}}/bid-sengketa/podcast"class="form-sengketa{{$bs['id']}}"method="get">-->
                                            <!--                <input type="hidden" name="owner"value="{{$bs['owner']}}">-->
                                            <!--                <input type="hidden" name="objek"value="{{$bs['objek']}}">-->
                                            <!--                <input type="hidden" name="luas"value="{{$bs['luas']}}">-->
                                            <!--                <input type="hidden" name="lokasi"value="{{$bs['lokasi']}}">-->
                                            <!--                <input type="hidden" name="komentar"value="">-->
                                            <!--                <input type="hidden" name="link_yt"value="">-->
                                            <!--                <input type="hidden" name="form"value="sponsor">-->
                                            <!--            </form>-->
                                            <!--            <span class="badge bg-dark float-end" onclick="return document.querySelector('form.form-sengketa<?=$bs['id']?>').submit()">Lihat Podcast Sengketa</span>-->
                                            <!--            <span class="float-end">&nbsp;</span>-->

                                            <!--        </div>-->
                                            <!--    </div>-->
                                            <!--</div>-->




                                            <div class="card-body">
                                                @if($bs['id'] > 3)
                                                <div class="ribbon-pop"><i class="fa-solid fa-star"></i>&nbsp;HOT</div>
                                                @else
                                                @endif
                                                <table>
                                                    <tr>
                                                        <td>Owner/Korban</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;{{$bs['owner']}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Objek Sengketa</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;{{$bs['objek']}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Luas Objek</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;{{$bs['luas']}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lokasi</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;{{$bs['lokasi']}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kebutuhan Dana</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;{{$bs['dana']}}</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Imbal Hasil</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;{{$bs['imbal_hasil']}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jaminan</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;{{$bs['jaminan']}}</td>

                                                    </tr>

                                                    <tr>
                                                        <td>Jumlah Bid</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;{{$bs['jumlah_bid']}}</td>
                                                    </tr>
                                                </table>
                                                <hr>


                                                <div class="row g-0">
                                                    <div class="col text-center" style="border-right: 1px solid">

                                                        <a href="{{url('')}}/login?title=Bid Sponsor"
                                                            style="text-decoration:none" class="text-dark  mx-auto">
                                                            <i class="fa-solid fa-eye"></i> Lihat Berkas (12)</a>
                                                    </div>
                                                    <div class="col text-center">
                                                        <span onclick="return document.querySelector('form.form-sengketa<?=$bs['id']?>').submit()" style="cursor:pointer"><i
                                                                class="fa-solid fa-play text-danger"></i> Lihat Podcast (9)</span>
                                                    </div>
                                                </div>
                                                
                                                <form action="{{url('/')}}/bid-sengketa/podcast"
                                                    class="form-sengketa{{$bs['id']}}" method="get">
                                                    <input type="hidden" name="owner" value="{{$bs['owner']}}">
                                                    <input type="hidden" name="objek" value="{{$bs['objek']}}">
                                                    <input type="hidden" name="luas" value="{{$bs['luas']}}">
                                                    <input type="hidden" name="lokasi" value="{{$bs['lokasi']}}">
                                                    <input type="hidden" name="komentar" value="">
                                                    <input type="hidden" name="link_yt" value="">
                                                    <input type="hidden" name="form" value="sponsor">
                                                </form>


                                                <hr>
                                                <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                    <div class="col-4">

                                                        <div class="d-grid gap-2 ">

                                                            <!--<a href="{{url('/')}}/login?title=Bid Sponsor"-->
                                                            <!--    class="btn mt-3 rounded-5 text-white" style="-->
                                                            <!--    border: 0px;-->
                                                            <!--    background: rgb(223,189,105);-->
                                                            <!--    background: linear-gradient(90deg, rgba(223,189,105,1) 0%, rgba(146,111,52,1) 100%);-->
                                                            <!--    height: 45px" -->
                                                            <!--    type="button"><i class="fa-solid fa-gavel"></i> Bid Sponsor</a>-->
                                                            <a href="{{url('/')}}/login?title=Bid Sponsor"
                                                                class='text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark'>BID</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="row g-2" id="dataLawyer" style="display:none">

                                      @foreach($bid_pengacara as $bp)
                                <div class="col-lg-6 mt-1 mb-1">

                                    <div class="card">
                                        <div class="card-header text-white px-3 py-1" style="        
                                        background: linear-gradient(90deg, hsla(337, 85%, 31%, 1) 42%, hsla(337, 83%, 30%, 1) 64%, hsla(318, 57%, 22%, 1) 86%);
                                        ">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <h5 class="mb-0 text-center">Kode Bid {{$bp['kode']}} <img
                                                            src="{{url('/')}}/uploads/biru_centang.png" alt=""
                                                            class="mb-1" style="height:20px"></h4>
                                                        </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <!--<div class="card-header bg-white">-->
                                        <!--    <div class="row">-->
                                        <!--        <div class="col-lg-12">-->
                                        <!--            <span class="badge bg-secondary float-end"><a-->
                                        <!--                    href="{{url('')}}/login?title=Bid Sponsor" class="text-white"-->
                                        <!--                    style="text-decoration:none">Lihat Berkas</a></span>-->
                                        <!--            <span class="float-end">&nbsp;</span>-->
                                        <!--            <span class="badge bg-dark float-end" data-bs-toggle="modal"-->
                                        <!--                data-bs-target="#podcastLawyer">Lihat Podcast Sengketa</span>-->
                                        <!--            <span class="float-end">&nbsp;</span>-->
                                        <!--            <span class="badge bg-danger float-end">Terverifikasi</span>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->








                                        <div class="card-body">
                                            @if($bp['id'] >3)
                                            <div class="ribbon-pop"><i class="fa-solid fa-star"></i>&nbsp;HOT</div>
                                            @else
                                            @endif


                                            <table>
                                                <tr>
                                                    <td>Owner/Korban</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;{{$bp['owner']}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Objek Sengketa</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;{{$bp['objek']}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Luas Objek</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;{{$bp['luas']}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Lokasi</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;{{$bp['lokasi']}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Kebutuhan</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;{{$bp['kebutuhan']}}</td>
                                                </tr>

                                                <tr>
                                                    <td>Anggaran</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;{{$bp['anggaran']}}</td>
                                                </tr>


                                                <tr>
                                                    <td>Jumlah Bid</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;{{$bp['jumlah_bid']}}</td>
                                                </tr>

                                            </table>

                                            <hr>

                                            <div class="row g-0">
                                                <div class="col text-center" style="border-right: 1px solid">
                                                    <a href="{{url('')}}/login?title=Bid Sponsor"
                                                        style="text-decoration:none" class="text-dark  mx-auto">
                                                        <i class="fa-solid fa-eye"></i> Lihat Berkas (12)</a>
                                                </div>
                                                <div class="col text-center">
                                                    <span
                                                        onclick="return document.querySelector('form.form-sengketa<?=$bp['id']?>').submit()"
                                                        style="cursor:pointer"><i
                                                            class="fa-solid fa-play text-danger"></i> Lihat Podcast
                                                        (9)</span>
                                                </div>
                                            </div>
                                            <form action="{{url('/')}}/bid-sengketa/podcast" class="form-sengketa90"
                                                method="get">
                                                <input type="hidden" name="owner" value="{{$bp['owner']}}">
                                                <input type="hidden" name="objek" value="{{$bp['objek']}}">
                                                <input type="hidden" name="luas" value="{{$bp['luas']}}">
                                                <input type="hidden" name="lokasi" value="{{$bp['lokasi']}}">
                                                <input type="hidden" name="komentar" value="">
                                                <input type="hidden" name="link_yt" value="">
                                                <input type="hidden" name="form" value="pengacara">
                                            </form>
                                            <hr>
                                            <div class="row justify-content-center no-gutters"
                                                style="margin-top:-15px;">

                                                <div class="col-4">
                                                    <!--<div class="d-grid gap-2">-->
                                                    <!--    <a href="{{url('/')}}/login?title=Bid Sengketa"-->
                                                    <!--        class="btn btn-success mt-2" type="button">Bid Pengacara</a>-->

                                                    <div class="d-grid gap-2 ">

                                                        <!--<a href="{{url('/')}}/login?title=Bid Sponsor"-->
                                                        <!--            class="btn mt-3 rounded-5 text-white" style="-->
                                                        <!--            border: 0px;-->
                                                        <!--            background: rgb(223,189,105);-->
                                                        <!--        background: linear-gradient(90deg, hsla(337, 85%, 31%, 1) 42%, hsla(337, 83%, 30%, 1) 64%, hsla(318, 57%, 22%, 1) 86%);-->
                                                        <!--            height: 45px" -->
                                                        <!--            type="button"><i class="fa-solid fa-gavel"></i> Bid Pengacara</a>-->
                                                        <a href="{{url('/')}}/login?title=Bid Sponsor"
                                                            class='text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark'>BID</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            <div class="row" id="dataPemerintah" style="display:none">
                                 @foreach($bid_pemerintah as $bpm)
                            <div class="col-lg-6 mt-2 mb-2">
                                <div class="card">
                                    <div class="card-header text-white px-3 py-1  bg-secondary">
                                        <div class="row">
                                            <div class="col-lg-12 text-center">
                                                <h5 class="mb-0 text-center">Kode Bid {{$bpm['kode']}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">

                                        <!-- Modal -->
                                        <div class="modal fade" id="podcastPemerintah" tabindex="-1"
                                            aria-labelledby="podcastLawyer" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">

                                                        <div class="row g-0">
                                                            <div class="col-12">
                                                                <h5 id="exampleModalLabel">Podcast Sengketa Tanah</h5>
                                                            </div>
                                                            <div class="col-12">
                                                                <small class="text-dark">
                                                                    Hasil Wawancara Korban
                                                                </small>
                                                            </div>
                                                        </div>

                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">


                                                        <div class="row justify-content-center">
                                                            <div class="col-lg-6">

                                                                <div class="card bg-dark rounded-0" width="100%"
                                                                    style="height:200px">
                                                                    <div class="card-body center">
                                                                        <h3
                                                                            class="text-white text-uppercase text-center">
                                                                            Belum ada Video
                                                                        </h3>
                                                                    </div>
                                                                </div>

                                                                <table class="table">
                                                                    <tr>
                                                                        <td> Owner/Korban</td>
                                                                        <td>:</td>
                                                                        <td>&nbsp;Rival Santoso</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Objek Sengketa</td>
                                                                        <td>:</td>
                                                                        <td>&nbsp;Sengketa Pertanahan</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Luas Objek</td>

                                                                        <td>:</td>
                                                                        <td>&nbsp;12.3 Ha</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Lokasi</td>

                                                                        <td>:</td>
                                                                        <td>&nbsp;Ngawi, Jawa Timur</td>
                                                                    </tr>
                                                                </table>
                                                                <div class="d-grid gap-2">
                                                                    <button class="alert alert-warning mt-2"
                                                                        type="button">Keterangan: Data sengketa tanah
                                                                        ini telah diterima oleh Platform
                                                                        Sengketa Tanah dan akan diteruskan pada instansi
                                                                        terkait. </button>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="row">
                                                                    <div class="d-flex flex-column col-md-12">

                                                                        <div class="coment-bottom bg-white p-1">
                                                                            <div
                                                                                class="d-flex flex-row add-comment-section mt-4 mb-4">
                                                                                <img class="img-fluid img-responsive rounded-circle me-2"
                                                                                    src="https://i.imgur.com/qdiP4DB.jpg"
                                                                                    width="38">
                                                                                <input type="text"
                                                                                    class="form-control me-3 rounded-0"
                                                                                    placeholder="Tambah Komentar">
                                                                                <button
                                                                                    class="btn btn-primary rounded-0"
                                                                                    type="button">Komentar</button>
                                                                            </div>
                                                                            <hr>
                                                                            <div class="center">
                                                                                <h3
                                                                                    class="text-dark text-uppercase text-center">
                                                                                    Belum ada Komentar
                                                                                </h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>


                                                        <hr>
                                                        <div class="row" style="margin-top:-20px">
                                                            <div class="col-12 p-2">

                                                                <span class="fa-stack fa-lg float-end">
                                                                    <i class="fa fa-circle fa-stack-2x "
                                                                        style="text-shadow: -3px 3px 5px #bbbbbb;"></i>
                                                                    <i
                                                                        class="fa-solid fa-share fa-stack-1x fa-inverse"></i>

                                                                </span> <span class="float-start mt-2">Bagikan Video
                                                                    ini</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>






                                        <table>
                                            <tr>
                                                <td>Owner/Korban</td>
                                                <td></td>
                                                <td>:</td>
                                                <td>&nbsp;{{$bpm['owner']}}</td>
                                            </tr>
                                            <tr>
                                                <td>Objek Sengketa</td>
                                                <td></td>
                                                <td>:</td>
                                                <td>&nbsp;{{$bpm['objek']}}</td>
                                            </tr>
                                            <tr>
                                                <td>Luas Objek</td>
                                                <td></td>
                                                <td>:</td>
                                                <td>&nbsp;{{$bpm['luas']}}</td>
                                            </tr>
                                            <tr>
                                                <td>Lokasi</td>
                                                <td></td>
                                                <td>:</td>
                                                <td>&nbsp;{{$bpm['lokasi']}}</td>
                                            </tr>
                                            <!--<tr>-->
                                            <!--    <td>Status Data</td>-->
                                            <!--    <td></td>-->
                                            <!--    <td>:</td>-->
                                            <!--    <td></td>-->
                                            <!--</tr>-->



                                        </table>


                                        <div class="row justify-content-center no-gutters">
                                            <div class="col-12">
                                                <div class="d-grid gap-2">
                                                    <button class="alert alert-warning mt-2" type="button">Keterangan:
                                                        Data sengketa tanah ini telah diterima oleh Platform
                                                        Sengketa Tanah dan akan diteruskan pada instansi terkait.
                                                    </button>
                                                </div>
                                            </div>
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



        </div>
    </div>

    <div class="row justify-content-center mb-3 mt-4 text-center g-0">
        <p class="fw-bold text-center" style="text-align: justify">Ikuti Sosial Media Kami</a></p>

        <div class="col">
            <a class="btn p-0" href="https://www.instagram.com/sengketatanah.id/" role="button">
                <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x" style="text-shadow: -3px 3px 5px #bbbbbb;color: #8a3ab9"></i>
                    <i class="fa-brands fa-instagram fa-stack-1x fa-inverse"></i>
                </span>
            </a>
        </div>
        <div class="col">
            <a class="btn p-0" href="https://m.youtube.com/channel/UCXQW3lPJ68brYiThnxX18-A" role="button">
                <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x text-danger" style="text-shadow: -3px 3px 5px #bbbbbb;"></i>
                    <i class="fa-brands fa-youtube fa-stack-1x fa-inverse"></i>
                </span>
            </a>
        </div>
        <div class="col">
            <a class="btn p-0" href="#" role="button">
                <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x text-primary" style="text-shadow: -3px 3px 5px #bbbbbb;"></i>
                    <i class="fa-brands fa-facebook fa-stack-1x fa-inverse"></i>
                </span>
            </a>
        </div>
        <div class="col">
            <a class="btn p-0" href="https://mobile.twitter.com/sengketatanahid" role="button">
                <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x text-info" style="text-shadow: -3px 3px 5px #bbbbbb;"></i>
                    <i class="fa-brands fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
            </a>
        </div>
        <div class="col">
            <div class="dropdown">
                <button class="btn p-0" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                    id="dropdownMenuButton1">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x " style="text-shadow: -3px 3px 5px #bbbbbb;"></i>
                        <i class="fa-solid fa-share fa-stack-1x fa-inverse"></i>
                    </span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="https://twitter.com/share?ref_src=twsrc%5Etfw"
                            data-show-count="false"><i class="fa-brands fa-twitter"></i> Tweet</a></li>
                    <li>
                        <a target="_blank"
                            onClick='window.open("https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fserver.sengketatanah.id%2F&amp;src=sdkpreparse","Ratting","width=550,height=550,left=150,top=200,toolbar=0,status=0,");'
                            href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fserver.sengketatanah.id%2F&amp;src=sdkpreparse"
                            class="fb-xfbml-parse-ignore dropdown-item"><i class="fa-brands fa-facebook"></i>
                            Facebook</a>
                    </li>
                </ul>
            </div>

            <a href="" class=""></a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

        </div>

    </div>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v14.0"
        nonce="Ee2Zutm6"></script>
    <div class="row mt-4">
        <div class="card-body bg-dark text-white text-center bg-card-dark-mode">
            <p></p>
            <img src="{{asset('/uploads/sengketa-logo.png')}}" style="width:250px" class="img-fluid">
            <p style="font-size:12px" class="card-title">Copyright © Sengketa Tanah 2022. All Rights Reserved</p>
            <hr>
            <p style="font-size:14px" class="card-title pb-3">Sovereign Plaza. Lt. 19 <br> Jl. TB Simatupang No. 36,
                TB Simatupang, Jakarta Selatan</p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>



    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> -->

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/b-2.2.3/datatables.min.js"></script>
    <script>
        $('#jenis_objek').on('change', function () {
            let jenisObjek = $(this).find('option').filter(':selected').val();
            if (jenisObjek == "sp") {

                $('div.col-md-6.kp').hide()
                $('div.col-md-6.pp').hide()
                $('div.col-md-6.sp').show()
            } else if (jenisObjek == "kp") {

                $('div.col-md-6.kp').show()
                $('div.col-md-6.pp').hide()
                $('div.col-md-6.sp').hide()
            } else if (jenisObjek == "pp") {
                $('div.col-md-6.kp').hide()
                $('div.col-md-6.pp').show()
                $('div.col-md-6.sp').hide()
            } else {
                $('div.col-md-6.kp').show()
                $('div.col-md-6.pp').show()
                $('div.col-md-6.sp').show()
            }

        });

        $('#btnLawyer').on('click', function () {
            $('#dataSponsor').hide()
            $('#dataPemerintah').hide()
            $('#dataLawyer').show()

        });
        $('#btnSponsor').on('click', function () {
            $('#dataSponsor').show()
            $('#dataLawyer').hide()
            $('#dataPemerintah').hide()
        });
        $('#btnPemerintah').on('click', function () {
            $('#dataLawyer').hide()
            $('#dataSponsor').hide()
            $('#dataPemerintah').show()
        });

        $(document).ready(function () {
            $(".tab").click(function () {
                $(".tab").removeClass("active");
                // $(".tab").addClass("active"); // instead of this do the below 
                $(this).addClass("active");
            });
        });

        $(document).ready(function () {
            $('#myTable').DataTable();
        });

        $('#btnLawyer').on('click', function () {
            $('#titleSponsor').hide()
            $('#titlePemerintah').hide()
            $('#titleLawyer').show()

        });

        $('#btnSponsor').on('click', function () {
            $('#titleSponsor').show()
            $('#titleLawyer').hide()
            $('#titlePemerintah').hide()
        });
        $('#btnPemerintah').on('click', function () {
            $('#titleLawyer').hide()
            $('#titleSponsor').hide()
            $('#titlePemerintah').show()
        });
        
        $(function() {
            $('#searchlink').on('click', function(e) {
            	$(this).toggleClass('open');
            });
        });
    </script>
       @include('layouts.dark_mode')
</body>

</html>