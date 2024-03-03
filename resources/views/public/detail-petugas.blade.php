<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sengketa Tanah</title>
    <link rel="icon" type="image/x-icon" href="{{asset('')}}uploads/sengketa-logo_pas.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/b-2.2.3/datatables.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>


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

        .aboute-bottom svg {
            opacity: 75%;
        }

        .aboute-bottom h6 {
            opacity: 75%;
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
            display: block;
            padding: 5px 30px 5px 10px;
            color: white;
            position: absolute;
            width: 100px;
            z-index: 999;
            margin-top: 0px;
            margin-left: -15px;
            margin-bottom: -10px;

        }

        .ribbon-pop:after {
            content: "";
            width: 0;
            height: 0;
            top: 0;
            position: absolute;
            right: 0;
            border-right: 20px solid transparent;
            border-top: 17px solid transparent;
            border-bottom: 17px solid transparent;
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

        .btn.btn-outline-abu:hover {
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

        .searchlink.open>.searchform {
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .chat-btn {
            position: absolute;
            right: 14px;
            bottom: 30px;
            cursor: pointer
        }

        .chat-btn .close {
            display: none
        }

        .chat-btn i {
            transition: all 0.9s ease
        }

        #check:checked~.chat-btn i {
            display: block;
            pointer-events: auto;
            transform: rotate(180deg)
        }

        #check:checked~.chat-btn .comment {
            display: none;

        }

        #check:checked~.chat-btn .ilangono {
            display: none;

        }

        .chat-btn i {
            font-size: 22px;
            color: #fff !important
        }

        .chat-btn {
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50px;
            background-color: #007bff !important;
            color: #fff;
            font-size: 22px;
            border: none
        }

        .wrapper.btn-chatz {
            position: absolute;
            /* right: 20px; */
            bottom: 100px;
            width: 340px;
            height: auto;
            background-color: #fff;
            border-radius: 5px;
            border: 2px solid white;
            opacity: 0;
            transition: all 0.4s
        }

        #check:checked~.wrapper.btn-chatz {
            opacity: 1;

        }

        .header.btn-chatz {
            padding: 13px;
            background-color: #007bff !important;
            border-radius: 5px 5px 0px 0px;
            margin-bottom: 10px;
            color: #fff
        }

        .chat-form {
            padding: 15px
        }

        .chat-form input,
        textarea,
        button {
            margin-bottom: 10px
        }

        .chat-form textarea {
            resize: none
        }

        .form-control:focus,
        .btn:focus {
            box-shadow: none
        }

        #check {
            display: none !important
        }

        .carousel-item {
            transition: transform 0.75s ease;
        }

        .dropdown-menu {
            position: relative !important;
            transform: none !important;
            display: none !important
        }

        .dropdown-menu.show {
            display: block !important;
        }

        .bg-brown {
            color: #fff;
            background: #61481C;
            border: 1px solid #61481C;
        }

        .jumbotron {
            background: #61481C;
            padding: 3rem 0.5rem;
        }

        @media (min-width: 1400px) {
            .jumbotron {
                padding: 3rem 10rem;
            }
        }

        @media (min-width: 1200px) {
            .jumbotron {
                padding: 3rem 20rem;
            }
        }

        .bg-brown {
            color: #fff;
            background: #61481C;
            border: 1px solid #61481C;
        }

        .btn.btn-outline-brown {
            color: #61481C;
            background: #fff;
            border: 1px solid #61481C;
        }

        .btn.btn-outline-brown:hover {
            color: #fff;
            background: #61481C;
            border: 1px solid #61481C;
        }

        .btn.btn-brown {
            color: #fff;
            background: #61481C;
            border: 1px solid #61481C;
        }

        .btn.btn-brown:hover {
            color: #fff;
            background: #533e18;
            border: 1px solid #61481C;
        }

        .vr.vr-none {
            display: none !important;
        }

        hr.hr-none {
            display: block !important;
            margin-top: 0px
        }

        .login-mb {
            margin-bottom: 0.5rem;
        }

        @media (min-width: 1000px) {
            .vr.vr-none {
                display: block !important;
            }

            hr.hr-none {
                display: none !important;
            }

            .login-mb {
                margin-bottom: 0rem;
            }
        }

        .mobile {
            display: none;
        }

        .desktop-2 {
            display: block;
        }

        @media (max-width: 1000px) {
            .mobile {
                display: block;
            }

            .desktop {
                display: none;
            }

            .desktop-2 {
                display: none;
            }
        }

        .mobile-scroll {
            overflow-x: hidden
        }

        @media (max-width: 1199.98px) {
            .mobile-scroll {
                overflow-x: scroll;


            }

            .mobile-scroll::-webkit-scrollbar {
                opacity: 100;
            }

            .mobile-scroll::-webkit-scrollbar-thumb {
                background: transparent;
            }

            .col-10.arrow-desktop {
                width: 100%
            }

            .col-1.arrow-desktop {
                display: none
            }

            .col-1.arrow-desktop {
                display: none
            }
        }
    </style>

    <style>
        .scroll-simple::-webkit-scrollbar {
            width: 7px;
            height: 7px;
        }

        .scroll-simple::-webkit-scrollbar-track {
            border-radius: 10px;
            background: rgba(0, 0, 0, 0.1);
        }

        .scroll-simple::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background: rgba(0, 0, 0, 0.2);
        }

        .scroll-simple::-webkit-scrollbar-thumb:hover {
            background: rgba(0, 0, 0, 0.4);
        }

        .scroll-simple::-webkit-scrollbar-thumb:active {
            background: rgba(0, 0, 0, .9);
        }

        .fav-icon {
            color: #ffc107 !important
        }

        .text-fav-disable {
            color: rgb(199, 199, 199)
        }

        .share-icon {
            position: absolute;
            z-index: 999;
            right: 1.5rem;
            top: 2rem;
        }

        div.page {
            max-width: 100vw;
            text-align: left;
        }

        .pinch-zoom-parent {
            height: 80vh;
            width: 90vw;
        }

        img.zooming {
            height: 90vh;
        }

        div.pinch-zoom div.description h1 {
            font-size: 40px;
            margin: 0px;
            margin-bottom: 10px;
        }

        div.pinch-zoom div.description p {
            margin-bottom: 1em;
        }

        ul {
            margin: 0;
            padding: 0;
        }

        .jumbotron-bg-user {
            height: 200px;
        }

        .img-utama {
            width: 150px;
            height: 150px;
            object-fit: cover;

            display: inline-block;
        }

        @media (max-width: 1000px) {
            .jumbotron-bg-user {
                height: 125px;
            }



        }
    </style>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.1/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.1/dist/leaflet.js" integrity="sha256-NDI0K41gVbWqfkkaHj15IzU7PtMoelkzyKp8TOaFQ3s=" crossorigin=""></script>
</head>

<body>


    @include('layouts.template-public.header')
    <div class="mt-2 p-5 bg-light text-dark rounded jumbotron-bg-user">

    </div>
    <div class="container p-2">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <table style="margin-top:-75px;width:100%" class="p-2 desktop">
                    <tr>
                        <td class="text-end ">

                            <img src="{{$req->img}}" class="rounded-circle img-utama">
                        </td>
                        <td class="align-middle">
                            <h1 class="ms-3 mb-1" style="margin-top:-30px">
                                {{$req->name}}
                            </h1>

                            <h5 class="ms-3 text-danger" style="margin-top:-30px;display:inline">
                                {{$req->jenis_petugas}}
                            </h5>
                            </span class="ms-3"> | <span class="ms-3"> +628XXXXXXXX </span>
                            <br>
                            <span class="ms-3">
                                user21xxx@email.com
                            </span>
                            <p class="ms-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, tempore.
                            </p>
                        </td>
                        <td>
                            <div class="float-end">
                                <form action="{{url('')}}/detail-petugas" method="get">
                                    <input type="hidden" name="name" value="males au">
                                    <input type="hidden" name="img" value="https://randomuser.me/api/portraits/men/2.jpg">
                                    <input type="hidden" name="jenis_petugas" value="Notaris">
                                </form>
                                <div class="row g-0 p-1 mt-5">
                                    <div class="col-12">
                                        <button onclick="return $($(this).parent()).find('form').submit()" class="btn btn-outline-dark pt-1 pb-1 mt-4 mb-0">
                                            <i class="fa fa-comment"></i>
                                            Hubungi
                                        </button>
                                    </div>
                                    <div class="col-12 mt-1">
                                        <div class="text-dark">
                                            <i class="fa ms-2 me-2 fa-facebook"></i>
                                            <i class="fa ms-2 me-2 fa-instagram"></i>
                                            <i class="fa ms-2 me-2 fa-twitter"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </td>
                    </tr>
                </table>
                <div class="mobile">
                    <img src="{{$req->img}}" style="margin-top:-60px;width:100px;height:100px;object-fit:cover" class="ms-2 rounded-circle">
                    <h1 class="ms-2 mb-1">
                        {{$req->name}}
                    </h1>

                    <p class="ms-2" style="display:inline">
                        #{{$req->jenis_petugas}}
                        </span> | <span> +628XXXXXXXX </span>
                        <br>
                        <span>
                            user21xxx@email.com
                        </span>

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, tempore.
                    </p>
                    <p class="ms-2">
                        <i class="fa me-3 fa-facebook"></i>
                        <i class="fa me-3 fa-instagram"></i>
                        <i class="fa me-3 fa-twitter"></i>
                        | <i class="fa fa-share ms-1"></i>
                    </p>
                </div>
            </div>
        </div>
    </div>

    @include('sengketa.detail_data_diri')


    <div class="container">

        <div class="row justify-content-center mb-2">
            <div class="col-lg-12 mt-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h3 class="display-5" style="font-size:30px">
                            Hubungi {{$req->name}}
                        </h3>
                        <div class="card card-body border-0 rounded-1 p-5" style="background-color:#F2F2F2">
                            <div class="row">
                                <div class="col-lg-4 text-center">
                                    <img src="{{$req->img}}" alt="" srcset="" class="rounded-circle img-thumbnail" style="width:150px;height:auto;object-fit:cover">
                                    <br>
                                    <b>
                                        {{$req->name}}
                                    </b><br>
                                    <span class="text-danger">
                                        #{{$req->jenis_petugas}}
                                    </span> | <span> +628XXXXXXXX </span>
                                    <br>
                                    <span>
                                        user21xxx@email.com
                                    </span>

                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, tempore.
                                    </p>
                                </div>
                                <div class="col-lg">
                                    <form action="{{url('')}}/email-subjek">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Nama</label>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Masukan Nama Anda" value="{{Auth::check() == false ? '':Auth::user()->name}}" {{Auth::check() == false ? '':"disabled"}}>
                                        </div>
                                        <div class="mb-3">
                                            <label for="Alamat" class="form-label">Alamat</label>
                                            <input type="text" class="form-control" name="alamat" id="Alamat" placeholder="Masukan Alamat Anda" value="{{Auth::check() == false ? '':Auth::user()->address}}" {{Auth::check() == false ? '':"disabled"}}>
                                        </div>
                                        <div class="mb-3">
                                            <label for="no_hp" class="form-label">Nomor HP</label>
                                            <input type="number" class="form-control" name="no_hp" id="no_hp" placeholder="Masukan Nomor HP Anda" value="{{Auth::check() == false ? '':Auth::user()->phone}}" {{Auth::check() == false ? '':"disabled"}}>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Masukan Email Anda" value="{{Auth::check() == false ? '':Auth::user()->email}}" {{Auth::check() == false ? '':"disabled"}}>
                                            <div id="emailHelp" class="form-text">Email yang anda masukan harus terdaftar di Website ini terlebih dahulu</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="subjek" class="form-label">subjek</label>
                                            <textarea class="form-control" name="subjek" id="subjek" aria-describedby="subjekHelp" placeholder="Masukan subjek Anda" value="" cols="30" rows="10"></textarea>
                                        </div>
                                        <small class="text-danger">**Belum punya akun? daftar <a href="{{url('')}}/register-jual-beli-lahan" class="text-primary text-decoration-none">disini</a></small>
                                        <br>
                                        <button type="submit" class="btn btn-success mt-2">Hubungi</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>

    <style>
        .store {
            width: 171px;
        }

        .appstore {
            width: 140px;
            margin-left: 10px
        }

        @media screen and (min-width: 768px) {
            .store {
                width: 216px;
            }

            .appstore {
                width: 185px;
            }
        }
    </style>

    <hr>

    <div class="row justify-content-center">
        <div class="col-11 mt-2 text-center">
            <b>Download Aplikasinya!</b>
            <p class="fw-lighter mb-0">Platform Seputar Tanah No. 1 di Indonesia</p>
        </div>
        <div class="col-11 mb-2 text-center">
            <a href="#"><img src="{{asset('/')}}uploads/google-play-badge.png" class="store" alt=""></a>
            <a href="#"><img src="{{asset('/')}}uploads/appstore-badge.png" class="appstore" alt=""></a>
        </div>
    </div>

    <hr>



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
                <button class="btn p-0" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="dropdownMenuButton1">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x " style="text-shadow: -3px 3px 5px #bbbbbb;"></i>
                        <i class="fa-solid fa-share fa-stack-1x fa-inverse"></i>
                    </span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="https://twitter.com/share?ref_src=twsrc%5Etfw" data-show-count="false"><i class="fa-brands fa-twitter"></i> Tweet</a></li>
                    <li>
                        <a target="_blank" onClick='window.open("https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fserver.sengketatanah.id%2F&amp;src=sdkpreparse","Ratting","width=550,height=550,left=150,top=200,toolbar=0,status=0,");' href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fserver.sengketatanah.id%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore dropdown-item"><i class="fa-brands fa-facebook"></i>
                            Facebook</a>
                    </li>
                </ul>
            </div>

            <a href="" class=""></a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

        </div>
    </div>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v14.0" nonce="Ee2Zutm6"></script>
    <div class="row mt-4">
        <div class="card-body bg-dark text-white text-center  bg-card-dark-mode">
            <p></p>
            <img src="{{asset('/uploads/sengketa-logo.png')}}" style="width:250px" class="img-fluid">
            <p style="font-size:12px" class="card-title">Copyright © Sengketa Tanah 2022. All Rights Reserved
            </p>
            <hr>
            <p style="font-size:14px" class="card-title pb-3">Sovereign Plaza. Lt. 19 <br> Jl. TB Simatupang No.
                36,
                TB Simatupang, Jakarta Selatan</p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>



    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> -->

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/b-2.2.3/datatables.min.js">
    </script>
    <script>
        $('#jenis_objek').on('change', function() {
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

        $('#btnLawyer').on('click', function() {
            $('#dataSponsor').hide()
            $('#dataPemerintah').hide()
            $('#dataLawyer').show()

        });
        $('#btnSponsor').on('click', function() {
            $('#dataSponsor').show()
            $('#dataLawyer').hide()
            $('#dataPemerintah').hide()
        });
        $('#btnPemerintah').on('click', function() {
            $('#dataLawyer').hide()
            $('#dataSponsor').hide()
            $('#dataPemerintah').show()
        });

        $(document).ready(function() {
            $(".tab").click(function() {
                $(".tab").removeClass("active");
                // $(".tab").addClass("active"); // instead of this do the below 
                $(this).addClass("active");
            });
        });

        $(document).ready(function() {
            $('#myTable').DataTable();
        });

        $('#btnLawyer').on('click', function() {
            $('#titleSponsor').hide()
            $('#titlePemerintah').hide()
            $('#titleLawyer').show()

        });

        $('#btnSponsor').on('click', function() {
            $('#titleSponsor').show()
            $('#titleLawyer').hide()
            $('#titlePemerintah').hide()
        });
        $('#btnPemerintah').on('click', function() {
            $('#titleLawyer').hide()
            $('#titleSponsor').hide()
            $('#titlePemerintah').show()
        });

        $(function() {
            $('#searchlink').on('click', function(e) {
                $(this).toggleClass('open');
            });
        });



        $(function() {
            var hidestuff = function() {
                $(".jaminan_berupa").hide();
            }

            $("select[name='jaminan']").change(function() {
                hidestuff();

                var value = $(this).val();
                if (value == "ada") {
                    $(".jaminan_berupa").show();
                }
            });
            hidestuff();
        });

        $(function() {
            var hidestuff = function() {
                $(".pengelolaan-platform, .pengelolaan-sendiri").hide();
            }

            $("select[name='pengelolaan_dana']").change(function() {
                hidestuff();

                var value = $(this).val();
                if (value == "platform") {
                    $(".pengelolaan-platform").show();
                }
                if (value == "sendiri") {
                    $(".pengelolaan-sendiri").show();
                }
            });
            hidestuff();
        });

        $(function() {
            var hidestuff = function() {
                $(".law-firm").hide();
            }

            $("select[name='mewakili']").change(function() {
                hidestuff();

                var value = $(this).val();
                if (value == "law-firm") {
                    $(".law-firm").show();
                }
            });
            hidestuff();
        });


        $(document).ready(function() {
            $("#carouselExampleControls").swiperight(function() {
                $(this).carousel('prev');
            });
            $("#carouselExampleControls").swipeleft(function() {
                $(this).carousel('next');
            });
        });

        $(function() {
            var hidestuff = function() {
                $(".sponsor, .pengacara, .pemerintah").hide();
            }

            $("select[name='jenis_pertolongan']").change(function() {
                hidestuff();

                var value = $(this).val();
                if (value == "sponsor") {
                    $(".sponsor").show();
                }
                if (value == "pengacara") {
                    $(".pengacara").show();
                }
                if (value == "pemerintah") {
                    $(".pemerintah").show();
                }
            });
            hidestuff();
        });
    </script>
       @include('layouts.dark_mode')

</body>

</html>