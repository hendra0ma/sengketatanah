<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sengketa Tanah</title>
    <link rel="icon" type="image/x-icon" href="{{asset('')}}uploads/sengketa-logo_pas.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs5/dt-1.12.1/b-2.2.3/datatables.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <link rel="stylesheet" type="text/css"
        href="{{asset('')}}css/card.scss" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <style>
        html,
        body {
            background-color: #eee;
            width: 100%;
            margin: 0px;
            padding: 0px;
            overflow-x: hidden;
            font-family: 'Poppins', sans-serif;
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

        .text-brown {
            color: #61481C !important;
        }

        .text-light-brown {
            color: #BF9742 !important;
        }

        .text-lighter-brown {
            color: #E6B325 !important;
        }

        .card {
            border-radius: 15px;
        }

        .card.card-main {
            background-color: #E6B325;
        }

        .card.kriteria {
            background-color: #BF9742;
        }

        .card.card-child {
            position: relative;
            width: 90%;
            bottom: 45px;
            margin-left: auto;
            margin-right: auto;
        }

        .text-child-item {
            font-size: 12px
        }

        .image-collab {
            width: 230px;
        }

        @media (max-width: 1199.98px) {
            .card.card-child {
                width: 95%;
            }
        }

        @media (max-width: 991.98px) {
            .col-lg.jual-sekarang {
                margin-top: 5px;
                margin-bottom: 5px;
                text-align: start !important;
            }

            .card.card-child {
                position: relative;
                width: 50%;
                bottom: 45px;
                left: 0px;
                margin-left: auto;
                margin-right: auto;
            }

            .image-collab {
                width: 200px;
            }
        }

        @media (max-width: 767.98px) {
            .col-lg.jual-sekarang {
                margin-top: 5px;
                margin-bottom: 5px;
                text-align: start !important;
            }

            .card.card-child {
                position: relative;
                width: 75%;
                bottom: 45px;
                left: 0px;
                margin-left: auto;
                margin-right: auto;
            }

            .card-main .card-body .p-5 {
                padding: 0 !important;
                padding-bottom: 3rem !important
            }

            .card-main .card-body .p-5 .col-md-7.mt-5 {
                margin-top: 1.5rem !important;
            }
        }

        @media (max-width: 320.98px) {
            .image-collab {
                width: 180px;
            }
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
        
        @media (max-width: 1000px) {
            .mobile {
                display: block;
            }

            .desktop {
                display: none;
            }
        }

    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold fs-4" href="{{url('/')}}">
                <img src="{{asset('/uploads/sengketa-logo_pas.png')}}" style="width:30px"
                    class="img-fluid me-2">SENGKETA TANAH</a>
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
                        <a class="nav-link" href="#">Produk</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{url('')}}/bid-sengketa">Bid Sengketa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Podcast Sengketa</a>
                    </li> -->
                    <li class="nav-item me-2">
                        <a class="nav-link" href="{{url('/')}}/tentang">Tentang Kami</a>
                    </li>

                    <div class="vr vr-none me-2"></div>
                    <hr class="hr-none">

                    <li class="nav-item me-1 ms-1">
                        <a class="nav-link btn btn-outline-brown rounded-3 login-mb" href="{{url('/')}}/login">Login</a>
                    </li>
                    <li class="nav-item me-1 ms-1">
                        <a class="nav-link btn btn-brown text-white rounded-3" href="{{url('/')}}/register">Register</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="container mt-5 mb-5">

        <div class="card border-0 card-main">
            <div class="card-body">
                <div class="row p-5 g-0">
                    <div class="col-md-12 text-center mb-3">
                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png" style="width: 100px" alt="">
                    </div>
                    <div class="col-md-12 text-center">
                        <h1 style="font-weight: 700">Solusi Tepat dan Terpercaya Untuk Membantu Masalah Pertanahan Anda
                        </h1>
                    </div>
                    <div class="col-md-12 mt-4">
                        <p class="mb-0">Kami mempertemukan korban sengketa tanah atau korban mafia tanah dengan Sponsor,
                            Kantor Hukum, dan Pemerintah untuk menuntaskan masalah persengketaan tanah yang anda alami.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card border-0 text-white card-child bg-brown">
            <div class="card-body">
                <div class="row align-items-center px-2 text-child-item">
                    <div class="col-lg-12">
                        <h5>Apa Yang Anda Dapatkan di Sengketatanah.id</h5>
                    </div>
                    <div class="col-lg jual-sekarang mt-1">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="fa-regular fa-circle-check"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                Bantuan pendanaan dari sponsor
                            </div>
                        </div>
                    </div>
                    <div class="col-lg jual-sekarang">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="fa-regular fa-circle-check"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                Bantuan pengacara dan kantor hukum
                            </div>
                        </div>
                    </div>
                    <div class="col-lg jual-sekarang">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="fa-regular fa-circle-check"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                Bantuan advokasi pada pemerintah
                            </div>
                        </div>
                    </div>
                    <div class="col-lg jual-sekarang">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="fa-regular fa-circle-check"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                Bantuan konsultasi dan mediasi
                            </div>
                        </div>
                    </div>
                    <div class="col-lg jual-sekarang">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="fa-regular fa-circle-check"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                Bantuan negoisasi dan penyelesaian
                            </div>
                        </div>
                    </div>
                    <div class="col-lg jual-sekarang">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="fa-regular fa-circle-check"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                Bantuan wawancara Podcast
                            </div>
                        </div>
                    </div>
                    <div class="col-lg jual-sekarang text-end"><button
                            class="btn btn-light text-brown rounded-3 fw-bold w-100">Daftar Sekarang</button></div>
                </div>
            </div>
        </div>

        <div class="row pt-5 mb-5">
            <div class="col-12 text-center">
                <h3 class="text-brown" style="font-weight: 700">Bekerjasama Dengan:</h3>
                <img class="mt-4 image-collab"
                    src="https://upload.wikimedia.org/wikipedia/commons/5/51/Logo_BPN-KemenATR_%282017%29.png" alt="">
            </div>
        </div>

        <div class="row text-center pt-4 mb-5">
            <h2 class="fw-bold text-brown">"Jika Anda Membutuhkan Bantuan Pendanaan Untuk Menyelesaikan Masalah Sengketa
                Pertanahan, Ini Adalah Aplikasi yang Tepat"
            </h2>
        </div>

        <style>
            .cards {
                position: relative;
                height: 275px;
                margin: 0 auto;
                background: #fff;
                border-radius: 15px;
                margin-top: 10px;
                margin-bottom: 10px;
            }

            .cards .face {
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .cards .face1 {
                box-sizing: border-box;
                padding: 20px;
                align-items: start;
            }

            .cards h2 {
                margin: 0;
                padding: 0;
            }

            .cards .face2 {
                transition: 0.5s;
            }

            .cards h2 {
                margin: 0;
                padding: 0;
                color: #fff;
                text-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
                z-index: 10;
                transition: 0.5s ease;
                font-size: 1.25em;
            }

            .cards svg {
                margin-right: 5%;
                padding: 0;
                color: #fff;
                text-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
                z-index: 10;
                transition: 0.5s ease;
            }

            .cards:hover .face.face2 {
                height: 60px;
            }

            .cards:hover .face.face2 h2 {
                font-size: 1em;
                transition: 0.5s ease;
            }

            .cards:hover .face.face2 svg {
                width: 35px;
                margin-right: 5px;
                transition: 0.5s ease;
            }

            .cards .face.face2 {
                background: #61481c;
                border-radius: 15px;
            }
        </style>

        <div class="pt-5 mb-5 justify-content-center row desktop">
            <div class="col-md-12 text-center">
                <h3 class="text-brown" style="font-weight: 700">4 Roles Dalam Penyelesaian Sengketatanah.id</h3>
            </div>


            <div class="col-md-3">
                <div class="cards">
                    <div class="face face1">
                        <div class="content">
                            <span class="stars"></span>
                            <h2 class="java text-brown">Pemerintah</h2>
                            <p class="java">Kementerian ATR/BPN yang menyelenggarakan urusan di bidang
                            agraria/pertanahan dan tata ruang.</p>
                        </div>
                    </div>
                    <div class="face face2">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.com/svgjs" width="80px" x="0" y="0" viewBox="0 0 512.005 512.005"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <g>
                                    <g>
                                        <path
                                            d="M486.403,459.509v-8.533c-0.071-10.785-6.897-20.368-17.067-23.959v-10.174c-0.033-10.813-6.868-20.435-17.067-24.028
                                                			V261.67c10.199-3.592,17.033-13.214,17.067-24.028v-15.05l15.55-31.1l24.616-24.617c3.332-3.327,3.337-8.725,0.01-12.057
                                                			c-0.482-0.482-1.019-0.905-1.601-1.259L260.445,2.546c-2.727-1.667-6.157-1.667-8.883,0L4.095,153.559
                                                			c-4.022,2.448-5.299,7.693-2.851,11.715c0.354,0.582,0.777,1.12,1.259,1.601l24.616,24.617l15.55,31.1v15.05
                                                			c0.033,10.813,6.868,20.435,17.067,24.027v131.145c-10.199,3.592-17.033,13.214-17.067,24.028v10.174
                                                			c-10.17,3.591-16.996,13.174-17.067,23.959v8.533c-14.132,0.015-25.585,11.468-25.6,25.6v17.067
                                                			c-0.001,4.712,3.817,8.532,8.529,8.533c0.002,0,0.003,0,0.004,0H503.47c4.712,0.001,8.532-3.817,8.533-8.529
                                                			c0-0.001,0-0.003,0-0.004v-17.067C511.988,470.977,500.535,459.524,486.403,459.509z M452.27,237.642
                                                			c-0.005,4.711-3.822,8.529-8.533,8.533h-51.2c-4.711-0.005-8.529-3.822-8.533-8.533v-8.533h68.267V237.642z M213.337,392.815
                                                			V261.67c10.199-3.592,17.033-13.214,17.067-24.028v-8.533h51.2v8.533c0.033,10.813,6.868,20.435,17.067,24.027v131.145
                                                			c-10.199,3.592-17.033,13.214-17.067,24.028v8.533h-51.2v-8.533C230.37,406.029,223.535,396.407,213.337,392.815z M68.27,246.176
                                                			c-4.711-0.005-8.529-3.822-8.533-8.533v-8.533h68.267v8.533c-0.005,4.711-3.822,8.529-8.533,8.533H68.27z M110.936,263.242v128
                                                			H76.803v-128H110.936z M128.003,261.67c3.151-1.119,6.05-2.847,8.533-5.086c2.483,2.239,5.383,3.967,8.533,5.085v131.145
                                                			c-3.151,1.119-6.05,2.847-8.533,5.086c-2.483-2.239-5.383-3.967-8.533-5.086V261.67z M145.07,416.842
                                                			c0.005-4.711,3.823-8.529,8.533-8.533h51.2c4.711,0.005,8.529,3.822,8.533,8.533v8.533H145.07V416.842z M162.136,391.242v-128
                                                			h34.133v128H162.136z M204.803,246.176h-51.2c-4.711-0.005-8.529-3.822-8.533-8.533v-8.533h68.267v8.533
                                                			C213.332,242.353,209.514,246.171,204.803,246.176z M298.67,416.842c0.005-4.711,3.822-8.529,8.533-8.533h51.2
                                                			c4.711,0.005,8.529,3.822,8.533,8.533v8.533H298.67V416.842z M315.736,391.242v-128h34.133v128H315.736z M358.403,246.176h-51.2
                                                			c-4.711-0.005-8.529-3.822-8.533-8.533v-8.533h68.267v8.533C366.932,242.353,363.114,246.171,358.403,246.176z M366.936,261.67
                                                			c3.151-1.119,6.05-2.847,8.533-5.086c2.483,2.239,5.383,3.967,8.533,5.085v131.145c-3.151,1.119-6.05,2.847-8.533,5.086
                                                			c-2.483-2.239-5.383-3.967-8.533-5.086V261.67z M384.003,416.842c0.005-4.711,3.823-8.529,8.533-8.533h51.2
                                                			c4.711,0.005,8.529,3.822,8.533,8.533v8.533h-68.267V416.842z M401.07,391.242v-128h34.133v128H401.07z M35.403,175.642
                                                			l-13.167-13.167l233.767-142.65l233.767,142.65l-13.167,13.167l-216.125-133c-2.744-1.692-6.206-1.692-8.95,0L35.403,175.642z
                                                			 M447.72,177.909H64.286L256.003,59.93L447.72,177.909z M56.478,212.042l-8.533-17.067h416.117l-8.533,17.067H56.478z
                                                			 M59.736,416.842c0.005-4.711,3.822-8.529,8.533-8.533h51.2c4.711,0.005,8.529,3.822,8.533,8.533v8.533H59.736V416.842z
                                                			 M494.936,493.642H17.07v-8.533c0.005-4.711,3.822-8.529,8.533-8.533h179.2c4.713,0,8.533-3.82,8.533-8.533
                                                			s-3.821-8.533-8.533-8.533H42.67v-8.533c0.099-4.802,4.064-8.619,8.867-8.533H460.47c4.802-0.085,8.768,3.731,8.867,8.533v8.533
                                                			H307.203c-4.713,0-8.533,3.82-8.533,8.533s3.82,8.533,8.533,8.533h179.2c4.711,0.005,8.529,3.822,8.533,8.533V493.642z"
                                            fill="#fff" data-original="#000000" class=""></path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M256.003,88.309c-18.843,0.02-34.113,15.29-34.133,34.133c0,18.851,15.282,34.133,34.133,34.133
                                                			c18.851,0,34.133-15.282,34.133-34.133S274.854,88.309,256.003,88.309z M256.003,139.509c-9.426,0-17.067-7.641-17.067-17.067
                                                			s7.641-17.067,17.067-17.067c9.421,0.011,17.056,7.645,17.067,17.067C273.07,131.868,265.429,139.509,256.003,139.509z"
                                            fill="#fff" data-original="#000000" class=""></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <h2>Pemerintah</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="cards">
                    <div class="face face1">
                        <div class="content">
                            <span class="stars"></span>
                            <h2 class="java text-brown">Korban Sengketa</h2>
                            <p class="java">Korban adalah orang yang dirugikan, dirampas, atau terancam
                            kehilangan hak atas tanah yang dimilikinya.</p>
                        </div>
                    </div>
                    <div class="face face2">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.com/svgjs" width="80px" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <g>
                                    <path
                                        d="m175.839 464.936c-4.142 0-7.5 3.358-7.5 7.5v32.064c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-32.064c0-4.143-3.358-7.5-7.5-7.5z"
                                        fill="#fff" data-original="#000000"></path>
                                    <path
                                        d="m360.438 407.696-26.844-9.761 14.169-7.084c11.434-5.717 16.391-19.193 11.285-30.681-3.362-7.565-7.37-20.653-7.37-40.041v-48.097c0-43.917-35.729-79.645-79.645-79.645h-32.064c-43.917 0-79.645 35.729-79.645 79.645v48.097c0 19.388-4.008 32.476-7.37 40.041-5.106 11.488-.149 24.964 11.285 30.681l14.169 7.084-26.844 9.761c-18.734 6.812-31.321 24.782-31.321 44.716v52.088c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-52.088c0-13.649 8.619-25.955 21.447-30.619l16.32-5.935c5.733 9.989 13.151 18.781 22.106 26.176 1.398 1.154 3.089 1.717 4.771 1.717 2.161 0 4.305-.929 5.788-2.725 2.637-3.194 2.186-7.921-1.008-10.559-6.874-5.676-12.655-12.338-17.288-19.834l20.552-7.473c9.265-3.37 15.49-12.257 15.49-22.115v-13.191c9.782 5.019 20.851 7.871 32.581 7.871s22.799-2.852 32.581-7.871v13.191c0 9.858 6.225 18.746 15.49 22.115l20.568 7.479c-14.658 23.756-40.39 38.264-68.638 38.264-7.47 0-14.865-1.019-21.98-3.029-3.983-1.125-8.13 1.192-9.256 5.179-1.126 3.986 1.193 8.13 5.179 9.256 8.442 2.384 17.209 3.593 26.058 3.593 34.547 0 65.918-18.297 82.984-48.048l16.328 5.937c12.828 4.665 21.447 16.97 21.447 30.619v52.09c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-52.088c-.005-19.934-12.592-37.904-31.325-44.716zm-185.115-135.664c0-35.646 29-64.645 64.645-64.645h32.064c35.646 0 64.645 29 64.645 64.645v7.824c-11.109-1.625-32.237-6.998-47.59-24.629 4.009-3.042 7.977-6.225 11.874-9.565 3.145-2.696 3.509-7.43.813-10.575-2.695-3.145-7.431-3.509-10.575-.813-42.447 36.383-95.03 54.103-115.877 60.085v-22.327zm33.096 109.013c0 3.574-2.257 6.797-5.616 8.019l-4.979 1.81-26.879-13.439c-4.174-2.087-6.096-7.099-4.286-11.173 5.748-12.934 8.663-28.455 8.663-46.133v-10.171c2.41-.639 5.489-1.497 9.131-2.596.9 19.933 9.984 37.762 23.965 50.215v23.468zm47.581-20.319c-31.225 0-56.629-25.404-56.629-56.629 0-.016 0-.662 0-1.616 20.705-7.29 49.442-19.527 77.462-38.475 10.848 12.948 23.999 20.587 35.796 25.089v15.002c0 31.225-25.404 56.629-56.629 56.629zm58.176 30.148-4.979-1.81c-3.359-1.222-5.617-4.444-5.617-8.019v-23.468c14.741-13.129 24.048-32.234 24.048-53.48v-10.578c3.446.736 6.514 1.208 9.048 1.509v25.101c0 17.678 2.915 33.199 8.663 46.133 1.811 4.073-.112 9.085-4.286 11.172z"
                                        fill="#fff" data-original="#000000"></path>
                                    <path
                                        d="m336.161 464.936c-4.142 0-7.5 3.358-7.5 7.5v32.064c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-32.064c0-4.143-3.358-7.5-7.5-7.5z"
                                        fill="#fff" data-original="#000000"></path>
                                    <path
                                        d="m256 304.613c-17.396 0-31.548 14.152-31.548 31.548 0 4.142 3.358 7.5 7.5 7.5h48.097c4.142 0 7.5-3.358 7.5-7.5-.001-17.396-14.153-31.548-31.549-31.548zm-14.749 24.048c2.739-5.366 8.322-9.048 14.749-9.048s12.01 3.682 14.749 9.048z"
                                        fill="#fff" data-original="#000000"></path>
                                    <path
                                        d="m491.233 203.114-37.745-13.726c-3.36-1.222-5.617-4.444-5.617-8.019v-10.181c10.234-9.057 16.032-21.77 16.032-35.43v-32.065c0-17.396-14.152-31.548-31.548-31.548h-32.064c-17.396 0-31.549 14.152-31.549 31.548v32.065c0 13.66 5.798 26.374 16.033 35.43v10.181c0 3.575-2.257 6.797-5.616 8.019l-16.033 5.83c-2.653.964-5.499.589-7.811-1.03s-3.637-4.166-3.637-6.988v-26.582c0-13.217-8.345-25.132-20.767-29.649l-37.746-13.726c-3.36-1.222-5.617-4.444-5.617-8.019v-10.181c10.234-9.057 16.032-21.771 16.032-35.431v-32.064c.001-17.396-14.152-31.548-31.548-31.548h-32.064c-17.396 0-31.548 14.152-31.548 31.548v32.064c0 13.66 5.798 26.374 16.032 35.431v10.181c0 3.575-2.257 6.797-5.617 8.019l-37.745 13.726c-12.421 4.517-20.767 16.432-20.767 29.649v26.582c0 2.822-1.326 5.37-3.637 6.988-2.312 1.62-5.159 1.995-7.811 1.03l-16.033-5.83c-3.359-1.222-5.616-4.444-5.616-8.019v-10.181c10.235-9.057 16.033-21.77 16.033-35.43v-32.065c0-17.396-14.153-31.548-31.549-31.548h-32.065c-17.396 0-31.548 14.152-31.548 31.548v32.065c0 13.66 5.798 26.374 16.032 35.43v10.181c0 3.575-2.257 6.797-5.616 8.019l-37.746 13.726c-12.421 4.517-20.767 16.432-20.767 29.649v119.43c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-119.43c0-6.933 4.377-13.183 10.893-15.552l37.746-13.726c9.265-3.37 15.49-12.257 15.49-22.116v-13.729c0-2.351-1.103-4.566-2.978-5.983-8.296-6.27-13.054-15.709-13.054-25.899v-32.065c0-9.125 7.423-16.548 16.548-16.548h32.064c9.125 0 16.549 7.423 16.549 16.548v32.065c0 10.19-4.758 19.63-13.055 25.899-1.875 1.417-2.978 3.632-2.978 5.983v13.729c0 9.859 6.225 18.747 15.49 22.115l16.033 5.83c7.207 2.621 15.26 1.559 21.542-2.841s10.032-11.605 10.032-19.274v-26.582c0-6.933 4.377-13.183 10.893-15.552l37.745-13.726c9.266-3.369 15.491-12.256 15.491-22.116v-13.727c0-2.351-1.103-4.566-2.978-5.983-8.296-6.27-13.054-15.71-13.054-25.9v-32.065c0-9.125 7.423-16.548 16.548-16.548h32.064c9.125 0 16.548 7.423 16.548 16.548v32.064c0 10.19-4.758 19.63-13.054 25.9-1.875 1.417-2.978 3.632-2.978 5.983v13.728c0 9.859 6.225 18.747 15.491 22.116l37.745 13.726c6.516 2.37 10.893 8.62 10.893 15.552v26.583c0 7.669 3.75 14.875 10.032 19.274 6.281 4.4 14.335 5.462 21.542 2.841l16.033-5.83c9.265-3.369 15.49-12.256 15.49-22.115v-13.729c0-2.351-1.103-4.566-2.978-5.983-8.296-6.27-13.055-15.709-13.055-25.899v-32.065c0-9.125 7.424-16.548 16.549-16.548h32.064c9.125 0 16.548 7.423 16.548 16.548v32.065c0 10.19-4.758 19.63-13.054 25.899-1.875 1.417-2.978 3.632-2.978 5.983v13.729c0 9.859 6.225 18.746 15.49 22.116l37.746 13.726c6.516 2.37 10.893 8.62 10.893 15.552v119.43c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-119.43c.002-13.218-8.344-25.133-20.765-29.65z"
                                        fill="#fff" data-original="#000000"></path>
                                </g>
                            </g>
                        </svg>
                        <h2 style="font-size: 1em">Korban Sengketa</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="cards">
                    <div class="face face1">
                        <div class="content">
                            <span class="stars"></span>
                            <h2 class="java text-brown">Sponsor</h2>
                            <p class="java">Sponsor adalah orang/badan usaha/kelompok yang membiayai urusan
                            hukum korban sengketa tanah.</p>
                        </div>
                    </div>
                    <div class="face face2">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.com/svgjs" width="80px" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <g>
                                    <g>
                                        <path
                                            d="M451.34,306.002c-14.207-6.71-29.421-10.112-45.221-10.112c-18.045,0-35.047,4.541-49.93,12.532    c-22.999-19.746-52.376-34.487-85.162-42.901c0.799-0.508,1.603-1.008,2.392-1.535c26.329-17.56,43.831-43.027,49.007-70.326    c10.493-2.812,19.633-10.017,25.367-20.347c7.535-13.575,7.768-29.756,0.607-42.228c-1.796-3.128-5.128-5.057-8.733-5.057    c-0.004,0-0.007,0-0.011,0l-15.026,0.017c0.913-34.59-8.875-63.992-28.587-85.522C275.084,17.63,243.078,4.5,208.233,4.5    c-30.285,0-60.269,9.984-82.263,27.393c-24.876,19.689-38.575,47.928-38.575,79.512v14.652H72.868    c-3.604,0-6.934,1.926-8.731,5.051c-7.342,12.771-7.197,29.202,0.379,42.88c5.504,9.938,14.308,16.896,24.451,19.671    c4.145,22.188,16.413,42.975,35.579,59.787c5.07,4.448,10.49,8.473,16.168,12.049c-18.658,4.567-35.895,10.939-51.48,19.076    c-4.931,2.575-6.841,8.658-4.267,13.588c1.797,3.442,5.305,5.413,8.936,5.413c1.57,0,3.164-0.369,4.652-1.146    c19.831-10.354,42.742-17.604,68.183-21.613l12.719,34.655L159.27,420.453c-0.342,1.777-0.198,3.613,0.415,5.316l7.37,20.454    c-30.184-1.671-59.828-5.431-88.111-11.164v-39.665c0-5.562-4.509-10.07-10.071-10.07c-5.562,0-10.071,4.509-10.071,10.07v35.198    c-13.128-3.173-25.907-6.778-38.241-10.808c2.007-25.811,9.507-48.782,22.335-68.376c3.046-4.654,1.744-10.896-2.909-13.942    c-4.652-3.045-10.894-1.744-13.942,2.909C9.952,364.954,1.192,393.937,0.007,426.52c-0.161,4.428,2.592,8.441,6.78,9.886    c52.297,18.042,112.645,28.631,174.517,30.622c0.013,0,0.026,0,0.039,0c7.434,0.231,14.96,0.348,22.371,0.348l2.42-0.004    l2.489,0.004c7.411,0,14.938-0.117,22.373-0.348c0.012,0,0.023,0,0.036,0c29.178-0.937,58.006-3.79,85.827-8.439    c9.516,14.916,22.789,27.472,38.954,36.199c15.357,8.317,32.753,12.712,50.307,12.712C464.503,507.5,512,460.03,512,401.682    C512,360.959,488.19,323.402,451.34,306.002z M215.432,304.556h-18.525l-7.654-20.857c5.456,0.822,10.938,1.262,16.398,1.296    c0.228,0.001,0.454,0.002,0.681,0.002c5.558,0,11.164-0.445,16.758-1.299L215.432,304.556z M330.182,163.537    c-0.979,1.764-2.977,4.792-6.146,7.272v-24.622l8.862-0.01C334.17,151.666,333.245,158.019,330.182,163.537z M107.536,111.405    c0-56.355,51.881-86.763,100.697-86.763c29.21,0,55.801,10.746,72.955,29.482c16.193,17.686,24.169,42.421,23.292,71.933h-76.378    c-35.146,0-62.629-10.452-84.023-31.952c-1.929-1.938-4.512-2.967-7.142-2.967c-1.31,0-2.632,0.256-3.889,0.783    c-3.779,1.583-6.222,5.298-6.179,9.395c0.087,8.214-1.875,14.405-5.83,18.403c-3.779,3.819-9.14,5.437-13.503,6.102V111.405z     M82.136,164.23c-3.14-5.668-4.007-12.286-2.56-18.031h7.818v24.445C84.704,168.398,82.998,165.787,82.136,164.23z     M107.536,176.795v-30.684c8.208-0.806,19.306-3.619,27.821-12.226c3.722-3.761,6.561-8.208,8.504-13.307    c22.914,17.211,50.652,25.62,84.241,25.62h75.793v30.596c0,2.436-0.133,4.869-0.388,7.292c-0.005,0.063-0.013,0.124-0.017,0.187    c-2.601,24.079-17.606,47.188-41.249,62.957c-17.048,11.376-36.878,17.624-55.906,17.624c-0.185,0-0.372-0.001-0.557-0.002    c-9.711-0.061-19.259-1.609-28.358-4.387c-0.143-0.063-0.287-0.12-0.432-0.175c-0.001-0.001-0.003-0.001-0.004-0.002    c-0.278-0.107-0.56-0.2-0.848-0.282c-0.039-0.011-0.076-0.023-0.114-0.034c-0.211-0.058-0.424-0.105-0.639-0.149    C137.279,247.332,107.536,213.268,107.536,176.795z M206.134,447.231l-2.42,0.004c-4.949,0-9.953-0.054-14.943-0.16l-9.199-25.532    l18.622-96.845h15.95l18.622,96.845l-9.199,25.532c-4.991,0.107-9.994,0.16-14.943,0.16L206.134,447.231z M245.282,446.225    l7.371-20.456c0.613-1.702,0.757-3.539,0.415-5.316L232.88,315.471l12.74-34.7c35.929,5.842,68.351,19.576,93.135,39.368    c-23.493,19.42-38.487,48.764-38.487,81.543c0,13.245,2.469,26.11,7.069,38.054C287.091,442.898,266.316,445.067,245.282,446.225z     M406.119,487.359c-14.214,0-28.294-3.556-40.727-10.289c-14.794-7.987-26.599-19.929-34.397-34.115    c-0.04-0.078-0.081-0.154-0.122-0.231c-6.749-12.364-10.464-26.418-10.464-41.042c0-47.228,38.45-85.65,85.71-85.65    c12.802,0,25.122,2.753,36.62,8.184c29.839,14.089,49.12,44.498,49.12,77.467C491.859,448.924,453.396,487.359,406.119,487.359z"
                                            fill="#fff" data-original="#000000" class=""></path>
                                        <path
                                            d="M59.757,326.823c1.915,0,3.852-0.546,5.566-1.686l0.17-0.113c4.632-3.079,5.891-9.33,2.812-13.962    c-3.079-4.632-9.329-5.891-13.962-2.811l-0.17,0.113c-4.632,3.078-5.891,9.33-2.812,13.962    C53.3,325.243,56.497,326.823,59.757,326.823z"
                                            fill="#fff" data-original="#000000" class=""></path>
                                    </g>
                                    <g>
                                        <path
                                            d="M440.039,417.965c0,8.382-2.408,15.094-7.254,20.135c-4.817,5.041-10.684,8.383-17.569,9.996v9.488v0.82    c0,5.239-4.449,9.488-9.663,9.488c-5.214,0-9.493-4.249-9.493-9.488v-10.224c-4.279-0.99-8.162-2.576-11.619-4.758    c-3.542-2.266-6.007-4.247-7.424-5.975l-2.068-2.72c-8.785-11.469,5.667-23.703,14.083-14.867c1.02,1.047,2.097,2.351,3.344,3.71    c3.514,3.909,8.672,4.53,12.865,4.53c7.935,0,11.93-3.256,11.93-9.825c0-2.351-1.53-4.164-4.534-5.466    c-3.004-1.274-6.66-2.435-10.938-3.456c-4.309-1.019-8.616-2.406-12.894-4.106c-4.307-1.727-7.962-4.673-10.966-8.865    c-3.004-4.191-4.506-9.515-4.506-15.944c0-6.457,2.068-12.205,6.121-17.388c3.996-5.126,9.776-8.608,16.776-9.968v-2.18v-10.819    c0-5.21,4.279-9.487,9.493-9.487c5.243,0,9.493,4.277,9.493,9.487v3.993v9.147c3.004,0.652,5.753,1.558,8.218,2.747    c2.494,1.161,4.194,2.124,5.158,2.889l1.473,1.274c12.469,9.346,0.425,25.913-10.343,16.85    c-7.283-6.117-23.832-7.476-23.832,3.767c0,2.38,1.105,4.277,3.287,5.722c2.211,1.443,4.931,2.436,8.162,2.917    c3.202,0.482,6.745,1.274,10.627,2.407c3.854,1.133,7.424,2.435,10.627,3.937c3.23,1.501,5.95,4.164,8.161,7.987    C438.934,407.515,440.039,412.274,440.039,417.965L440.039,417.965z"
                                            fill="#fff" data-original="#000000" class=""></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <h2>Sponsor</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="cards">
                    <div class="face face1">
                        <div class="content">
                            <span class="stars"></span>
                            <h2 class="java text-brown">Pengacara</h2>
                            <p class="java">Pengacara adalah seorang pribadi atau badan hukum (Law Firm) yang
                            menangani persoalan sengketa tanah.</p>
                        </div>
                    </div>
                    <div class="face face2">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.com/svgjs" width="80px" x="0" y="0" viewBox="0 0 16.933333 16.933334"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <g id="layer1" transform="translate(0 -280.067)">
                                    <path id="path3778"
                                        d="m6.3505153 280.59583c-1.7503696 0-3.175516 1.42566-3.175516 3.17603 0 .10133.00468.20143.011377.30282.00299.37309.5718148.33688.5276162-.0336-.00602-.0935-.00983-.18294-.00983-.26923 0-1.46438 1.1819704-2.64635 2.6463493-2.64635 1.464392 0 2.6442826 1.18196 2.6442826 2.64635 0 .32707-.04469.68442-.1286719 1.0542-.057317.006-.1152605.0165-.1710505.0341-.099677-.32543-.4029789-.56121-.7586107-.56121-.4443201 0-.7927155-.3484-.7927155-.79272.00212-.14846-.1192239-.26935-.2676842-.26768-.1461691.002-.2631334.12151-.2614824.26768 0 .44431-.3489326.79272-.7932341.79272h-1.0588458c-.3556212 0-.6568599.24198-.7565443.56741-.1549612-.0488-.3201458-.0538-.4697386-.0145-.3226488.0848-.6117775.37055-.6247659.76636 0 .76437.5560166 1.26277 1.1901064 1.31981.1338342.38462.3643471.71838.6609424.98496v.6103c-.0005292 0-.00106 0-.00159 0-.069704.00055-.1363715.0286-.1855179.078l-.5296826.52968c-.068916.069-.094332.17022-.066146.26355l1.6986038 5.51801-1.9502702-2.48202.2330609-.93276c.022437-.0902-.00402-.18548-.069763-.25115l-.689364-.68936.2547647-1.08675c.038931-.16595-.086897-.32488-.257347-.32505-.021431 0-.042767.003-.063563.008-1.5004493.37088-2.60651093 1.72485-2.60652143 3.33882v3.70416c.0000158.14612.1184645.26457.2645833.26459h9.78958613c.357801.005.357801-.53423 0-.52917h-3.6886651l2.5740045-3.27629c.05041-.0642.06833-.14814.04858-.22737l-.22841-.91312.687814-.68782c.06247-.0625.08961-.15207.07235-.23874l-.1503786-.75913c.4478306.19105.8492966.50201 1.1518656.9002.213921.27876.632916-.0396.421683-.32039-.462968-.60926-1.090147-1.03863-1.8598356-1.22887-.188412-.0466-.361244.11874-.322977.30903l.212905 1.06402-.6934967.69349c-.065733.0657-.092213.16099-.069763.25115l.2330607.93276-1.950786 2.48305 1.6986039-5.51904c.028054-.0934.00238-.1947-.066662-.26355l-.5291666-.52968c-.049739-.0498-.1172396-.0776-.187587-.0775v-.60978c.296926-.26674.5276612-.59876.6614584-.98392.6430033-.0484 1.1921753-.5576 1.1921753-1.32188-.01-.30481-.184232-.54196-.41031-.67489.09084-.39966.144695-.79619.144695-1.17151 0-1.75037-1.4235881-3.17603-3.1739682-3.17603zm.5286507 3.70468c.241382.32393.6237975.52761 1.0572988.52762.1511803 0 .2656179.11497.2656179.26613v1.05833c0 1.03064-.8209254 1.85157-1.8515674 1.85157-1.0306183 0-1.8536339-.82093-1.8536339-1.85157v-1.05833c0-.15116.1144667-.26613.2656179-.26613h1.0588493c.433615-.00001.8164459-.20354 1.0578174-.52762zm-2.9114512 1.1467v.70538c0 .0759.00442.15073.011377.2248-.2954973-.0875-.5364004-.33721-.5364004-.75035 0-.27487.4096332-.35526.5250234-.17983zm5.2911506.18191c0 .39291-.243186.6616-.5389852.7488.00699-.0742.011377-.14926.011377-.22531v-.70435c.1216422-.17945.5276082-.0945.5276082.18086zm-1.8494982 2.65462v.60927l-1.0588519.88263-1.0583334-.88212v-.60926c.3188309.1589.6779128.24908 1.0583334.24908.3808386 0 .7399628-.0904 1.0588519-.2496zm-2.6308474.87282 1.1384307.94826-.9575642.68368-.426847-1.38803zm3.1424431 0 .2459805.24391-.426847 1.38751-.9575642-.68368zm-5.0880619.66352-.1798347.76946c-.020981.0891.00561.18274.070281.24753l.6878135.68782-.2284095.91312c-.019764.0792-.00185.16314.048575.22738l2.5740043 3.27627h-2.8938801v-1.85157c.00299-.15001-.1197425-.27256-.2697505-.26975-.1461876.003-.2626731.12357-.2599347.26975v1.85157h-1.3234326v-3.43958c0-1.20111.7456223-2.23515 1.7745683-2.68201zm11.860258 2.10892-.912606 2.05362c-.01461.0339-.0217.0706-.02119.10749 0 0-.004.31878.159679.64647.163851.32769.506833.67541 1.162204.67541.655359 0 .997847-.34772 1.161684-.67541.163902-.32769.160198-.64647.160198-.64647.000529-.0369-.007-.0736-.02119-.10749l-.913125-2.05517c.148021-.0335.41819-.12826.59273-.29663.23609-.22774-.101716-.62523-.372586-.37517-.0975.09-.362262.18759-.608232.18759-.668071-.01-.959668-.45831-1.851568-.51677v-.54156c.0021-.14623-.114794-.26609-.260966-.26769v-.001c-.0021-.00001-.0031-.001-.0041-.001-.146179.002-.262607.12151-.260966.26768v.54157c-.8919.0585-1.183497.50709-1.851568.51677-.24598 0-.51069-.0975-.608232-.18759-.2708696-.25006-.6086866.14742-.3725856.37517.1745296.16837.4446976.26312.5927296.29662l-.9131246 2.05518c-.0146.0339-.02159.0706-.02119.10748 0 0-.004.31878.160197.64647.163841.32769.5063176.67542 1.1616876.67542.65536 0 .998352-.34773 1.162204-.67542.163848-.32769.159678-.64647.159678-.64647.000529-.0369-.007-.0736-.02119-.10748l-.912603-2.05363c.541028-.0859.858798-.48439 1.724959-.48472.869508.001 1.187143.40074 1.729091.48679zm-8.3431597-1.48261.414446.2961-.2909385.4377h-.2459805l-.291973-.4377zm-.8449098.60358.3023076.45372-.2211758 1.32343-.4625049-1.50482zm1.6908542.00053.3798199.2713-.4625022 1.50275-.2201439-1.31982zm-.8867696.65887h.08165l.3741367 2.24689-.4159964 1.35083-.4144433-1.34773zm6.6579939.25735c-.132321 0-.264068.0882-.264068.26458v3.70831h-1.071768c-.357222.0243-.332899.5379.01241.52916h1.320335v.002h1.324467c.345289.009.369612-.5049.01241-.52917h-1.071785v-3.7083c0-.17503-.129717-.26267-.260966-.26407v-.003zm-2.116151.39068.650089 1.46451h-1.299662zm4.230233.002.649573 1.46451h-1.299663zm-4.97644 1.99213h1.49293s-.0933.52916-.746207.52916c-.652949 0-.746723-.52916-.746723-.52916zm4.229714.002h1.492933s-.0938.52917-.746723.52917c-.652952 0-.74621-.52917-.74621-.52917z"
                                        font-variant-ligatures="normal" font-variant-position="normal" font-variant-caps="normal"
                                        font-variant-numeric="normal" font-variant-alternates="normal" font-feature-settings="normal"
                                        text-indent="0" text-align="start" text-decoration-line="none" text-decoration-style="solid"
                                        text-decoration-color="rgb(0,0,0)" text-transform="none" text-orientation="mixed" white-space="normal"
                                        shape-padding="0" isolation="auto" mix-blend-mode="normal" solid-color="rgb(0,0,0)" solid-opacity="1"
                                        vector-effect="none" fill="#fff" data-original="#000000" class=""></path>
                                </g>
                            </g>
                        </svg>
                        <br>
                        <h2>Pengacara</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-5 mb-5 justify-content-center row mobile">
            <div class="col-md-12 text-center">
                <h3 class="text-brown" style="font-weight: 700">4 Roles Dalam Penyelesaian Sengketatanah.id</h3>
            </div>

            <div class="col-md-3 mt-3">
                <div class="row justify-content-center align-items-center">
                    <div class="col-8 text-center">
                        <p class="rounded-pill bg-brown px-3 py-1" style="font-size: 16px">Pemerintah</p>
                        <p style="font-size: 14px">Kementerian ATR/BPN yang menyelenggarakan urusan di bidang
                        agraria/pertanahan dan tata ruang.</p>
                    </div>
                    <div class="col text-start">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.com/svgjs" width="95px" x="0" y="0" viewBox="0 0 512.005 512.005"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <g>
                                    <g>
                                        <path d="M486.403,459.509v-8.533c-0.071-10.785-6.897-20.368-17.067-23.959v-10.174c-0.033-10.813-6.868-20.435-17.067-24.028
                        			V261.67c10.199-3.592,17.033-13.214,17.067-24.028v-15.05l15.55-31.1l24.616-24.617c3.332-3.327,3.337-8.725,0.01-12.057
                        			c-0.482-0.482-1.019-0.905-1.601-1.259L260.445,2.546c-2.727-1.667-6.157-1.667-8.883,0L4.095,153.559
                        			c-4.022,2.448-5.299,7.693-2.851,11.715c0.354,0.582,0.777,1.12,1.259,1.601l24.616,24.617l15.55,31.1v15.05
                        			c0.033,10.813,6.868,20.435,17.067,24.027v131.145c-10.199,3.592-17.033,13.214-17.067,24.028v10.174
                        			c-10.17,3.591-16.996,13.174-17.067,23.959v8.533c-14.132,0.015-25.585,11.468-25.6,25.6v17.067
                        			c-0.001,4.712,3.817,8.532,8.529,8.533c0.002,0,0.003,0,0.004,0H503.47c4.712,0.001,8.532-3.817,8.533-8.529
                        			c0-0.001,0-0.003,0-0.004v-17.067C511.988,470.977,500.535,459.524,486.403,459.509z M452.27,237.642
                        			c-0.005,4.711-3.822,8.529-8.533,8.533h-51.2c-4.711-0.005-8.529-3.822-8.533-8.533v-8.533h68.267V237.642z M213.337,392.815
                        			V261.67c10.199-3.592,17.033-13.214,17.067-24.028v-8.533h51.2v8.533c0.033,10.813,6.868,20.435,17.067,24.027v131.145
                        			c-10.199,3.592-17.033,13.214-17.067,24.028v8.533h-51.2v-8.533C230.37,406.029,223.535,396.407,213.337,392.815z M68.27,246.176
                        			c-4.711-0.005-8.529-3.822-8.533-8.533v-8.533h68.267v8.533c-0.005,4.711-3.822,8.529-8.533,8.533H68.27z M110.936,263.242v128
                        			H76.803v-128H110.936z M128.003,261.67c3.151-1.119,6.05-2.847,8.533-5.086c2.483,2.239,5.383,3.967,8.533,5.085v131.145
                        			c-3.151,1.119-6.05,2.847-8.533,5.086c-2.483-2.239-5.383-3.967-8.533-5.086V261.67z M145.07,416.842
                        			c0.005-4.711,3.823-8.529,8.533-8.533h51.2c4.711,0.005,8.529,3.822,8.533,8.533v8.533H145.07V416.842z M162.136,391.242v-128
                        			h34.133v128H162.136z M204.803,246.176h-51.2c-4.711-0.005-8.529-3.822-8.533-8.533v-8.533h68.267v8.533
                        			C213.332,242.353,209.514,246.171,204.803,246.176z M298.67,416.842c0.005-4.711,3.822-8.529,8.533-8.533h51.2
                        			c4.711,0.005,8.529,3.822,8.533,8.533v8.533H298.67V416.842z M315.736,391.242v-128h34.133v128H315.736z M358.403,246.176h-51.2
                        			c-4.711-0.005-8.529-3.822-8.533-8.533v-8.533h68.267v8.533C366.932,242.353,363.114,246.171,358.403,246.176z M366.936,261.67
                        			c3.151-1.119,6.05-2.847,8.533-5.086c2.483,2.239,5.383,3.967,8.533,5.085v131.145c-3.151,1.119-6.05,2.847-8.533,5.086
                        			c-2.483-2.239-5.383-3.967-8.533-5.086V261.67z M384.003,416.842c0.005-4.711,3.823-8.529,8.533-8.533h51.2
                        			c4.711,0.005,8.529,3.822,8.533,8.533v8.533h-68.267V416.842z M401.07,391.242v-128h34.133v128H401.07z M35.403,175.642
                        			l-13.167-13.167l233.767-142.65l233.767,142.65l-13.167,13.167l-216.125-133c-2.744-1.692-6.206-1.692-8.95,0L35.403,175.642z
                        			 M447.72,177.909H64.286L256.003,59.93L447.72,177.909z M56.478,212.042l-8.533-17.067h416.117l-8.533,17.067H56.478z
                        			 M59.736,416.842c0.005-4.711,3.822-8.529,8.533-8.533h51.2c4.711,0.005,8.529,3.822,8.533,8.533v8.533H59.736V416.842z
                        			 M494.936,493.642H17.07v-8.533c0.005-4.711,3.822-8.529,8.533-8.533h179.2c4.713,0,8.533-3.82,8.533-8.533
                        			s-3.821-8.533-8.533-8.533H42.67v-8.533c0.099-4.802,4.064-8.619,8.867-8.533H460.47c4.802-0.085,8.768,3.731,8.867,8.533v8.533
                        			H307.203c-4.713,0-8.533,3.82-8.533,8.533s3.82,8.533,8.533,8.533h179.2c4.711,0.005,8.529,3.822,8.533,8.533V493.642z"
                                            fill="#61481c" data-original="#000000" class=""></path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M256.003,88.309c-18.843,0.02-34.113,15.29-34.133,34.133c0,18.851,15.282,34.133,34.133,34.133
                        			c18.851,0,34.133-15.282,34.133-34.133S274.854,88.309,256.003,88.309z M256.003,139.509c-9.426,0-17.067-7.641-17.067-17.067
                        			s7.641-17.067,17.067-17.067c9.421,0.011,17.056,7.645,17.067,17.067C273.07,131.868,265.429,139.509,256.003,139.509z"
                                            fill="#61481c" data-original="#000000" class=""></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mt-3">
                <div class="row justify-content-center align-items-center">
                    <div class="col text-end">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.com/svgjs" width="95px" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <g>
                                    <path
                                        d="m175.839 464.936c-4.142 0-7.5 3.358-7.5 7.5v32.064c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-32.064c0-4.143-3.358-7.5-7.5-7.5z"
                                        fill="#61481c" data-original="#000000"></path>
                                    <path
                                        d="m360.438 407.696-26.844-9.761 14.169-7.084c11.434-5.717 16.391-19.193 11.285-30.681-3.362-7.565-7.37-20.653-7.37-40.041v-48.097c0-43.917-35.729-79.645-79.645-79.645h-32.064c-43.917 0-79.645 35.729-79.645 79.645v48.097c0 19.388-4.008 32.476-7.37 40.041-5.106 11.488-.149 24.964 11.285 30.681l14.169 7.084-26.844 9.761c-18.734 6.812-31.321 24.782-31.321 44.716v52.088c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-52.088c0-13.649 8.619-25.955 21.447-30.619l16.32-5.935c5.733 9.989 13.151 18.781 22.106 26.176 1.398 1.154 3.089 1.717 4.771 1.717 2.161 0 4.305-.929 5.788-2.725 2.637-3.194 2.186-7.921-1.008-10.559-6.874-5.676-12.655-12.338-17.288-19.834l20.552-7.473c9.265-3.37 15.49-12.257 15.49-22.115v-13.191c9.782 5.019 20.851 7.871 32.581 7.871s22.799-2.852 32.581-7.871v13.191c0 9.858 6.225 18.746 15.49 22.115l20.568 7.479c-14.658 23.756-40.39 38.264-68.638 38.264-7.47 0-14.865-1.019-21.98-3.029-3.983-1.125-8.13 1.192-9.256 5.179-1.126 3.986 1.193 8.13 5.179 9.256 8.442 2.384 17.209 3.593 26.058 3.593 34.547 0 65.918-18.297 82.984-48.048l16.328 5.937c12.828 4.665 21.447 16.97 21.447 30.619v52.09c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-52.088c-.005-19.934-12.592-37.904-31.325-44.716zm-185.115-135.664c0-35.646 29-64.645 64.645-64.645h32.064c35.646 0 64.645 29 64.645 64.645v7.824c-11.109-1.625-32.237-6.998-47.59-24.629 4.009-3.042 7.977-6.225 11.874-9.565 3.145-2.696 3.509-7.43.813-10.575-2.695-3.145-7.431-3.509-10.575-.813-42.447 36.383-95.03 54.103-115.877 60.085v-22.327zm33.096 109.013c0 3.574-2.257 6.797-5.616 8.019l-4.979 1.81-26.879-13.439c-4.174-2.087-6.096-7.099-4.286-11.173 5.748-12.934 8.663-28.455 8.663-46.133v-10.171c2.41-.639 5.489-1.497 9.131-2.596.9 19.933 9.984 37.762 23.965 50.215v23.468zm47.581-20.319c-31.225 0-56.629-25.404-56.629-56.629 0-.016 0-.662 0-1.616 20.705-7.29 49.442-19.527 77.462-38.475 10.848 12.948 23.999 20.587 35.796 25.089v15.002c0 31.225-25.404 56.629-56.629 56.629zm58.176 30.148-4.979-1.81c-3.359-1.222-5.617-4.444-5.617-8.019v-23.468c14.741-13.129 24.048-32.234 24.048-53.48v-10.578c3.446.736 6.514 1.208 9.048 1.509v25.101c0 17.678 2.915 33.199 8.663 46.133 1.811 4.073-.112 9.085-4.286 11.172z"
                                        fill="#61481c" data-original="#000000"></path>
                                    <path
                                        d="m336.161 464.936c-4.142 0-7.5 3.358-7.5 7.5v32.064c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-32.064c0-4.143-3.358-7.5-7.5-7.5z"
                                        fill="#61481c" data-original="#000000"></path>
                                    <path
                                        d="m256 304.613c-17.396 0-31.548 14.152-31.548 31.548 0 4.142 3.358 7.5 7.5 7.5h48.097c4.142 0 7.5-3.358 7.5-7.5-.001-17.396-14.153-31.548-31.549-31.548zm-14.749 24.048c2.739-5.366 8.322-9.048 14.749-9.048s12.01 3.682 14.749 9.048z"
                                        fill="#61481c" data-original="#000000"></path>
                                    <path
                                        d="m491.233 203.114-37.745-13.726c-3.36-1.222-5.617-4.444-5.617-8.019v-10.181c10.234-9.057 16.032-21.77 16.032-35.43v-32.065c0-17.396-14.152-31.548-31.548-31.548h-32.064c-17.396 0-31.549 14.152-31.549 31.548v32.065c0 13.66 5.798 26.374 16.033 35.43v10.181c0 3.575-2.257 6.797-5.616 8.019l-16.033 5.83c-2.653.964-5.499.589-7.811-1.03s-3.637-4.166-3.637-6.988v-26.582c0-13.217-8.345-25.132-20.767-29.649l-37.746-13.726c-3.36-1.222-5.617-4.444-5.617-8.019v-10.181c10.234-9.057 16.032-21.771 16.032-35.431v-32.064c.001-17.396-14.152-31.548-31.548-31.548h-32.064c-17.396 0-31.548 14.152-31.548 31.548v32.064c0 13.66 5.798 26.374 16.032 35.431v10.181c0 3.575-2.257 6.797-5.617 8.019l-37.745 13.726c-12.421 4.517-20.767 16.432-20.767 29.649v26.582c0 2.822-1.326 5.37-3.637 6.988-2.312 1.62-5.159 1.995-7.811 1.03l-16.033-5.83c-3.359-1.222-5.616-4.444-5.616-8.019v-10.181c10.235-9.057 16.033-21.77 16.033-35.43v-32.065c0-17.396-14.153-31.548-31.549-31.548h-32.065c-17.396 0-31.548 14.152-31.548 31.548v32.065c0 13.66 5.798 26.374 16.032 35.43v10.181c0 3.575-2.257 6.797-5.616 8.019l-37.746 13.726c-12.421 4.517-20.767 16.432-20.767 29.649v119.43c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-119.43c0-6.933 4.377-13.183 10.893-15.552l37.746-13.726c9.265-3.37 15.49-12.257 15.49-22.116v-13.729c0-2.351-1.103-4.566-2.978-5.983-8.296-6.27-13.054-15.709-13.054-25.899v-32.065c0-9.125 7.423-16.548 16.548-16.548h32.064c9.125 0 16.549 7.423 16.549 16.548v32.065c0 10.19-4.758 19.63-13.055 25.899-1.875 1.417-2.978 3.632-2.978 5.983v13.729c0 9.859 6.225 18.747 15.49 22.115l16.033 5.83c7.207 2.621 15.26 1.559 21.542-2.841s10.032-11.605 10.032-19.274v-26.582c0-6.933 4.377-13.183 10.893-15.552l37.745-13.726c9.266-3.369 15.491-12.256 15.491-22.116v-13.727c0-2.351-1.103-4.566-2.978-5.983-8.296-6.27-13.054-15.71-13.054-25.9v-32.065c0-9.125 7.423-16.548 16.548-16.548h32.064c9.125 0 16.548 7.423 16.548 16.548v32.064c0 10.19-4.758 19.63-13.054 25.9-1.875 1.417-2.978 3.632-2.978 5.983v13.728c0 9.859 6.225 18.747 15.491 22.116l37.745 13.726c6.516 2.37 10.893 8.62 10.893 15.552v26.583c0 7.669 3.75 14.875 10.032 19.274 6.281 4.4 14.335 5.462 21.542 2.841l16.033-5.83c9.265-3.369 15.49-12.256 15.49-22.115v-13.729c0-2.351-1.103-4.566-2.978-5.983-8.296-6.27-13.055-15.709-13.055-25.899v-32.065c0-9.125 7.424-16.548 16.549-16.548h32.064c9.125 0 16.548 7.423 16.548 16.548v32.065c0 10.19-4.758 19.63-13.054 25.899-1.875 1.417-2.978 3.632-2.978 5.983v13.729c0 9.859 6.225 18.746 15.49 22.116l37.746 13.726c6.516 2.37 10.893 8.62 10.893 15.552v119.43c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-119.43c.002-13.218-8.344-25.133-20.765-29.65z"
                                        fill="#61481c" data-original="#000000"></path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="col-8 text-center">
                        <p class="rounded-pill bg-brown px-3 py-1" style="font-size: 16px">Korban Sengketa</p>
                        <p style="font-size: 14px">Korban adalah orang yang dirugikan, dirampas, atau terancam
                        kehilangan hak atas tanah yang dimilikinya.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mt-3">
                <div class="row justify-content-center align-items-center">
                    <div class="col-8 text-center">
                        <p class="rounded-pill bg-brown px-3 py-1" style="font-size: 16px">Sponsor</p>
                        <p style="font-size: 14px">Sponsor adalah orang/badan usaha/kelompok yang membiayai urusan
                        hukum korban sengketa tanah.</p>
                    </div>
                    <div class="col text-start">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.com/svgjs" width="95px" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <g>
                                    <g>
                                        <path
                                            d="M451.34,306.002c-14.207-6.71-29.421-10.112-45.221-10.112c-18.045,0-35.047,4.541-49.93,12.532    c-22.999-19.746-52.376-34.487-85.162-42.901c0.799-0.508,1.603-1.008,2.392-1.535c26.329-17.56,43.831-43.027,49.007-70.326    c10.493-2.812,19.633-10.017,25.367-20.347c7.535-13.575,7.768-29.756,0.607-42.228c-1.796-3.128-5.128-5.057-8.733-5.057    c-0.004,0-0.007,0-0.011,0l-15.026,0.017c0.913-34.59-8.875-63.992-28.587-85.522C275.084,17.63,243.078,4.5,208.233,4.5    c-30.285,0-60.269,9.984-82.263,27.393c-24.876,19.689-38.575,47.928-38.575,79.512v14.652H72.868    c-3.604,0-6.934,1.926-8.731,5.051c-7.342,12.771-7.197,29.202,0.379,42.88c5.504,9.938,14.308,16.896,24.451,19.671    c4.145,22.188,16.413,42.975,35.579,59.787c5.07,4.448,10.49,8.473,16.168,12.049c-18.658,4.567-35.895,10.939-51.48,19.076    c-4.931,2.575-6.841,8.658-4.267,13.588c1.797,3.442,5.305,5.413,8.936,5.413c1.57,0,3.164-0.369,4.652-1.146    c19.831-10.354,42.742-17.604,68.183-21.613l12.719,34.655L159.27,420.453c-0.342,1.777-0.198,3.613,0.415,5.316l7.37,20.454    c-30.184-1.671-59.828-5.431-88.111-11.164v-39.665c0-5.562-4.509-10.07-10.071-10.07c-5.562,0-10.071,4.509-10.071,10.07v35.198    c-13.128-3.173-25.907-6.778-38.241-10.808c2.007-25.811,9.507-48.782,22.335-68.376c3.046-4.654,1.744-10.896-2.909-13.942    c-4.652-3.045-10.894-1.744-13.942,2.909C9.952,364.954,1.192,393.937,0.007,426.52c-0.161,4.428,2.592,8.441,6.78,9.886    c52.297,18.042,112.645,28.631,174.517,30.622c0.013,0,0.026,0,0.039,0c7.434,0.231,14.96,0.348,22.371,0.348l2.42-0.004    l2.489,0.004c7.411,0,14.938-0.117,22.373-0.348c0.012,0,0.023,0,0.036,0c29.178-0.937,58.006-3.79,85.827-8.439    c9.516,14.916,22.789,27.472,38.954,36.199c15.357,8.317,32.753,12.712,50.307,12.712C464.503,507.5,512,460.03,512,401.682    C512,360.959,488.19,323.402,451.34,306.002z M215.432,304.556h-18.525l-7.654-20.857c5.456,0.822,10.938,1.262,16.398,1.296    c0.228,0.001,0.454,0.002,0.681,0.002c5.558,0,11.164-0.445,16.758-1.299L215.432,304.556z M330.182,163.537    c-0.979,1.764-2.977,4.792-6.146,7.272v-24.622l8.862-0.01C334.17,151.666,333.245,158.019,330.182,163.537z M107.536,111.405    c0-56.355,51.881-86.763,100.697-86.763c29.21,0,55.801,10.746,72.955,29.482c16.193,17.686,24.169,42.421,23.292,71.933h-76.378    c-35.146,0-62.629-10.452-84.023-31.952c-1.929-1.938-4.512-2.967-7.142-2.967c-1.31,0-2.632,0.256-3.889,0.783    c-3.779,1.583-6.222,5.298-6.179,9.395c0.087,8.214-1.875,14.405-5.83,18.403c-3.779,3.819-9.14,5.437-13.503,6.102V111.405z     M82.136,164.23c-3.14-5.668-4.007-12.286-2.56-18.031h7.818v24.445C84.704,168.398,82.998,165.787,82.136,164.23z     M107.536,176.795v-30.684c8.208-0.806,19.306-3.619,27.821-12.226c3.722-3.761,6.561-8.208,8.504-13.307    c22.914,17.211,50.652,25.62,84.241,25.62h75.793v30.596c0,2.436-0.133,4.869-0.388,7.292c-0.005,0.063-0.013,0.124-0.017,0.187    c-2.601,24.079-17.606,47.188-41.249,62.957c-17.048,11.376-36.878,17.624-55.906,17.624c-0.185,0-0.372-0.001-0.557-0.002    c-9.711-0.061-19.259-1.609-28.358-4.387c-0.143-0.063-0.287-0.12-0.432-0.175c-0.001-0.001-0.003-0.001-0.004-0.002    c-0.278-0.107-0.56-0.2-0.848-0.282c-0.039-0.011-0.076-0.023-0.114-0.034c-0.211-0.058-0.424-0.105-0.639-0.149    C137.279,247.332,107.536,213.268,107.536,176.795z M206.134,447.231l-2.42,0.004c-4.949,0-9.953-0.054-14.943-0.16l-9.199-25.532    l18.622-96.845h15.95l18.622,96.845l-9.199,25.532c-4.991,0.107-9.994,0.16-14.943,0.16L206.134,447.231z M245.282,446.225    l7.371-20.456c0.613-1.702,0.757-3.539,0.415-5.316L232.88,315.471l12.74-34.7c35.929,5.842,68.351,19.576,93.135,39.368    c-23.493,19.42-38.487,48.764-38.487,81.543c0,13.245,2.469,26.11,7.069,38.054C287.091,442.898,266.316,445.067,245.282,446.225z     M406.119,487.359c-14.214,0-28.294-3.556-40.727-10.289c-14.794-7.987-26.599-19.929-34.397-34.115    c-0.04-0.078-0.081-0.154-0.122-0.231c-6.749-12.364-10.464-26.418-10.464-41.042c0-47.228,38.45-85.65,85.71-85.65    c12.802,0,25.122,2.753,36.62,8.184c29.839,14.089,49.12,44.498,49.12,77.467C491.859,448.924,453.396,487.359,406.119,487.359z"
                                            fill="#61481c" data-original="#000000" class=""></path>
                                        <path
                                            d="M59.757,326.823c1.915,0,3.852-0.546,5.566-1.686l0.17-0.113c4.632-3.079,5.891-9.33,2.812-13.962    c-3.079-4.632-9.329-5.891-13.962-2.811l-0.17,0.113c-4.632,3.078-5.891,9.33-2.812,13.962    C53.3,325.243,56.497,326.823,59.757,326.823z"
                                            fill="#61481c" data-original="#000000" class=""></path>
                                    </g>
                                    <g>
                                        <path
                                            d="M440.039,417.965c0,8.382-2.408,15.094-7.254,20.135c-4.817,5.041-10.684,8.383-17.569,9.996v9.488v0.82    c0,5.239-4.449,9.488-9.663,9.488c-5.214,0-9.493-4.249-9.493-9.488v-10.224c-4.279-0.99-8.162-2.576-11.619-4.758    c-3.542-2.266-6.007-4.247-7.424-5.975l-2.068-2.72c-8.785-11.469,5.667-23.703,14.083-14.867c1.02,1.047,2.097,2.351,3.344,3.71    c3.514,3.909,8.672,4.53,12.865,4.53c7.935,0,11.93-3.256,11.93-9.825c0-2.351-1.53-4.164-4.534-5.466    c-3.004-1.274-6.66-2.435-10.938-3.456c-4.309-1.019-8.616-2.406-12.894-4.106c-4.307-1.727-7.962-4.673-10.966-8.865    c-3.004-4.191-4.506-9.515-4.506-15.944c0-6.457,2.068-12.205,6.121-17.388c3.996-5.126,9.776-8.608,16.776-9.968v-2.18v-10.819    c0-5.21,4.279-9.487,9.493-9.487c5.243,0,9.493,4.277,9.493,9.487v3.993v9.147c3.004,0.652,5.753,1.558,8.218,2.747    c2.494,1.161,4.194,2.124,5.158,2.889l1.473,1.274c12.469,9.346,0.425,25.913-10.343,16.85    c-7.283-6.117-23.832-7.476-23.832,3.767c0,2.38,1.105,4.277,3.287,5.722c2.211,1.443,4.931,2.436,8.162,2.917    c3.202,0.482,6.745,1.274,10.627,2.407c3.854,1.133,7.424,2.435,10.627,3.937c3.23,1.501,5.95,4.164,8.161,7.987    C438.934,407.515,440.039,412.274,440.039,417.965L440.039,417.965z"
                                            fill="#61481c" data-original="#000000" class=""></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mt-3">
                <div class="row justify-content-center align-items-center">
                    <div class="col text-end">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.com/svgjs" width="95px" x="0" y="0" viewBox="0 0 16.933333 16.933334"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <g id="layer1" transform="translate(0 -280.067)">
                                    <path id="path3778"
                                        d="m6.3505153 280.59583c-1.7503696 0-3.175516 1.42566-3.175516 3.17603 0 .10133.00468.20143.011377.30282.00299.37309.5718148.33688.5276162-.0336-.00602-.0935-.00983-.18294-.00983-.26923 0-1.46438 1.1819704-2.64635 2.6463493-2.64635 1.464392 0 2.6442826 1.18196 2.6442826 2.64635 0 .32707-.04469.68442-.1286719 1.0542-.057317.006-.1152605.0165-.1710505.0341-.099677-.32543-.4029789-.56121-.7586107-.56121-.4443201 0-.7927155-.3484-.7927155-.79272.00212-.14846-.1192239-.26935-.2676842-.26768-.1461691.002-.2631334.12151-.2614824.26768 0 .44431-.3489326.79272-.7932341.79272h-1.0588458c-.3556212 0-.6568599.24198-.7565443.56741-.1549612-.0488-.3201458-.0538-.4697386-.0145-.3226488.0848-.6117775.37055-.6247659.76636 0 .76437.5560166 1.26277 1.1901064 1.31981.1338342.38462.3643471.71838.6609424.98496v.6103c-.0005292 0-.00106 0-.00159 0-.069704.00055-.1363715.0286-.1855179.078l-.5296826.52968c-.068916.069-.094332.17022-.066146.26355l1.6986038 5.51801-1.9502702-2.48202.2330609-.93276c.022437-.0902-.00402-.18548-.069763-.25115l-.689364-.68936.2547647-1.08675c.038931-.16595-.086897-.32488-.257347-.32505-.021431 0-.042767.003-.063563.008-1.5004493.37088-2.60651093 1.72485-2.60652143 3.33882v3.70416c.0000158.14612.1184645.26457.2645833.26459h9.78958613c.357801.005.357801-.53423 0-.52917h-3.6886651l2.5740045-3.27629c.05041-.0642.06833-.14814.04858-.22737l-.22841-.91312.687814-.68782c.06247-.0625.08961-.15207.07235-.23874l-.1503786-.75913c.4478306.19105.8492966.50201 1.1518656.9002.213921.27876.632916-.0396.421683-.32039-.462968-.60926-1.090147-1.03863-1.8598356-1.22887-.188412-.0466-.361244.11874-.322977.30903l.212905 1.06402-.6934967.69349c-.065733.0657-.092213.16099-.069763.25115l.2330607.93276-1.950786 2.48305 1.6986039-5.51904c.028054-.0934.00238-.1947-.066662-.26355l-.5291666-.52968c-.049739-.0498-.1172396-.0776-.187587-.0775v-.60978c.296926-.26674.5276612-.59876.6614584-.98392.6430033-.0484 1.1921753-.5576 1.1921753-1.32188-.01-.30481-.184232-.54196-.41031-.67489.09084-.39966.144695-.79619.144695-1.17151 0-1.75037-1.4235881-3.17603-3.1739682-3.17603zm.5286507 3.70468c.241382.32393.6237975.52761 1.0572988.52762.1511803 0 .2656179.11497.2656179.26613v1.05833c0 1.03064-.8209254 1.85157-1.8515674 1.85157-1.0306183 0-1.8536339-.82093-1.8536339-1.85157v-1.05833c0-.15116.1144667-.26613.2656179-.26613h1.0588493c.433615-.00001.8164459-.20354 1.0578174-.52762zm-2.9114512 1.1467v.70538c0 .0759.00442.15073.011377.2248-.2954973-.0875-.5364004-.33721-.5364004-.75035 0-.27487.4096332-.35526.5250234-.17983zm5.2911506.18191c0 .39291-.243186.6616-.5389852.7488.00699-.0742.011377-.14926.011377-.22531v-.70435c.1216422-.17945.5276082-.0945.5276082.18086zm-1.8494982 2.65462v.60927l-1.0588519.88263-1.0583334-.88212v-.60926c.3188309.1589.6779128.24908 1.0583334.24908.3808386 0 .7399628-.0904 1.0588519-.2496zm-2.6308474.87282 1.1384307.94826-.9575642.68368-.426847-1.38803zm3.1424431 0 .2459805.24391-.426847 1.38751-.9575642-.68368zm-5.0880619.66352-.1798347.76946c-.020981.0891.00561.18274.070281.24753l.6878135.68782-.2284095.91312c-.019764.0792-.00185.16314.048575.22738l2.5740043 3.27627h-2.8938801v-1.85157c.00299-.15001-.1197425-.27256-.2697505-.26975-.1461876.003-.2626731.12357-.2599347.26975v1.85157h-1.3234326v-3.43958c0-1.20111.7456223-2.23515 1.7745683-2.68201zm11.860258 2.10892-.912606 2.05362c-.01461.0339-.0217.0706-.02119.10749 0 0-.004.31878.159679.64647.163851.32769.506833.67541 1.162204.67541.655359 0 .997847-.34772 1.161684-.67541.163902-.32769.160198-.64647.160198-.64647.000529-.0369-.007-.0736-.02119-.10749l-.913125-2.05517c.148021-.0335.41819-.12826.59273-.29663.23609-.22774-.101716-.62523-.372586-.37517-.0975.09-.362262.18759-.608232.18759-.668071-.01-.959668-.45831-1.851568-.51677v-.54156c.0021-.14623-.114794-.26609-.260966-.26769v-.001c-.0021-.00001-.0031-.001-.0041-.001-.146179.002-.262607.12151-.260966.26768v.54157c-.8919.0585-1.183497.50709-1.851568.51677-.24598 0-.51069-.0975-.608232-.18759-.2708696-.25006-.6086866.14742-.3725856.37517.1745296.16837.4446976.26312.5927296.29662l-.9131246 2.05518c-.0146.0339-.02159.0706-.02119.10748 0 0-.004.31878.160197.64647.163841.32769.5063176.67542 1.1616876.67542.65536 0 .998352-.34773 1.162204-.67542.163848-.32769.159678-.64647.159678-.64647.000529-.0369-.007-.0736-.02119-.10748l-.912603-2.05363c.541028-.0859.858798-.48439 1.724959-.48472.869508.001 1.187143.40074 1.729091.48679zm-8.3431597-1.48261.414446.2961-.2909385.4377h-.2459805l-.291973-.4377zm-.8449098.60358.3023076.45372-.2211758 1.32343-.4625049-1.50482zm1.6908542.00053.3798199.2713-.4625022 1.50275-.2201439-1.31982zm-.8867696.65887h.08165l.3741367 2.24689-.4159964 1.35083-.4144433-1.34773zm6.6579939.25735c-.132321 0-.264068.0882-.264068.26458v3.70831h-1.071768c-.357222.0243-.332899.5379.01241.52916h1.320335v.002h1.324467c.345289.009.369612-.5049.01241-.52917h-1.071785v-3.7083c0-.17503-.129717-.26267-.260966-.26407v-.003zm-2.116151.39068.650089 1.46451h-1.299662zm4.230233.002.649573 1.46451h-1.299663zm-4.97644 1.99213h1.49293s-.0933.52916-.746207.52916c-.652949 0-.746723-.52916-.746723-.52916zm4.229714.002h1.492933s-.0938.52917-.746723.52917c-.652952 0-.74621-.52917-.74621-.52917z"
                                        font-variant-ligatures="normal" font-variant-position="normal" font-variant-caps="normal"
                                        font-variant-numeric="normal" font-variant-alternates="normal" font-feature-settings="normal"
                                        text-indent="0" text-align="start" text-decoration-line="none" text-decoration-style="solid"
                                        text-decoration-color="rgb(0,0,0)" text-transform="none" text-orientation="mixed" white-space="normal"
                                        shape-padding="0" isolation="auto" mix-blend-mode="normal" solid-color="rgb(0,0,0)" solid-opacity="1"
                                        vector-effect="none" fill="#61481c" data-original="#000000" class=""></path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="col-8 text-center">
                        <p class="rounded-pill bg-brown px-3 py-1" style="font-size: 16px">Pengacara</p>
                        <p style="font-size: 14px">Pengacara adalah seorang pribadi atau badan hukum (Law Firm) yang
                            menangani persoalan sengketa tanah.</p>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="row mb-5 pt-5 justify-content-center">
            <div class="col-md-12 text-center">
                <h3 class="text-brown" style="font-weight: 700">3 Langkah Mencari Bantuan Sponsor</h3>
            </div>
            <div class="col-md-7 mt-4">
                <div class="row justify-content-center text-center g-2">
                    <div class="col">
                        <span class="fa-stack fa-2x">
                            <i class="fa fa-circle fa-stack-2x text-brown"></i>
                            <i class="fa-solid fa-file-lines fa-stack-1x text-white"></i>
                        </span>
                        <div class="mt-3" style="font-size: 14px">Masukkan data tanah Anda</div>
                    </div>
                    <div class="col">
                        <span class="fa-stack fa-2x">
                            <i class="fa fa-circle fa-stack-2x text-white"></i>
                            <i class="fa-solid fa-file-signature fa-stack-1x text-brown"></i>
                        </span>
                        <div class="mt-3" style="font-size: 14px">Tentukan kebutuhan, jaminan, dan pengembalian</div>
                    </div>
                    <div class="col">
                        <span class="fa-stack fa-2x">
                            <i class="fa fa-circle fa-stack-2x text-white"></i>
                            <i class="fa-solid fa-handshake fa-stack-1x text-brown"></i>
                        </span>
                        <div class="mt-3" style="font-size: 14px">Dapatkan sponsor</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-3 mb-5 justify-content-center">
            <div class="col-md-12 text-center">
                <h3 class="text-brown" style="font-weight: 700"><i class="fa-solid fa-gears"></i> Apa Saja Layanan
                    Sengketatanah.id</h3>
            </div>
            <div class="card kriteria mt-4">
                <div class="card-body p-5">
                    <div class="row">

                        <div class="col-lg-4 mt-2 mb-2">

                            <a class="text-black" style="text-decoration: none" href="{{url('')}}/bid-sengketa">
                                <div class="card bg-white shadow p-4">
                                    <div class="card-body text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:svgjs="http://svgjs.com/svgjs" width="86px" x="0" y="0"
                                            viewBox="0 0 50 60" style="enable-background:new 0 0 512 512"
                                            xml:space="preserve" class="">
                                            <circle r="25" cx="25" cy="30" fill="#f8f9fa" shape="circle"></circle>
                                            <g transform="matrix(0.7,0,0,0.7,7.500000286102296,9)">
                                                <g xmlns="http://www.w3.org/2000/svg" id="Page-1" fill="none"
                                                    fill-rule="evenodd">
                                                    <g id="001---Bid-Sign" fill="rgb(0,0,0)" fill-rule="nonzero">
                                                        <path id="Shape"
                                                            d="m3 52h8.072c.4576865.0004997.9089573.107668 1.318.313l1.456.733c2.5817025 1.2790372 5.42284 1.9475804 8.304 1.954h2.63c.5642399.6337052 1.3715062.9973386 2.22 1v1c0 1.6568542 1.3431458 3 3 3s3-1.3431458 3-3v-1c1.1856144.005247 2.2620981-.691231 2.7432243-1.7748484.4811261-1.0836175.2758048-2.3492169-.5232243-3.2251516 1.0400491-1.1305142 1.0400491-2.8694858 0-4 1.0400491-1.1305142 1.0400491-2.8694858 0-4 .5806193-.6333292.85885-1.4868812.7629994-2.3407179-.0958505-.8538368-.5564082-1.6244534-1.2629994-2.1132821 1.9862979-.6121975 3.325279-2.4679926 3.28-4.546 0-1.1045695-.8954305-2-2-2h-3v-2h14c1.6568542 0 3-1.3431458 3-3v-24c0-1.65685425-1.3431458-3-3-3h-34c-1.6568542 0-3 1.34314575-3 3v24c0 1.6568542 1.3431458 3 3 3h14v2h-2.64c-4.3481249.0027575-8.558163 1.5272159-11.9 4.309-.5364453.4462991-1.2121774.6907656-1.91.691h-7.55c-1.65685425 0-3 1.3431458-3 3v9c0 1.6568542 1.34314575 3 3 3zm22-11c0-.5522847.4477153-1 1-1h7c.5522847 0 1 .4477153 1 1s-.4477153 1-1 1h-7c-.5522847 0-1-.4477153-1-1zm9 4c0 .5522847-.4477153 1-1 1h-7c-.5522847 0-1-.4477153-1-1s.4477153-1 1-1h7c.5522847 0 1 .4477153 1 1zm-1 3c.5522847 0 1 .4477153 1 1s-.4477153 1-1 1h-7c-.5522847 0-1-.4477153-1-1s.4477153-1 1-1zm-2 9c0 .5522847-.4477153 1-1 1s-1-.4477153-1-1v-1h2zm2-3h-6c-.5522847 0-1-.4477153-1-1s.4477153-1 1-1h6c.5522847 0 1 .4477153 1 1s-.4477153 1-1 1zm3-20c0 2.1-1.684 2.748-3 2.932v-2.932zm-24-7v-24c0-.55228475.4477153-1 1-1h34c.5522847 0 1 .44771525 1 1v24c0 .5522847-.4477153 1-1 1h-34c-.5522847 0-1-.4477153-1-1zm19 3v8h-2v-8zm-29 10c0-.5522847.44771525-1 1-1h7.55c1.1656656-.0009424 2.2943701-.4091295 3.191-1.154 2.982163-2.4823219 6.7388958-3.8429391 10.619-3.846h2.64v4h-1c-1.1856144-.005247-2.2620981.691231-2.7432243 1.7748484-.4811261 1.0836175-.2758048 2.3492169.5232243 3.2251516-1.0400491 1.1305142-1.0400491 2.8694858 0 4-.5967576.6515543-.8725607 1.5349101-.752536 2.4102596s.6234232 1.6518641 1.373536 2.1187404c-.2595214.4470314-.3977522.9541075-.401 1.471h-1.85c-2.570894-.0058162-5.1060912-.602152-7.41-1.743l-1.451-.731c-.6882064-.3448961-1.4472076-.5249748-2.217-.526h-8.072c-.55228475 0-1-.4477153-1-1z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                        <path id="Shape"
                                                            d="m25 11c-.0033061-2.76005315-2.2399468-4.99669388-5-5h-3c-1.1045695 0-2 .8954305-2 2v14c0 1.1045695.8954305 2 2 2h3c2.1566753.0062173 4.0727751-1.3751502 4.7484261-3.423267.675651-2.0481169-.0423886-4.2984577-1.7794261-5.576733 1.272967-.9358543 2.0265663-2.4200479 2.031-4zm-2 8c0 1.6568542-1.3431458 3-3 3h-3v-6h3c1.6568542 0 3 1.3431458 3 3zm-3-5h-3v-6h3c1.6568542.00000003 2.9999999 1.34314578 2.9999999 3 0 1.6568542-1.3431457 3-2.9999999 3z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                        <path id="Shape"
                                                            d="m38 24h2c3.3123376-.0033074 5.9966926-2.6876624 6-6v-6c-.0033074-3.31233757-2.6876624-5.99669262-6-6h-2c-1.1045695 0-2 .8954305-2 2v14c0 1.1045695.8954305 2 2 2zm0-16h2c2.209139 0 4 1.790861 4 4v6c0 2.209139-1.790861 4-4 4h-2z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                        <path id="Shape"
                                                            d="m34 23c0-.5522847-.4477153-1-1-1h-2v-14h2c.5522847 0 1-.44771525 1-1s-.4477153-1-1-1h-6c-.5522847 0-1 .44771525-1 1s.4477153 1 1 1h2v14h-2c-.5522847 0-1 .4477153-1 1s.4477153 1 1 1h6c.5522847 0 1-.4477153 1-1z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="mt-3">Bid Sengketa</div>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-4 mt-2 mb-2">

                            <a class="text-black" style="text-decoration: none" href="{{url('')}}/jual-beli-lahan">
                                <div class="card bg-white shadow p-4">
                                    <div class="card-body text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:svgjs="http://svgjs.com/svgjs" width="100px" x="0" y="0"
                                            viewBox="0 0 64 64" style="enable-background:new 0 0 512 512"
                                            xml:space="preserve" class="">
                                            <circle r="32" cx="32" cy="32" fill="#f8f9fa" shape="circle"></circle>
                                            <g transform="matrix(0.7,0,0,0.7,9.600008887052539,9.600000000000001)">
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                    d="m62.9 52.553-10-20a1 1 0 0 0 -.9-.553h-17v-6h12a1 1 0 0 0 1-1v-18a1 1 0 0 0 -1-1h-30a1 1 0 0 0 -1 1v18a1 1 0 0 0 1 1h12v6h-17a1 1 0 0 0 -.895.553l-10 20a1 1 0 0 0 -.105.447v4a1 1 0 0 0 1 1h60a1 1 0 0 0 1-1v-4a1 1 0 0 0 -.1-.447zm-59.282-.553 4-8h10.6l-2 8zm16.662-8h10.72v8h-12.72zm20.939-10 2 8h-10.219v-8zm-10.219 8h-10.22l2-8h8.22zm2 2h10.719l2 8h-12.719zm14.779 8-2-8h10.6l4 8zm7.6-10h-10.1l-2-8h8.1zm-37.379-34h28v16h-28zm13 18h2v6h-2zm-18.382 8h8.1l-2 8h-10.1zm-9.618 22v-2h58v2z"
                                                    fill="#BF9742" data-original="#000000" class=""></path>
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                    d="m26.293 39.707a1 1 0 0 0 1.414 0l2-2-1.414-1.414-1.293 1.293-1.293-1.293-1.414 1.414z"
                                                    fill="#BF9742" data-original="#000000" class=""></path>
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                    d="m26.293 46.293-1.293 1.293-1.293-1.293-1.414 1.414 2 2a1 1 0 0 0 1.414 0l2-2z"
                                                    fill="#BF9742" data-original="#000000" class=""></path>
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                    d="m39.293 46.293-1.293 1.293-1.293-1.293-1.414 1.414 2 2a1 1 0 0 0 1.414 0l2-2z"
                                                    fill="#BF9742" data-original="#000000" class=""></path>
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                    d="m37.293 39.707a1 1 0 0 0 1.414 0l2-2-1.414-1.414-1.293 1.293-1.293-1.293-1.414 1.414z"
                                                    fill="#BF9742" data-original="#000000" class=""></path>
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                    d="m48.293 39.707a1 1 0 0 0 1.414 0l2-2-1.414-1.414-1.293 1.293-1.293-1.293-1.414 1.414z"
                                                    fill="#BF9742" data-original="#000000" class=""></path>
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                    d="m53.293 46.293-1.293 1.293-1.293-1.293-1.414 1.414 2 2a1 1 0 0 0 1.414 0l2-2z"
                                                    fill="#BF9742" data-original="#000000" class=""></path>
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                    d="m13.293 46.293-1.293 1.293-1.293-1.293-1.414 1.414 2 2a1 1 0 0 0 1.414 0l2-2z"
                                                    fill="#BF9742" data-original="#000000" class=""></path>
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                    d="m14.293 39.707a1 1 0 0 0 1.414 0l2-2-1.414-1.414-1.293 1.293-1.293-1.293-1.414 1.414z"
                                                    fill="#BF9742" data-original="#000000" class=""></path>
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                    d="m32 13a1 1 0 0 1 1 1h2a3 3 0 0 0 -2-2.816v-1.184h-2v1.184a2.993 2.993 0 0 0 1 5.816 1 1 0 1 1 -1 1h-2a3 3 0 0 0 2 2.816v1.184h2v-1.184a2.993 2.993 0 0 0 -1-5.816 1 1 0 0 1 0-2z"
                                                    fill="#BF9742" data-original="#000000" class=""></path>
                                                <path xmlns="http://www.w3.org/2000/svg" d="m37 13h4v2h-4z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                                <path xmlns="http://www.w3.org/2000/svg" d="m37 17h4v2h-4z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                                <path xmlns="http://www.w3.org/2000/svg" d="m23 13h4v2h-4z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                                <path xmlns="http://www.w3.org/2000/svg" d="m23 17h4v2h-4z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                            </g>
                                        </svg>
                                        <div class="mt-3">Jual Beli Lahan</div>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-4 mt-2 mb-2">

                            <a class="text-black" style="text-decoration: none" href="{{url('')}}/kerjasama-lahan">
                                <div class="card bg-white shadow p-4">
                                    <div class="card-body text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:svgjs="http://svgjs.com/svgjs" width="100px" x="0" y="0"
                                            viewBox="0 0 511.99992 511" style="enable-background:new 0 0 512 512"
                                            xml:space="preserve" class="">
                                            <circle r="255.99996" cx="255.99996" cy="255.5" fill="#f8f9fa"
                                                shape="circle">
                                            </circle>
                                            <g transform="matrix(0.7,0,0,0.7,76.79987218379975,75.92755157947542)">
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                    d="m509.914062 214.859375-85.695312-111.320313c-3.171875-4.117187-8.957031-5.132812-13.34375-2.34375l-55.328125 35.1875h-72.160156c-.933594 0-1.863281.199219-2.761719.460938l-55.949219 16.105469-58.054687-15.878907-56.410156-35.875c-4.3125-2.742187-9.992188-1.8125-13.199219 2.164063l-94.785157 117.40625c-3.40625 4.21875-2.84375 10.378906 1.265626 13.914063l49.679687 42.753906 44.570313 60.0625c-13.035157 13.886718-12.78125 35.789062.78125 49.355468 6.011718 6.007813 13.65625 9.402344 21.519531 10.191407-.273438 1.78125-.414063 3.589843-.414063 5.425781 0 9.476562 3.691406 18.386719 10.390625 25.085938 6.703125 6.703124 15.613281 10.394531 25.089844 10.394531.128906 0 .253906-.007813.378906-.011719-.003906.242188-.015625.480469-.015625.722656 0 9.476563 3.691406 18.386719 10.390625 25.089844 6.703125 6.699219 15.613281 10.390625 25.089844 10.390625 1.871094 0 3.722656-.152344 5.539063-.433594.769531 7.890625 4.171874 15.570313 10.203124 21.601563 6.914063 6.917968 16 10.375 25.085938 10.375s18.171875-3.457032 25.089844-10.375l5.425781-5.425782 2.277344 1.835938c6.859375 6.644531 15.765625 9.964844 24.671875 9.964844 9.085937 0 18.171875-3.457032 25.085937-10.375 7.058594-7.058594 10.515625-16.375 10.371094-25.644532 9.265625.140626 18.585937-3.3125 25.644531-10.367187 7.050782-7.054687 10.507813-16.363281 10.371094-25.628906 9.652344.152343 18.808594-3.554688 25.640625-10.386719 7.058594-7.058594 10.515625-16.375 10.371094-25.644531 9.273437.140625 18.585937-3.3125 25.644531-10.371094 12.046875-12.046875 13.597656-30.667969 4.664062-44.414063l32.542969-68.15625 48.925781-42.101562c4.042969-3.480469 4.660157-9.511719 1.40625-13.734375zm-402.914062-91.910156 40.5625 25.792969-88.238281 107.5-35.359375-30.433594zm5.722656 227.921875 12.242188-12.242188c.371094-.371094.761718-.722656 1.160156-1.050781 2.394531-1.953125 5.292969-3.117187 8.363281-3.394531.085938-.007813.175781-.007813.261719-.011719.4375-.035156.875-.058594 1.316406-.054687 4.195313.058593 8.09375 1.773437 10.984375 4.824218 5.671875 5.996094 5.367188 15.792969-.679687 21.839844l-11.871094 11.871094c-6.003906 6.003906-15.773438 6.003906-21.777344 0-6.003906-6.007813-6.003906-15.777344 0-21.78125zm31.496094 62.484375c-2.910156-2.90625-4.511719-6.773438-4.511719-10.886719s1.601563-7.980469 4.511719-10.890625l23.738281-23.738281c4.546875-4.546875 11.695313-5.792969 17.507813-3.023438 5.992187 2.855469 9.363281 9.359375 8.484375 15.902344-.46875 3.492188-2.09375 6.78125-4.585938 9.277344l-23.363281 23.359375c-2.910156 2.910156-6.777344 4.511719-10.890625 4.511719s-7.980469-1.601563-10.890625-4.511719zm35.84375 36.191406c-2.910156-2.90625-4.511719-6.773437-4.511719-10.886719 0-4.113281 1.601563-7.980468 4.511719-10.890625l23.734375-23.738281c4.863281-4.859375 12.664063-5.90625 18.617187-2.441406 5.4375 3.164062 8.285157 9.375 7.351563 15.5625-.511719 3.402344-2.128906 6.601562-4.5625 9.035156l-23.359375 23.359375c-2.910156 2.910156-6.777344 4.511719-10.890625 4.511719s-7.980469-1.601563-10.890625-4.511719zm40.828125 31.5625c-6.003906-6.003906-6.003906-15.773437 0-21.777344l12.242187-12.242187c.371094-.371094.757813-.71875 1.15625-1.046875.011719-.007813.019532-.015625.027344-.023438 1.992188-1.617187 4.332032-2.699219 6.828125-3.171875.058594-.007812.117188-.015625.175781-.023437.429688-.078125.867188-.140625 1.304688-.179688.175781-.015625.351562-.015625.53125-.027343.359375-.019532.714844-.042969 1.078125-.039063 4.191406.058594 8.09375 1.769531 10.984375 4.824219.355469.375.6875.765625.992188 1.167968 4.617187 6.035157 3.996093 15-1.734376 20.734376l-11.808593 11.808593c-6.003907 6.003907-15.773438 6-21.777344-.003906zm187.285156-112.042969c-6.003906 6.007813-15.773437 6.003906-21.777343 0-.21875-.21875-.449219-.421875-.683594-.613281l-64.554688-65.234375c-3.902344-3.941406-10.257812-3.972656-14.199218-.070312-3.941407 3.898437-3.972657 10.253906-.074219 14.195312l65.253906 65.933594c.007813.007812.015625.015625.023437.023437 6.003907 6.003907 6.003907 15.777344 0 21.78125-2.910156 2.910157-6.777343 4.511719-10.890624 4.511719-4.117188 0-7.984376-1.601562-10.890626-4.511719l-43.652343-44.105469c-3.898438-3.941406-10.253907-3.972656-14.195313-.074218-3.941406 3.902344-3.972656 10.257812-.074218 14.199218l42.984374 43.429688c.21875.273438.453126.535156.703126.785156 6.003906 6.003906 6.003906 15.777344 0 21.78125-6.007813 6.003906-15.78125 6-21.785157-.003906l-23.824219-24.074219c-3.902343-3.941406-10.257812-3.976562-14.199218-.074219-3.941406 3.898438-3.972656 10.253907-.074219 14.195313l23.160156 23.398437c.21875.273438.453125.539063.707031.789063 6.003907 6.003906 6.003907 15.777344 0 21.78125-6.003906 6.007813-15.773437 6.003906-21.777343 0-.691407-.691406-1.503907-1.222656-2.277344-1.816406-.65625-.5-.828125-.847657-.5-1.644531.332031-.808594.828125-1.539063 1.160156-2.351563.367188-.90625.664063-1.839844.953125-2.777344 1.539063-4.960937 1.992188-10.296875 1.300782-15.445312-1.328126-9.878907-6.761719-18.792969-14.996094-24.433594-4.449219-3.042969-9.597656-5.039063-14.933594-5.789063 2.585938-11.40625-.519531-23.773437-8.597656-32.308593-6.648438-7.023438-15.628906-10.964844-25.289063-11.097657-.351562-.003906-.703125-.003906-1.058593 0 .214843-9.21875-3.136719-18.378906-9.492188-25.09375-6.652344-7.023437-15.632812-10.964843-25.289062-11.097656-2.871094-.039062-5.769532.265625-8.566407.910156-1.195312-8.316406-5.386719-16.011718-11.734375-21.515624-6.308594-5.460938-14.242187-8.492188-22.691406-8.609376-8.894531-.128906-17.632812 3.152344-24.238281 9.117188l-38.808594-52.292969 92.84375-113.109375 29.589844 8.09375-38.644531 68.191406c-4.671876 8.246094-5.851563 17.816407-3.324219 26.949219 2.527343 9.136719 8.457031 16.738281 16.703125 21.410157.515625.292968 1.035156.570312 1.5625.835937.039062.019531.078125.039063.121094.058594 1.386718.691406 2.8125 1.285156 4.257812 1.785156 6.730469 2.332031 14 2.585937 21.011719.648437 9.132812-2.527343 16.734375-8.460937 21.40625-16.703124l25.113281-44.316407 44.839844 3.179688 119.402344 119.398437c6 6.007813 6 15.777344-.003907 21.78125zm4.160157-46.019531-112.011719-112.007813c-.210938-.214843-.433594-.417968-.664063-.609374-1.613281-1.34375-3.613281-2.15625-5.722656-2.304688l-54.902344-3.894531c-3.796875-.261719-7.570312 1.757812-9.445312 5.066406l-28.234375 49.828125c-2.027344 3.578125-5.328125 6.152344-9.292969 7.25-3.960938 1.097656-8.117188.582031-11.699219-1.445312-3.578125-2.027344-6.152343-5.328126-7.25-9.292969-1.097656-3.964844-.585937-8.121094 1.445313-11.699219l37.691406-66.519531 15.273438-4.394531c.101562-.03125.199218-.070313.300781-.101563l57.003906-16.460937h68.875l85.984375 109.304687zm40.503906-73.039063-79.515625-101.136718 40.582031-25.808594 74.300781 96.511719zm0 0"
                                                    fill="#BF9742" data-original="#000000" class=""></path>
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                    d="m310.183594 117.53125c2.570312 0 5.140625-.980469 7.101562-2.941406l68.578125-68.578125c3.921875-3.921875 3.921875-10.277344 0-14.199219s-10.277343-3.921875-14.199219 0l-68.578124 68.578125c-3.921876 3.921875-3.921876 10.277344 0 14.199219 1.960937 1.960937 4.53125 2.941406 7.097656 2.941406zm0 0"
                                                    fill="#BF9742" data-original="#000000" class=""></path>
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                    d="m194.714844 114.589844c1.960937 1.960937 4.53125 2.941406 7.101562 2.941406 2.566406 0 5.136719-.980469 7.097656-2.941406 3.921876-3.921875 3.921876-10.277344 0-14.199219l-68.578124-68.578125c-3.921876-3.921875-10.277344-3.921875-14.199219 0s-3.921875 10.277344 0 14.199219zm0 0"
                                                    fill="#BF9742" data-original="#000000" class=""></path>
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                    d="m256 117.53125c5.542969 0 10.039062-4.496094 10.039062-10.039062v-56.753907c0-5.542969-4.496093-10.039062-10.039062-10.039062s-10.039062 4.496093-10.039062 10.039062v56.753907c0 5.542968 4.496093 10.039062 10.039062 10.039062zm0 0"
                                                    fill="#BF9742" data-original="#000000" class=""></path>
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                    d="m246.734375 14.351562c1.59375 3.863282 5.566406 6.398438 9.757813 6.179688 4.140624-.214844 7.777343-3.011719 9.058593-6.953125 1.285157-3.972656-.113281-8.5-3.441406-11.03125-3.394531-2.5859375-8.128906-2.730469-11.679687-.382813-3.960938 2.617188-5.496094 7.828126-3.695313 12.1875zm0 0"
                                                    fill="#BF9742" data-original="#000000" class=""></path>
                                            </g>
                                        </svg>
                                        <div class="mt-3">Kerjasama Lahan</div>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-4 mt-2 mb-2">

                            <a class="text-black" style="text-decoration: none" href="{{url('')}}/lelang-lahan">
                                <div class="card bg-white shadow p-4">
                                    <div class="card-body text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:svgjs="http://svgjs.com/svgjs" width="100px" x="0" y="0"
                                            viewBox="0 0 479.976 479.976" style="enable-background:new 0 0 512 512"
                                            xml:space="preserve" class="">
                                            <circle r="239.988" cx="239.988" cy="239.988" fill="#f8f9fa" shape="circle">
                                            </circle>
                                            <g transform="matrix(0.7,0,0,0.7,71.99629760161042,71.99643859863284)">
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <path
                                                            d="M279.339,144.016c-3.789-18.657-20.202-32.059-39.24-32.04c-13.255,0-24-10.745-24-24s10.745-24,24-24s24,10.745,24,24h16    c-0.024-19.001-13.389-35.373-32-39.2v-16.8h-16v16.8c-21.65,4.396-35.636,25.51-31.24,47.16    c3.789,18.657,20.202,32.059,39.24,32.04c13.255,0,24,10.745,24,24s-10.745,24-24,24s-24-10.745-24-24h-16    c0.024,19.001,13.389,35.373,32,39.2v16.8h16v-16.8C269.748,186.779,283.735,165.665,279.339,144.016z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                    </g>
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <path
                                                            d="M360.098,119.976C360.085,53.701,306.348-0.014,240.074,0C173.8,0.014,120.085,53.75,120.098,120.025    c0.012,57.014,40.138,106.148,96,117.551v82.4h-8c-1.959,0.002-3.849,0.722-5.312,2.024l-72,64    c-1.708,1.517-2.686,3.692-2.688,5.976v80c0,4.418,3.582,8,8,8h152c13.197,0.058,23.943-10.593,24.002-23.79    c0.027-5.995-2.201-11.781-6.242-16.21c8.32-9.044,8.32-22.956,0-32c8.32-9.044,8.32-22.956,0-32    c8.894-9.75,8.2-24.864-1.55-33.758c-4.429-4.04-10.215-6.268-16.21-6.242h-9.472c-2.42-6.776-7.753-12.108-14.528-14.528v-83.872    C319.936,226.099,360.033,176.98,360.098,119.976z M240.098,387.975v-20h-16v20c0.014,9.117,4.475,17.654,11.952,22.872    c-6.026,9.08-5.082,21.1,2.288,29.128c-6.019,6.444-7.878,15.737-4.8,24h-89.44v-68.408l67.04-59.592h44.96c4.418,0,8,3.582,8,8    v44c0,6.627-5.373,12-12,12C245.471,399.975,240.098,394.603,240.098,387.975z M232.098,319.975v-80.408    c2.656,0.176,5.296,0.408,8,0.408s5.344-0.232,8-0.408v80.408H232.098z M288.098,463.975h-32c-4.418,0-8-3.582-8-8s3.582-8,8-8h32    c4.418,0,8,3.582,8,8S292.517,463.975,288.098,463.975z M280.098,351.975h8c4.418,0,8,3.582,8,8s-3.582,8-8,8h-8V351.975z     M280.098,387.975v-4h8c4.418,0,8,3.582,8,8s-3.582,8-8,8H277.29C279.115,396.237,280.075,392.136,280.098,387.975z     M288.098,415.975c4.418,0,8,3.582,8,8s-3.582,8-8,8h-32c-4.418,0-8-3.582-8-8s3.582-8,8-8H288.098z M240.098,223.975    c-57.41-0.066-103.934-46.59-104-104c0-57.438,46.562-104,104-104s104,46.562,104,104S297.536,223.975,240.098,223.975z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                    </g>
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <path
                                                            d="M72.098,311.975c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8h16c-0.042-10.134-6.445-19.15-16-22.528v-9.472h-16v9.472    c-12.473,4.393-19.023,18.066-14.629,30.539c3.38,9.596,12.455,16.009,22.629,15.989c4.418,0,8,3.582,8,8s-3.582,8-8,8    s-8-3.582-8-8h-16c0.042,10.134,6.445,19.15,16,22.528v9.472h16v-9.472c12.473-4.393,19.023-18.066,14.629-30.539    C91.348,318.369,82.272,311.956,72.098,311.975z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                    </g>
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <path
                                                            d="M72.124,247.949c-39.765-0.014-72.012,32.209-72.026,71.974c-0.013,36.679,27.548,67.505,64,71.58v88.472h16v-88.472    c36.414-4.108,63.95-34.883,64-71.528C144.113,280.211,111.889,247.964,72.124,247.949z M72.098,375.975    c-30.928,0-56-25.072-56-56c0-30.928,25.072-56,56-56c30.928,0,56,25.072,56,56C128.059,350.887,103.01,375.936,72.098,375.975z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                    </g>
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <path
                                                            d="M408.098,311.975c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8h16c-0.042-10.134-6.445-19.15-16-22.528v-9.472h-16v9.472    c-12.473,4.393-19.023,18.066-14.629,30.539c3.38,9.596,12.455,16.009,22.629,15.989c4.418,0,8,3.582,8,8s-3.582,8-8,8    s-8-3.582-8-8h-16c0.042,10.134,6.445,19.15,16,22.528v9.472h16v-9.472c12.473-4.393,19.023-18.066,14.63-30.539    C427.348,318.369,418.272,311.956,408.098,311.975z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                    </g>
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <path
                                                            d="M479.399,311.748c-4.17-36.255-34.807-63.657-71.301-63.772c-39.764,0.126-71.898,32.463-71.772,72.227    c0.115,36.494,27.517,67.131,63.772,71.301v88.472h16v-88.472C455.602,386.96,483.943,351.252,479.399,311.748z M408.098,375.975    c-30.928,0-56-25.072-56-56c0-30.928,25.072-56,56-56c30.928,0,56,25.072,56,56C464.059,350.887,439.01,375.936,408.098,375.975z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                    </g>
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="mt-3">Pelelangan Lahan</div>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-4 mt-2 mb-2">

                            <a class="text-black" style="text-decoration: none" href="{{url('')}}/jasa-tukang-ukur">
                                <div class="card bg-white shadow p-4">
                                    <div class="card-body text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:svgjs="http://svgjs.com/svgjs" width="92px" x="0" y="0"
                                            viewBox="0 0 54 60" style="enable-background:new 0 0 512 512"
                                            xml:space="preserve" class="">
                                            <circle r="27" cx="27" cy="30" fill="#f8f9fa" shape="circle"></circle>
                                            <g transform="matrix(0.7,0,0,0.7,8.084528160095218,8.999380803108217)">
                                                <g xmlns="http://www.w3.org/2000/svg" id="Page-1" fill="none"
                                                    fill-rule="evenodd">
                                                    <g id="022---Tape-Measure" fill="rgb(0,0,0)" fill-rule="nonzero"
                                                        transform="translate(0 -1)">
                                                        <path id="Shape"
                                                            d="m35.264 1.609c-3.7378983-.44229717-7.5002037-.64571016-11.264-.609-13.458 0-24 5.271-24 12v16c0 5.383 6.783 9.917 16.775 11.445-2.7926667 2.016-5.7446667 4.0936667-8.856 6.233-.52171701.3581018-.84249019.9425814-.86438596 1.5749943s.25768537 1.2376783.75338596 1.6310057l13.344 10.677c.7075125.5643386 1.7047481.5868449 2.437.055 2.234-1.627 4.415-3.327 6.539-5.072 2.0666667-1.7006667 4.0666667-3.4456667 6-5.235.01-.011.024-.014.033-.025l.007-.012c1.8933333-1.75 3.708-3.5286667 5.444-5.336.021-.02.049-.028.068-.051s.016-.033.027-.048c1.274-1.329 2.516-2.666 3.689-4.011 3.332-3.822 7.478-8.577 8.268-14.434.806-5.974-.307-14.827-6.094-20.117-3.615-3.316-8.248-4.147-12.306-4.666zm-11.264 1.391c11.925 0 22 4.58 22 10 0 6.481-12.9 10-22 10-11.925 0-22-4.58-22-10s10.075-10 22-10zm-22 26v-11.126c3.67 4.233 12.033 7.126 22 7.126 5.2574546.0850922 10.482356-.8399846 15.391-2.725-6.137036 5.6608759-12.6126553 10.9432928-19.391 15.818v-5.093c0-.5522847-.4477153-1-1-1s-1 .4477153-1 1v5.6c-1.6868152-.2203923-3.35715-.5524548-5-.994v-5.606c0-.5522847-.4477153-1-1-1s-1 .4477153-1 1v5c-1.38319746-.4632171-2.72192488-1.0499144-4-1.753v-6.247c0-.5522847-.44771525-1-1-1s-1 .4477153-1 1v4.931c-1.9-1.482-3-3.176-3-4.931zm20.4 30-13.349-10.673c1.525-1.048 3.157-2.182 4.851-3.375.8795125.5637678 1.9341854.788068 2.967.631.6467275-.1382595 1.3217636.0033584 1.858396.3898785s.8848318.9819079.958604 1.6391215c.402216 2.320963 2.5831155 3.8968216 4.913 3.55.6475955-.1324477 1.3210571.0126426 1.8566662.3999993.535609.3873568.8843101.9815027.9613338 1.6380007.1115411.5302585.3016372 1.040889.564 1.515-1.819 1.467-3.681 2.902-5.581 4.285zm29.291-32.88c-.2314302 1.5810662-.7085194 3.1162541-1.414 4.55l-1.422-2c-.3203252-.4501121-.9448879-.5553252-1.395-.235s-.5553252.9448879-.235 1.395l1.991 2.8c-.9637169 1.5504227-2.0385323 3.0289622-3.216 4.424l-2.783-3.182c-.2344926-.2711789-.5962086-.3960829-.9480668-.3273765-.3518582.0687063-.6400157.3205093-.7552681.6599819-.1152523.3394726-.0399631.7146672.1973349.9833946l2.977 3.412c-.267.309-.532.614-.791.91-.974 1.118-2 2.23-3.046 3.337l-4.2-3.6c-.2690133-.2485449-.6523779-.3301409-.9992902-.2126907-.3469124.1174502-.6018621.415153-.66456.7760016-.0626979.3608485.0768884.7271025.3638502.9546891l4.117 3.533c-1.315 1.345-2.685 2.675-4.093 3.99l-4.725-4.048c-.2715218-.2322227-.6463077-.3019501-.9831793-.1829166-.3368717.1190335-.5846503.4087439-.6500001.7600001-.0653497.3512561.0616575.7106939.3331794.9429165l4.55 3.894c-1.4 1.273-2.857 2.52-4.334 3.75-.0840051-.2267706-.1538069-.4585525-.209-.694-.4011847-2.3176237-2.5798838-3.8905859-4.906-3.542-.6498109.1317688-1.3251096-.0145721-1.8620778-.4035225-.5369682-.3889505-.8865429-.9849718-.9639222-1.6434775-.3956791-2.3200929-2.5801354-3.8932042-4.906-3.533-.2990527.032209-.6006079.0338843-.9.005 11.38-8.1 24.973-18.56 30.1-25.628 1.2497329-1.3192534 1.9876535-3.0411864 2.081-4.856.052-3.144-2.156-5.638-4.789-7.387 1.0986623.52852923 2.1165304 1.21069956 3.023 2.026 4.878 4.462 6.256 12.442 5.457 18.372z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                        <path id="Shape"
                                                            d="m23.969 19c4.091 0 10.919-1.174 12.678-4.88 1.194-2.516-.879-5.1-3.215-6.678-2.2044717-1.3965907-4.6319185-2.40518012-7.177-2.982-.778402-.19740877-1.6042675-.03956041-2.255.431-.3982804.28692111-.7127686.67493952-.911 1.124-6.945.227-12.089 2.953-12.089 6.485 0 4.715 7.876 6.5 12.969 6.5zm7.343-3.2.358-7.106c.2226667.13333333.4376667.26966667.645.409 3.756 2.532 3.677 4.942-1.003 6.697zm-6.456-8.717v-.019c.017091-.22037403.1305214-.42198743.31-.551.1701891-.12668716.3886521-.16934997.594-.116 1.3508165.33520878 2.6737454.77417913 3.957 1.313l-.438 8.706c-1.6840136.3905512-3.4072936.5865005-5.136.5840236zm-2.072.946-.639 8.9c-5.511-.398-9.145-2.538-9.145-4.429 0-1.977 3.965-4.19 9.784-4.471z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                        <path id="Shape"
                                                            d="m27 11c-.5522847 0-1 .4477153-1 1v1c0 .5522847.4477153 1 1 1s1-.4477153 1-1v-1c0-.5522847-.4477153-1-1-1z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                        <path id="Shape"
                                                            d="m16.625 49.219c-.4313344-.3451779-1.060822-.2753344-1.406.156-.3451779.4313344-.2753344 1.060822.156 1.406l5 4c.4313344.3451779 1.060822.2753344 1.406-.156.3451779-.4313344.2753344-1.060822-.156-1.406z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="mt-3">Jasa Tukang Ukur</div>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-4 mt-2 mb-2">

                            <a class="text-black" style="text-decoration: none" href="{{url('')}}/jasa-notaris">
                                <div class="card bg-white shadow p-4">
                                    <div class="card-body text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:svgjs="http://svgjs.com/svgjs" width="100px" x="0" y="0"
                                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                            xml:space="preserve" class="">
                                            <circle r="256" cx="256" cy="256" fill="#ffffff" shape="circle"></circle>
                                            <g transform="matrix(0.7,0,0,0.7,76.80001373291017,76.80002059936524)">
                                                <g>
                                                    <path
                                                        d="m416.652 358.622-67.31-20.727-10.825-21.648c-1.882-3.766-5.269-6.639-9.291-7.884-3.172-.981-6.585-.887-9.693.192v-16.899c25.014-17.396 42.619-44.741 47.02-76.253h4.457c14.618 0 27.156-10.862 28.544-24.728.778-7.771-1.764-15.53-6.974-21.287-.319-.352-.646-.694-.981-1.028v-64.667c0-57.176-46.516-103.693-103.693-103.693h-72.146c-13.014 0-24.578 6.318-31.793 16.046-.091-.003-.18-.014-.272-.014-35.076 0-63.613 28.537-63.613 63.613v89.276c-4.292 4.301-7.171 9.906-7.794 16.126-.779 7.771 1.762 15.531 6.972 21.289 5.214 5.762 12.659 9.067 20.426 9.067h5.598c4.399 31.521 22.003 58.869 47.022 76.263v16.889c-3.108-1.079-6.52-1.173-9.692-.192-4.022 1.244-7.409 4.118-9.292 7.884l-10.853 21.706-67.121 20.669c-23.468 7.227-39.235 28.58-39.235 53.135v92.743c0 4.143 3.358 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-92.743c0-17.93 11.513-33.522 28.649-38.799l20.4-6.282v9.565c0 12.976 10.557 23.533 23.532 23.533h6.884l-4.063 20.317c-1.799 8.998.399 18.312 6.033 25.556l49.355 63.457c1.479 1.901 3.69 2.896 5.925 2.896 1.609 0 3.23-.516 4.599-1.58 3.27-2.543 3.859-7.255 1.315-10.524l-49.355-63.457c-2.955-3.8-4.108-8.687-3.165-13.406l5.857-29.288c.44-2.203-.13-4.488-1.555-6.226-1.424-1.738-3.553-2.745-5.8-2.745h-16.032c-4.705 0-8.532-3.828-8.532-8.533v-14.184l28.952-8.915 85.235 154.972c1.318 2.396 3.836 3.886 6.572 3.886s5.253-1.489 6.572-3.886l85.259-155.014 28.928 8.908v14.234c0 4.705-3.828 8.533-8.532 8.533h-16.032c-2.247 0-4.375 1.007-5.8 2.745s-1.995 4.022-1.555 6.226l5.857 29.288c.944 4.72-.209 9.605-3.164 13.405l-49.355 63.457c-2.543 3.27-1.954 7.981 1.315 10.524 1.369 1.064 2.99 1.58 4.599 1.58 2.235 0 4.447-.994 5.925-2.896l49.356-63.457c5.634-7.244 7.833-16.559 6.033-25.556l-4.063-20.317h6.884c12.976 0 23.532-10.557 23.532-23.533v-9.615l20.56 6.331c17.136 5.277 28.649 20.869 28.649 38.799v92.744c0 4.143 3.358 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-92.743c0-24.555-15.767-45.908-39.235-53.135zm-136 85.35-4.672-42.017c3.07-2.69 5.465-6.185 6.822-10.255l1.708-5.123 15.279 13.096c1.184 1.015 2.5 1.821 3.892 2.43zm-72.491-41.87c1.392-.609 2.707-1.415 3.891-2.43l15.403-13.202 1.743 5.23c1.356 4.069 3.751 7.564 6.821 10.254l-4.698 42.257zm35.268-15.145-3.676-11.028 16.167-13.858 16.291 13.964-3.64 10.922c-1.163 3.489-4.416 5.834-8.094 5.834h-8.954c-3.678 0-6.931-2.345-8.094-5.834zm81.363-64.264c.21.065.284.213.309.262l10.493 20.986-25.261 44.206c-.036.063-.121.211-.36.252-.245.04-.369-.069-.424-.116l-40.563-34.769 55.403-30.78c.047-.026.191-.106.403-.041zm-147.768-291.192c-.541 2.604-.828 5.301-.828 8.063 0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5c0-13.544 11.019-24.564 24.564-24.564h72.146c48.906 0 88.693 39.788 88.693 88.693v56.995c-1.461-.24-2.946-.366-4.444-.366h-12.025c-4.705 0-8.532-3.828-8.532-8.547l-.04-20.221c-.03-15.096-10.815-28.103-25.646-30.928l-129.797-24.723c-6.911-1.315-13.985.501-19.406 4.987s-8.53 11.094-8.53 18.13v28.722c0 17.965-14.616 32.581-32.581 32.581-.174 0-.345.012-.516.023v-80.701c.001-24.541 18.284-44.88 41.942-48.144zm-17.813 168.386c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v.516h-4.524c-3.537 0-6.927-1.506-9.303-4.131-2.407-2.66-3.532-6.115-3.17-9.729.63-6.292 6.612-11.221 13.619-11.221 1.188 0 2.311-.276 3.309-.768 22.173-4.037 39.038-23.493 39.038-46.813v-28.721c0-2.551 1.127-4.947 3.093-6.573 1.965-1.626 4.53-2.286 7.036-1.808l129.797 24.723c7.779 1.481 13.437 8.304 13.452 16.223l.04 20.206c0 12.976 10.557 23.533 23.532 23.533h12.024c3.537 0 6.928 1.505 9.303 4.13 2.406 2.659 3.532 6.114 3.17 9.729-.63 6.292-6.612 11.222-13.619 11.222h-3.382v-.439c0-4.141-3.356-7.499-7.497-7.5-.001 0-.002 0-.003 0-4.14 0-7.497 3.354-7.5 7.495-.039 53.286-43.421 96.638-96.706 96.638-53.325-.002-96.709-43.386-96.709-96.712zm27.528 123.068c.024-.049.099-.197.309-.262.21-.063.355.015.403.042l16.389 9.105c3.622 2.013 8.188.707 10.199-2.914 2.012-3.621.707-8.187-2.914-10.199l-3.817-2.121v-16.156c14.706 7.138 31.2 11.147 48.614 11.147 17.411 0 33.905-4.012 48.612-11.153v16.163l-48.612 27.007-18.224-10.125c-3.622-2.011-8.187-.706-10.199 2.914-2.012 3.621-.707 8.187 2.914 10.199l12.443 6.913-40.564 34.77c-.055.047-.182.159-.424.116-.24-.042-.324-.189-.36-.252l-25.26-44.206zm69.181 165.983-12.051-21.911c.007-.052.019-.101.024-.153l6.574-59.124c.352.016.701.042 1.056.042h8.954c.354 0 .704-.026 1.055-.042l6.566 59.049z"
                                                        fill="#BF9742" data-original="#000000" class=""></path>
                                                    <path
                                                        d="m207.823 168.339c-4.142 0-7.5 3.358-7.5 7.5v8.016c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-8.016c0-4.142-3.358-7.5-7.5-7.5z"
                                                        fill="#BF9742" data-original="#000000" class=""></path>
                                                    <path
                                                        d="m304.017 168.339c-4.142 0-7.5 3.358-7.5 7.5v8.016c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-8.016c0-4.142-3.358-7.5-7.5-7.5z"
                                                        fill="#BF9742" data-original="#000000" class=""></path>
                                                    <path
                                                        d="m285.308 226.684c-2.91-2.949-7.659-2.98-10.606-.071-2.737 2.701-9.298 5.855-18.781 5.855s-16.043-3.154-18.781-5.855c-2.95-2.91-7.698-2.877-10.606.071-2.909 2.948-2.877 7.697.071 10.606 6.459 6.373 17.418 10.177 29.316 10.177s22.857-3.805 29.316-10.177c2.948-2.909 2.98-7.658.071-10.606z"
                                                        fill="#BF9742" data-original="#000000" class=""></path>
                                                    <path
                                                        d="m215.84 144.291h-16.033c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h16.033c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5z"
                                                        fill="#BF9742" data-original="#000000" class=""></path>
                                                    <path
                                                        d="m296.001 159.291h16.032c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-16.032c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5z"
                                                        fill="#BF9742" data-original="#000000" class=""></path>
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="mt-3">Jasa Notaris</div>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-4 mt-2 mb-2">

                            <a class="text-black" style="text-decoration: none" href="{{url('')}}/jasa-ppat">
                                <div class="card bg-white shadow p-4">
                                    <div class="card-body text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:svgjs="http://svgjs.com/svgjs" width="100px" x="0" y="0"
                                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                            xml:space="preserve" class="">
                                            <circle r="256" cx="256" cy="256" fill="#ffffff" shape="circle"></circle>
                                            <g transform="matrix(0.7,0,0,0.7,76.80001373291017,76.80002059936524)">
                                                <g>
                                                    <path
                                                        d="m416.652 358.622-67.31-20.727-10.825-21.648c-1.882-3.766-5.269-6.639-9.291-7.884-3.172-.981-6.585-.887-9.693.192v-16.899c25.014-17.396 42.619-44.741 47.02-76.253h4.457c14.618 0 27.156-10.862 28.544-24.728.778-7.771-1.764-15.53-6.974-21.287-.319-.352-.646-.694-.981-1.028v-64.667c0-57.176-46.516-103.693-103.693-103.693h-72.146c-13.014 0-24.578 6.318-31.793 16.046-.091-.003-.18-.014-.272-.014-35.076 0-63.613 28.537-63.613 63.613v89.276c-4.292 4.301-7.171 9.906-7.794 16.126-.779 7.771 1.762 15.531 6.972 21.289 5.214 5.762 12.659 9.067 20.426 9.067h5.598c4.399 31.521 22.003 58.869 47.022 76.263v16.889c-3.108-1.079-6.52-1.173-9.692-.192-4.022 1.244-7.409 4.118-9.292 7.884l-10.853 21.706-67.121 20.669c-23.468 7.227-39.235 28.58-39.235 53.135v92.743c0 4.143 3.358 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-92.743c0-17.93 11.513-33.522 28.649-38.799l20.4-6.282v9.565c0 12.976 10.557 23.533 23.532 23.533h6.884l-4.063 20.317c-1.799 8.998.399 18.312 6.033 25.556l49.355 63.457c1.479 1.901 3.69 2.896 5.925 2.896 1.609 0 3.23-.516 4.599-1.58 3.27-2.543 3.859-7.255 1.315-10.524l-49.355-63.457c-2.955-3.8-4.108-8.687-3.165-13.406l5.857-29.288c.44-2.203-.13-4.488-1.555-6.226-1.424-1.738-3.553-2.745-5.8-2.745h-16.032c-4.705 0-8.532-3.828-8.532-8.533v-14.184l28.952-8.915 85.235 154.972c1.318 2.396 3.836 3.886 6.572 3.886s5.253-1.489 6.572-3.886l85.259-155.014 28.928 8.908v14.234c0 4.705-3.828 8.533-8.532 8.533h-16.032c-2.247 0-4.375 1.007-5.8 2.745s-1.995 4.022-1.555 6.226l5.857 29.288c.944 4.72-.209 9.605-3.164 13.405l-49.355 63.457c-2.543 3.27-1.954 7.981 1.315 10.524 1.369 1.064 2.99 1.58 4.599 1.58 2.235 0 4.447-.994 5.925-2.896l49.356-63.457c5.634-7.244 7.833-16.559 6.033-25.556l-4.063-20.317h6.884c12.976 0 23.532-10.557 23.532-23.533v-9.615l20.56 6.331c17.136 5.277 28.649 20.869 28.649 38.799v92.744c0 4.143 3.358 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-92.743c0-24.555-15.767-45.908-39.235-53.135zm-136 85.35-4.672-42.017c3.07-2.69 5.465-6.185 6.822-10.255l1.708-5.123 15.279 13.096c1.184 1.015 2.5 1.821 3.892 2.43zm-72.491-41.87c1.392-.609 2.707-1.415 3.891-2.43l15.403-13.202 1.743 5.23c1.356 4.069 3.751 7.564 6.821 10.254l-4.698 42.257zm35.268-15.145-3.676-11.028 16.167-13.858 16.291 13.964-3.64 10.922c-1.163 3.489-4.416 5.834-8.094 5.834h-8.954c-3.678 0-6.931-2.345-8.094-5.834zm81.363-64.264c.21.065.284.213.309.262l10.493 20.986-25.261 44.206c-.036.063-.121.211-.36.252-.245.04-.369-.069-.424-.116l-40.563-34.769 55.403-30.78c.047-.026.191-.106.403-.041zm-147.768-291.192c-.541 2.604-.828 5.301-.828 8.063 0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5c0-13.544 11.019-24.564 24.564-24.564h72.146c48.906 0 88.693 39.788 88.693 88.693v56.995c-1.461-.24-2.946-.366-4.444-.366h-12.025c-4.705 0-8.532-3.828-8.532-8.547l-.04-20.221c-.03-15.096-10.815-28.103-25.646-30.928l-129.797-24.723c-6.911-1.315-13.985.501-19.406 4.987s-8.53 11.094-8.53 18.13v28.722c0 17.965-14.616 32.581-32.581 32.581-.174 0-.345.012-.516.023v-80.701c.001-24.541 18.284-44.88 41.942-48.144zm-17.813 168.386c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v.516h-4.524c-3.537 0-6.927-1.506-9.303-4.131-2.407-2.66-3.532-6.115-3.17-9.729.63-6.292 6.612-11.221 13.619-11.221 1.188 0 2.311-.276 3.309-.768 22.173-4.037 39.038-23.493 39.038-46.813v-28.721c0-2.551 1.127-4.947 3.093-6.573 1.965-1.626 4.53-2.286 7.036-1.808l129.797 24.723c7.779 1.481 13.437 8.304 13.452 16.223l.04 20.206c0 12.976 10.557 23.533 23.532 23.533h12.024c3.537 0 6.928 1.505 9.303 4.13 2.406 2.659 3.532 6.114 3.17 9.729-.63 6.292-6.612 11.222-13.619 11.222h-3.382v-.439c0-4.141-3.356-7.499-7.497-7.5-.001 0-.002 0-.003 0-4.14 0-7.497 3.354-7.5 7.495-.039 53.286-43.421 96.638-96.706 96.638-53.325-.002-96.709-43.386-96.709-96.712zm27.528 123.068c.024-.049.099-.197.309-.262.21-.063.355.015.403.042l16.389 9.105c3.622 2.013 8.188.707 10.199-2.914 2.012-3.621.707-8.187-2.914-10.199l-3.817-2.121v-16.156c14.706 7.138 31.2 11.147 48.614 11.147 17.411 0 33.905-4.012 48.612-11.153v16.163l-48.612 27.007-18.224-10.125c-3.622-2.011-8.187-.706-10.199 2.914-2.012 3.621-.707 8.187 2.914 10.199l12.443 6.913-40.564 34.77c-.055.047-.182.159-.424.116-.24-.042-.324-.189-.36-.252l-25.26-44.206zm69.181 165.983-12.051-21.911c.007-.052.019-.101.024-.153l6.574-59.124c.352.016.701.042 1.056.042h8.954c.354 0 .704-.026 1.055-.042l6.566 59.049z"
                                                        fill="#BF9742" data-original="#000000" class=""></path>
                                                    <path
                                                        d="m207.823 168.339c-4.142 0-7.5 3.358-7.5 7.5v8.016c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-8.016c0-4.142-3.358-7.5-7.5-7.5z"
                                                        fill="#BF9742" data-original="#000000" class=""></path>
                                                    <path
                                                        d="m304.017 168.339c-4.142 0-7.5 3.358-7.5 7.5v8.016c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-8.016c0-4.142-3.358-7.5-7.5-7.5z"
                                                        fill="#BF9742" data-original="#000000" class=""></path>
                                                    <path
                                                        d="m285.308 226.684c-2.91-2.949-7.659-2.98-10.606-.071-2.737 2.701-9.298 5.855-18.781 5.855s-16.043-3.154-18.781-5.855c-2.95-2.91-7.698-2.877-10.606.071-2.909 2.948-2.877 7.697.071 10.606 6.459 6.373 17.418 10.177 29.316 10.177s22.857-3.805 29.316-10.177c2.948-2.909 2.98-7.658.071-10.606z"
                                                        fill="#BF9742" data-original="#000000" class=""></path>
                                                    <path
                                                        d="m215.84 144.291h-16.033c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h16.033c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5z"
                                                        fill="#BF9742" data-original="#000000" class=""></path>
                                                    <path
                                                        d="m296.001 159.291h16.032c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-16.032c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5z"
                                                        fill="#BF9742" data-original="#000000" class=""></path>
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="mt-3">Jasa PPAT</div>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-4 mt-2 mb-2">

                            <a class="text-black" style="text-decoration: none" href="{{url('')}}/podcast-sengketa">
                                <div class="card bg-white shadow p-4">
                                    <div class="card-body text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:svgjs="http://svgjs.com/svgjs" width="100px" x="0" y="0"
                                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                            xml:space="preserve" class="">
                                            <circle r="256" cx="256" cy="256" fill="#f8f9fa" shape="circle"></circle>
                                            <g transform="matrix(0.7,0,0,0.7,76.80000000000001,76.80000457763674)">
                                                <g xmlns="http://www.w3.org/2000/svg" id="XMLID_81_">
                                                    <g id="XMLID_393_">
                                                        <path id="XMLID_433_"
                                                            d="m256 350.502c46.317 0 84-37.682 84-84v-155.502c0-27.061-13.158-52.623-35.199-68.378-4.495-3.212-10.74-2.172-13.95 2.32-3.212 4.493-2.174 10.739 2.319 13.951 9.158 6.546 16.298 15.315 20.904 25.275h-19.074c-5.522 0-10 4.477-10 10s4.478 10 10 10h24.625c.244 2.258.375 4.537.375 6.832v13.168h-25c-5.522 0-10 4.477-10 10s4.478 10 10 10h25v20h-25c-5.522 0-10 4.477-10 10s4.478 10 10 10h25v20h-128v-20h25c5.522 0 10-4.477 10-10s-4.478-10-10-10h-25v-20h25c5.522 0 10-4.477 10-10s-4.478-10-10-10h-25v-13.168c0-2.295.131-4.574.375-6.832h24.625c5.522 0 10-4.477 10-10s-4.478-10-10-10h-19.078c4.638-10.03 11.846-18.849 21.101-25.412 4.505-3.195 5.566-9.437 2.371-13.942-3.194-4.504-9.436-5.566-13.941-2.372-22.2 15.746-35.453 41.374-35.453 68.558v155.502c0 46.318 37.683 84 84 84zm-64-126.334h128v42.334c0 35.29-28.71 64-64 64s-64-28.71-64-64z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                        <path id="XMLID_442_"
                                                            d="m370 256.502c-5.522 0-10 4.477-10 10 0 57.346-46.654 104-104 104s-104-46.654-104-104c0-5.523-4.478-10-10-10s-10 4.477-10 10c0 58.032 40.074 106.873 94 120.323v34.269c-28.346 1.604-50.917 25.166-50.917 53.906 0 5.523 4.478 10 10 10h141.834c5.522 0 10-4.477 10-10 0-28.741-22.571-52.302-50.917-53.906v-34.269c53.926-13.45 94-62.291 94-120.323 0-5.523-4.478-10-10-10zm-54.583 208.498h-118.834c4.28-13.883 17.23-24 32.5-24h53.834c15.27 0 28.22 10.117 32.5 24zm-49.417-74.498v30.498h-20v-30.498z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                        <path id="XMLID_444_"
                                                            d="m10 104.79c-5.522 0-10 4.477-10 10v130.168c0 5.523 4.478 10 10 10s10-4.477 10-10v-130.168c0-5.523-4.478-10-10-10z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                        <path id="XMLID_445_"
                                                            d="m102 104.79c-5.522 0-10 4.477-10 10v130.168c0 5.523 4.478 10 10 10s10-4.477 10-10v-130.168c0-5.523-4.478-10-10-10z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                        <path id="XMLID_446_"
                                                            d="m56 49.914c-5.522 0-10 4.477-10 10v239.92c0 5.523 4.478 10 10 10s10-4.477 10-10v-239.92c0-5.523-4.478-10-10-10z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                        <path id="XMLID_447_"
                                                            d="m502 104.79c-5.522 0-10 4.477-10 10v130.168c0 5.523 4.478 10 10 10s10-4.477 10-10v-130.168c0-5.523-4.478-10-10-10z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                        <path id="XMLID_448_"
                                                            d="m410 104.79c-5.522 0-10 4.477-10 10v130.168c0 5.523 4.478 10 10 10s10-4.477 10-10v-130.168c0-5.523-4.478-10-10-10z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                        <path id="XMLID_449_"
                                                            d="m456 49.914c-5.522 0-10 4.477-10 10v239.92c0 5.523 4.478 10 10 10s10-4.477 10-10v-239.92c0-5.523-4.478-10-10-10z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                        <path id="XMLID_450_"
                                                            d="m256 286.84c2.63 0 5.21-1.07 7.069-2.93 1.86-1.87 2.931-4.44 2.931-7.07s-1.07-5.21-2.931-7.08c-1.859-1.86-4.439-2.93-7.069-2.93s-5.21 1.07-7.07 2.93c-1.86 1.87-2.93 4.44-2.93 7.08 0 2.63 1.069 5.2 2.93 7.07 1.86 1.86 4.44 2.93 7.07 2.93z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                        <path id="XMLID_451_"
                                                            d="m256.13 47c2.63 0 5.21-1.07 7.07-2.93 1.859-1.86 2.93-4.44 2.93-7.07s-1.07-5.21-2.93-7.07-4.44-2.93-7.07-2.93c-2.64 0-5.21 1.07-7.08 2.93-1.86 1.86-2.92 4.44-2.92 7.07s1.06 5.21 2.92 7.07c1.87 1.86 4.44 2.93 7.08 2.93z"
                                                            fill="#BF9742" data-original="#000000" class=""></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="mt-3">Podcast Sengketa</div>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-4 mt-2 mb-2">

                            <a class="text-black" style="text-decoration: none" href="https://mitra.atrbpn.go.id">
                                <div class="card bg-white shadow p-4">
                                    <div class="card-body text-center">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Logo_BPN-KemenATR_%282017%29.png"
                                            class="p-2" width="100px" alt="">
                                        <div class="mt-3">Mitra BPN</div>
                                    </div>
                                </div>
                            </a>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row px-1">
            <div class="col-md-12 text-center">
                <h3 class="text-brown" style="font-weight: 700">Frequently Asked Questions</h3>
            </div>

            <div class="col-md-12 mt-4">
                <div class="d-flex" style="height: 50%">
                    <div class="flex-shrink-0 text-center mx-4">
                        <h1 class="mb-0"><i class="fa-solid fa-circle-question text-brown"></i></h1>
                        <div class="vr" style="border-color: #61481C; opacity: 1; height: 100%; width: 2px;"></div>
                    </div>
                    <div class="flex-grow-1 mt-1">
                        <h6 class="fw-bold text-brown" style="z-index: 100000">Renovasi seperti apa yang dilakukan oleh
                            Rumalaku?</h6>
                        <p style="font-size: 14px">Renovasi yang dilakukan merupakan renovasi minor seperti pengecatan
                            kembali hingga renovasi kecil lainnya menyesuaikan dengan kebutuhan rumah yang dijual.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-4">
                <div class="d-flex" style="height: 50%">
                    <div class="flex-shrink-0 text-center mx-4">
                        <h1 class="mb-0"><i class="fa-solid fa-circle-question text-brown"></i></h1>
                        <div class="vr" style="border-color: #61481C; opacity: 1; height: 100%; width: 2px;"></div>
                    </div>
                    <div class="flex-grow-1 mt-1">
                        <h6 class="fw-bold text-brown" style="z-index: 100000">Apakah penjual perlu mengembalikan dana
                            renovasi?</h6>
                        <p style="font-size: 14px">Penjual akan mengembalikan dana renovasi setelah rumah berhasil
                            terjual melalui perantara lain atau pribadi (bukan melalui Rumalaku). Jika terjual melalui
                            Rumalaku, dana renovasi akan dipotong dari harga jual.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-4">
                <div class="d-flex" style="height: 50%">
                    <div class="flex-shrink-0 text-center mx-4">
                        <h1 class="mb-0"><i class="fa-solid fa-circle-question text-brown"></i></h1>
                        <div class="vr" style="border-color: #61481C; opacity: 1; height: 100%; width: 2px;"></div>
                    </div>
                    <div class="flex-grow-1 mt-1">
                        <h6 class="fw-bold text-brown" style="z-index: 100000">Renovasi seperti apa yang dilakukan oleh
                            Rumalaku?</h6>
                        <p style="font-size: 14px">Renovasi yang dilakukan merupakan renovasi minor seperti pengecatan
                            kembali hingga renovasi kecil lainnya menyesuaikan dengan kebutuhan rumah yang dijual.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kenapa Sengketatanah.id -->
        <div class="ps-4 mt-5" style="margin-bottom:-20px">
            <h5>
                Kenapa <a href="sengketatanah.id" class="text-primary"
                    style="text-decoration: none">Sengketatanah.id</a> ?
            </h5>
        </div>
        <div class="row justify-content-between p-4" id="row-why" style="margin-bottom:30px;">
            <div class="col-sm col-lg-3">
                <div class="card border-0 mt-3 shadow p-1">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.com/svgjs" width="62px" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <circle r="256" cx="256" cy="256" fill="#61481c" shape="circle"></circle>
                            <g transform="matrix(0.7,0,0,0.7,76.8000016629696,76.80000228881838)">
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="453.185" cy="371.168" r="10" fill="#ffffff" data-original="#000000"
                                        class=""></circle>
                                    <path
                                        d="m511.701 288.728c-.65-2.59-2.34-4.84-4.64-6.189l-77.268-45.564c-.629-1.691-1.389-3.347-2.292-4.951-2.154-3.828-4.982-7.131-8.298-9.842-.924-3.345-4.99-11.879-5.889-13.299 1.59-8.019.292-16.25-3.768-23.462-4.027-7.154-10.339-12.557-17.982-15.461 4.05-9.376 3.982-20.328-1.145-29.827-4.522-8.378-12.104-14.421-21.35-17.017-2.871-.806-5.788-1.244-8.698-1.322.672-6.927-.783-13.884-4.275-20.087-4.555-8.091-12.03-13.94-21.049-16.472-8.959-2.515-18.383-1.455-26.549 2.984-.998.53-18.363 9.755-42.912 22.952-19.735-11.604-51.53-30.263-51.53-30.263-5.438-3.21-11.642-4.908-17.941-4.908-12.199 0-23.69 6.406-29.99 16.722-4.825 7.909-6.251 17.202-4.015 26.167.023.092.051.18.075.272-8.985 2.157-16.943 7.779-21.801 15.743-4.828 7.907-6.256 17.2-4.021 26.166.022.09.05.177.073.266-8.983 2.158-16.941 7.778-21.806 15.742-4.312 7.061-5.901 15.228-4.599 23.282-1.608 1.572-3.108 3.174-4.492 4.797-6.837 2.795-12.75 7.69-16.662 14.095-3.499 5.731-5.202 12.192-5.027 18.729l-78.611 42.756c-2.357 1.276-4.104 3.445-4.847 6.021-.743 2.575-.421 5.342.894 7.678l76.814 136.467c1.835 3.26 5.227 5.097 8.723 5.097 1.631 0 3.286-.4 4.814-1.242l53.281-29.336c2.339-1.288 4.066-3.457 4.796-6.025s.402-5.322-.91-7.647l-10-17.726 25.171-13.904c14.723 7.383 30.526 11.083 46.561 11.083 17.355 0 34.975-4.332 51.761-12.969 13.128 5.181 26.594 7.77 39.936 7.77 14.842 0 29.526-3.207 43.397-9.582l24.641 14.747-10.622 17.37c-1.38 2.27-1.81 5.04-1.17 7.62.63 2.569 2.3 4.83 4.58 6.189l52.21 31.15c1.55.92 3.32 1.41 5.12 1.41 3.51 0 6.71-1.79 8.54-4.79l9.35-15.33c2.87-4.71 1.38-10.88-3.33-13.75-1.57-.96-3.36-1.46-5.2-1.46-3.52 0-6.71 1.79-8.54 4.79l-4.2 6.88-35.02-20.9 71.11-116.299 35.07 20.58-20.08 32.91c-2.88 4.71-1.38 10.87 3.32 13.75 1.57.96 3.37 1.46 5.2 1.46 3.52 0 6.72-1.79 8.55-4.79v-.01l25.38-41.58c1.392-2.28 1.812-5.061 1.162-7.641zm-121.064 2.615s23.041-12.007 23.097-12.038c7.69-4.198 13.393-10.916 16.238-19.052l5.865 3.433-55.159 90.401-20.765-12.428c-.001 0 30.583-50.025 30.724-50.316zm-207.442-188.202c2.732-4.471 7.561-7.141 12.92-7.141 2.723 0 5.409.736 7.764 2.128l19.043 11.263c3.433 2.03 5.845 5.241 6.792 9.041.929 3.728.332 7.598-1.682 10.895v.001c-1.094 1.791-2.544 3.264-4.205 4.404-.918.499-1.827.993-2.739 1.488-4.138 1.734-9.02 1.685-13.201-.559l-19.581-11.573c-.001 0-.002-.001-.003-.002-3.43-2.031-5.841-5.24-6.788-9.037-.931-3.732-.333-7.607 1.68-10.908zm-25.739 42.18c2.73-4.476 7.555-7.147 12.905-7.147 2.724 0 5.409.736 7.764 2.129l33.33 19.703c3.432 2.029 5.844 5.241 6.792 9.044.93 3.731.333 7.604-1.681 10.903v.001c-4.1 6.717-13.105 9.095-20.125 5.343l-33.889-20.036c-3.428-2.027-5.837-5.234-6.784-9.029-.929-3.731-.331-7.604 1.688-10.911zm-25.756 42.179c2.695-4.412 7.646-7.153 12.919-7.153 2.716 0 5.398.736 7.752 2.128l34.286 20.272c3.432 2.029 5.844 5.241 6.792 9.044.93 3.731.333 7.604-1.681 10.903-4.265 6.981-13.537 9.229-20.673 5.012l-34.284-20.271c-3.433-2.03-5.845-5.241-6.792-9.041-.93-3.728-.332-7.598 1.681-10.894zm13.972 48.411c3.433 2.029 5.844 5.242 6.792 9.044.93 3.732.333 7.604-1.681 10.902v.001c-4.267 6.987-13.547 9.241-20.683 5.023l-19.043-11.263c-3.432-2.029-5.844-5.241-6.792-9.044-.93-3.731-.333-7.603 1.681-10.901 2.695-4.412 7.646-7.153 12.919-7.153 2.723 0 5.408.736 7.764 2.129zm-55.002 176.549-66.969-118.975 35.779-19.372 66.941 118.662zm38.308-55.857-52.004-92.184 13.35-7.206c2.767 3.846 6.329 7.123 10.553 9.621l7.94 4.696 41.397 73.343zm42.214-15.252-32.953-58.381c11.727-.143 23.134-6.078 29.613-16.69v.001c3.188-5.221 4.883-11.049 5.029-16.987 1.969.335 3.951.519 5.927.519 11.872 0 23.473-5.958 30.029-16.696 4.826-7.903 6.253-17.195 4.018-26.162-.081-.323-.175-.641-.265-.961 8.492-2.212 16.14-7.583 21.045-15.619 4.826-7.903 6.253-17.195 4.018-26.162-1.095-4.396-3.01-8.449-5.61-12.007.894-.488 85.678-46.238 85.877-46.344.034-.018.068-.036.102-.055 3.571-1.949 7.697-2.416 11.62-1.314 3.883 1.09 7.088 3.585 9.025 7.026 1.897 3.371 2.356 7.272 1.291 10.986-1.092 3.809-3.644 6.975-7.187 8.917l-.025.014c-.003.001-.005.003-.008.005l-55.702 30.4c-4.848 2.646-6.633 8.72-3.987 13.568 1.816 3.326 5.246 5.211 8.787 5.211 1.619 0 3.261-.395 4.782-1.225l65.425-35.708c3.571-1.948 7.699-2.415 11.62-1.314 3.98 1.117 7.231 3.695 9.155 7.26 3.766 6.977.829 15.929-6.525 19.943l-64.951 35.448c-4.847 2.647-6.631 8.723-3.984 13.569 1.816 3.326 5.246 5.21 8.786 5.21 1.619 0 3.262-.395 4.784-1.225l60.627-33.103c3.55-1.91 7.642-2.363 11.538-1.27 3.883 1.09 7.088 3.585 9.025 7.026 1.897 3.37 2.356 7.271 1.291 10.985-1.095 3.818-3.656 6.99-7.159 8.902l-61.21 31.448c-4.918 2.513-6.868 8.537-4.354 13.455 1.769 3.461 5.275 5.451 8.913 5.451 1.531 0 3.085-.353 4.542-1.098l55.475-28.355c3.526-1.863 7.577-2.297 11.432-1.214 3.883 1.09 7.088 3.585 9.025 7.026 1.897 3.37 2.356 7.271 1.292 10.985-1.087 3.791-3.62 6.945-7.137 8.891l-148.579 77.422c-.057.029-.114.06-.17.091-28.16 15.374-57.984 16.098-84.287 2.131zm116.899 3.428 68.213-35.545-17.239 28.178c-16.063 7.808-33.577 10.276-50.974 7.367z"
                                        fill="#ffffff" data-original="#000000" class=""></path>
                                </g>
                            </g>
                        </svg>
                        <h6 class="mt-1">
                            <b>
                                Membantu Korban Sengketa
                            </b>
                        </h6>
                        <p style="font-size: small;">
                            Kami mempertemukan korban sengketa tanah yang membutuhkan bantuan pendanaan sponsor,
                            pengacara atau pemerintah.
                        </p>
                        <a href="{{url('')}}/bidding-sponsor" class="text-info"
                            style="text-decoration:none">Bergabung</a>
                    </div>
                </div>
            </div>
            <div class="col-sm col-lg-3">
                <div class="card border-0 mt-3 shadow p-1">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.com/svgjs" width="62px" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <circle r="256" cx="256" cy="256" fill="#61481c" shape="circle"></circle>
                            <g transform="matrix(0.7,0,0,0.7,76.79999542236328,76.7997756958008)">
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M404.267,315.41c-10.048-20.949-45.995-50.027-80.725-78.123c-19.371-15.659-37.675-30.464-49.344-42.133    c-2.923-2.944-7.296-3.883-11.157-2.496c-7.189,2.603-11.627,4.608-15.125,6.165c-5.333,2.389-7.125,3.2-14.315,3.925    c-3.179,0.32-6.037,2.027-7.808,4.672c-15.083,22.549-30.699,20.629-41.131,17.131c-3.328-1.109-3.925-2.539-4.245-3.904    c-2.24-9.365,9.003-31.168,23.573-45.739c34.667-34.688,52.544-43.371,90.304-26.496c42.837,19.157,85.76,34.155,86.187,34.304    c5.611,1.941,11.648-1.003,13.589-6.571c1.92-5.568-1.003-11.648-6.571-13.589c-0.427-0.149-42.496-14.848-84.48-33.643    c-48.917-21.867-75.755-7.467-114.091,30.891c-14.592,14.592-34.411,44.117-29.291,65.771c2.197,9.216,8.683,16.043,18.325,19.221    c24.171,7.979,46.229,0.341,62.656-21.461c6.784-1.045,10.475-2.581,16.021-5.077c2.005-0.896,4.352-1.941,7.467-3.2    c12.203,11.456,28.672,24.789,46.016,38.805c31.36,25.365,66.923,54.123,74.923,70.763c3.947,8.213-0.299,13.568-3.179,16.021    c-4.224,3.627-10.005,4.779-13.141,2.581c-3.456-2.368-7.957-2.517-11.52-0.384c-3.584,2.133-5.589,6.165-5.141,10.304    c0.725,6.784-5.483,10.667-8.171,12.011c-6.827,3.456-13.952,2.859-16.619,0.384c-2.987-2.773-7.275-3.584-11.072-2.176    c-3.797,1.429-6.443,4.928-6.827,8.981c-0.64,6.997-5.824,13.717-12.587,16.341c-3.264,1.237-8,1.984-12.245-1.899    c-2.645-2.389-6.315-3.307-9.749-2.475c-3.477,0.853-6.272,3.371-7.488,6.72c-0.405,1.067-1.323,3.627-11.307,3.627    c-7.104,0-19.883-4.8-26.133-8.939c-7.488-4.928-54.443-39.957-94.997-73.92c-5.696-4.8-15.552-15.083-24.256-24.171    c-7.723-8.064-14.784-15.381-18.411-18.453c-4.544-3.84-11.264-3.264-15.04,1.259c-3.797,4.501-3.243,11.243,1.259,15.04    c3.307,2.795,9.707,9.557,16.768,16.917c9.515,9.941,19.349,20.224,25.963,25.771c39.723,33.259,87.467,69.163,96.981,75.413    c7.851,5.163,24.768,12.416,37.867,12.416c10.517,0,18.603-2.411,24.213-7.125c7.509,2.923,16.043,2.944,24.256-0.256    c9.707-3.755,17.685-11.328,22.208-20.501c8.405,1.792,18.027,0.533,26.773-3.861c8.555-4.309,14.741-10.901,17.813-18.603    c8.491,0.448,17.237-2.56,24.469-8.768C407.979,346.407,411.349,330.109,404.267,315.41z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M213.333,138.663h-96c-5.888,0-10.667,4.779-10.667,10.667s4.779,10.667,10.667,10.667h96    c5.888,0,10.667-4.779,10.667-10.667S219.221,138.663,213.333,138.663z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M435.52,292.711c-3.307-4.885-9.92-6.229-14.805-2.901l-31.189,20.949c-4.885,3.285-6.187,9.92-2.901,14.805    c2.069,3.051,5.44,4.715,8.875,4.715c2.027,0,4.096-0.576,5.931-1.813l31.189-20.949    C437.504,304.231,438.805,297.597,435.52,292.711z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M369.301,343.613c-7.637-6.016-41.792-40.981-62.912-62.997c-4.075-4.267-10.837-4.416-15.083-0.32    c-4.267,4.075-4.395,10.837-0.32,15.083c5.483,5.717,53.845,56.128,65.088,65.003c1.941,1.536,4.288,2.283,6.592,2.283    c3.136,0,6.272-1.408,8.405-4.075C374.72,353.981,373.931,347.261,369.301,343.613z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M326.677,365.01c-12.779-10.219-44.885-44.331-52.139-52.224c-4.011-4.352-10.731-4.608-15.083-0.64    c-4.331,3.989-4.629,10.752-0.64,15.083c0.384,0.405,38.699,41.771,54.528,54.443c1.963,1.557,4.331,2.325,6.656,2.325    c3.115,0,6.229-1.387,8.341-3.989C332.011,375.399,331.264,368.679,326.677,365.01z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M284.224,386.493c-15.211-12.821-46.336-45.952-52.416-52.459c-4.032-4.309-10.795-4.544-15.083-0.512    c-4.309,4.032-4.523,10.773-0.512,15.083c8.747,9.365,38.528,40.939,54.251,54.208c2.005,1.685,4.437,2.517,6.869,2.517    c3.029,0,6.059-1.301,8.171-3.797C289.301,397.01,288.725,390.29,284.224,386.493z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M124.672,120.253C106.389,102.93,33.28,97.319,11.307,96.018c-3.029-0.149-5.824,0.853-7.957,2.88    C1.216,100.903,0,103.719,0,106.663v192c0,5.888,4.779,10.667,10.667,10.667h64c4.608,0,8.704-2.965,10.133-7.36    c1.557-4.779,38.315-117.589,43.157-173.056C128.235,125.671,127.04,122.471,124.672,120.253z M66.88,287.997H21.333V118.098    c34.283,2.709,71.275,8.597,84.715,15.125C100.395,179.943,74.816,262.951,66.88,287.997z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M501.333,117.33c-83.755,0-130.219,21.44-132.16,22.336c-2.773,1.301-4.843,3.712-5.696,6.635s-0.427,6.059,1.173,8.661    c13.184,21.227,54.464,139.115,62.4,167.872c1.28,4.629,5.483,7.829,10.283,7.829h64c5.888,0,10.667-4.779,10.667-10.667v-192    C512,122.087,507.221,117.33,501.333,117.33z M490.667,309.33h-45.355c-10.112-32.939-39.979-118.827-56.64-154.325    c16.277-5.525,51.243-15.019,101.995-16.213V309.33z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                            </g>
                        </svg>
                        <h6 class="mt-1">
                            <b>
                                Membantu Kerjasama Lahan
                            </b>
                        </h6>
                        <p style="font-size: small;">
                            Kami membantu para pemilik lahan tidur di seluruh Indonesia untuk di kerjasamakan agar bisa
                            produktif dan menghasilkan manfaat.
                        </p>
                        <a href="{{url('')}}/kerjasama-lahan" class="text-info"
                            style="text-decoration:none">Bergabung</a>
                    </div>
                </div>
            </div>
            <div class="col-sm col-lg-3">
                <div class="card border-0 mt-3 shadow p-1">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.com/svgjs" width="62" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <circle r="256" cx="256" cy="256" fill="#61481c" shape="circle"></circle>
                            <g transform="matrix(0.7,0,0,0.7,76.79991760253907,76.80000457763674)">
                                <path xmlns="http://www.w3.org/2000/svg"
                                    d="m269.833 141.018c0-74.393-60.523-134.917-134.916-134.917s-134.917 60.524-134.917 134.917 60.523 134.917 134.917 134.917 134.916-60.524 134.916-134.917zm-253.833 0c0-65.571 53.346-118.917 118.917-118.917 65.57 0 118.916 53.346 118.916 118.917s-53.346 118.917-118.916 118.917c-65.571-.001-118.917-53.347-118.917-118.917zm118.917 69.326c-4.418 0-8-3.582-8-8v-6.387c-15.416-2.651-27.313-12.734-30.853-26.935-1.069-4.287 1.54-8.629 5.827-9.698 4.29-1.069 8.629 1.54 9.698 5.827 2.94 11.792 14.981 15.699 24.404 15.488 8.178-.195 15.821-3.05 19.474-7.273 2.085-2.41 2.856-5.174 2.429-8.698-.7-5.764-4.081-12.805-24.186-16.105-27.651-4.54-34.1-18.794-34.642-29.953-.75-15.446 9.993-28.375 26.733-32.172.37-.084.741-.163 1.116-.236v-6.512c0-4.418 3.582-8 8-8s8 3.582 8 8v6.442c11.333 2.109 22.3 8.991 27.908 22.347 1.71 4.074-.205 8.763-4.279 10.473-4.075 1.71-8.763-.206-10.473-4.279-4.951-11.791-16.994-14.841-26.733-12.632-7.2 1.633-14.735 6.639-14.291 15.792.153 3.157.56 11.542 21.252 14.94 8.54 1.402 34.527 5.668 37.477 29.965.969 7.982-1.179 15.276-6.211 21.093-5.515 6.377-14.447 10.753-24.65 12.249v6.262c0 4.421-3.582 8.002-8 8.002zm104.913-69.326c0-57.85-47.064-104.914-104.914-104.914s-104.914 47.064-104.914 104.914 47.064 104.914 104.914 104.914 104.914-47.065 104.914-104.914zm-193.828 0c0-49.027 39.887-88.914 88.914-88.914s88.914 39.887 88.914 88.914-39.886 88.914-88.914 88.914-88.914-39.887-88.914-88.914zm255.255-9.999 64.346 47.208c2.431 1.784 5.659 2.05 8.348.686 2.689-1.362 4.385-4.121 4.385-7.136v-16.312c34.256 1.036 66.152 9.809 77.423 53.699.814 3.172 3.48 5.527 6.728 5.945.342.044.684.065 1.023.065 2.877 0 5.567-1.553 6.99-4.114 13.761-24.763 13.545-53.877-.577-77.88-16.529-28.095-49.646-44.917-91.588-46.807v-15.659c0-3.107-1.799-5.934-4.615-7.249-2.815-1.314-6.137-.88-8.52 1.114l-64.346 53.854c-1.885 1.578-2.939 3.934-2.861 6.39.079 2.458 1.282 4.742 3.264 6.196zm61.078-43.177v6.353c0 4.418 3.582 8 8 8 39.907 0 71.179 14.25 85.798 39.098 7.762 13.193 10.221 28.354 7.361 42.989-8.232-16.167-20.563-28.027-36.835-35.385-18.602-8.412-38.911-9.546-56.324-9.546-4.418 0-8 3.582-8 8v8.634l-43.386-31.831zm-131.882 325.807-64.346-47.207c-2.43-1.783-5.658-2.048-8.348-.686-2.689 1.362-4.385 4.121-4.385 7.136v16.312c-34.256-1.036-66.152-9.809-77.423-53.699-.814-3.172-3.48-5.527-6.728-5.945-3.246-.417-6.422 1.186-8.013 4.049-13.761 24.763-13.545 53.877.577 77.88 16.529 28.095 49.646 44.917 91.588 46.807v15.659c0 3.107 1.799 5.934 4.615 7.249 1.081.504 2.236.751 3.384.751 1.843 0 3.668-.636 5.136-1.865l64.346-53.855c1.885-1.578 2.939-3.934 2.861-6.391-.079-2.457-1.282-4.741-3.264-6.195zm-61.078 43.178v-6.353c0-4.418-3.582-8-8-8-39.907 0-71.179-14.25-85.798-39.098-7.762-13.193-10.221-28.354-7.361-42.989 8.232 16.167 20.563 28.027 36.835 35.385 18.602 8.412 38.911 9.546 56.324 9.546 4.418 0 8-3.582 8-8v-8.634l43.386 31.831zm340.88.81c-8.404-27.138-25.618-51.508-48.473-68.622-13.268-9.935-27.957-17.24-43.526-21.739 20.86-12.79 34.807-35.8 34.807-62.011 0-40.081-32.608-72.688-72.689-72.688s-72.689 32.608-72.689 72.688c0 26.21 13.947 49.22 34.807 62.01-15.57 4.499-30.259 11.804-43.527 21.739-22.855 17.114-40.07 41.484-48.473 68.622-3.59 11.589-1.601 23.351 5.599 33.118 7.199 9.766 17.846 15.145 29.979 15.145h188.608c12.133 0 22.779-5.379 29.979-15.145 7.198-9.767 9.187-21.528 5.598-33.117zm-186.57-152.372c0-31.258 25.431-56.688 56.689-56.688s56.689 25.43 56.689 56.688c0 31.255-25.425 56.683-56.679 56.689-.004 0-.008 0-.012 0-.003 0-.007 0-.01 0-31.252-.006-56.677-25.434-56.677-56.689zm168.091 175.995c-4.166 5.652-10.079 8.639-17.1 8.639h-188.607c-7.021 0-12.934-2.987-17.1-8.639-4.167-5.652-5.271-12.184-3.194-18.891 15.634-50.489 61.683-84.411 114.587-84.415h.011.01c52.904.005 98.952 33.927 114.587 84.416 2.078 6.706.973 13.237-3.194 18.89z"
                                    fill="#ffffff" data-original="#000000" class=""></path>
                            </g>
                        </svg>
                        <h6 class="mt-1">
                            <b>
                                Membantu Jual Beli Lahan
                            </b>
                        </h6>
                        <p style="font-size: small;">
                            Jual dan beli lahan lebih mudah dan cepat di seluruh wilayah Indonesia dengan platform
                            sengketatanah.id yang efisien dan praktis.
                        </p>
                        <a href="{{url('')}}/jual-beli-lahan" class="text-info"
                            style="text-decoration:none">Bergabung</a>
                    </div>
                </div>
            </div>
            <div class="col-sm col-lg-3">
                <div class="card border-0 mt-3 shadow p-1">
                    <div class="card-body">
                        <div class="icon-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                width="62" x="0" y="0" viewBox="0 0 479.976 479.976"
                                style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                <circle r="239.988" cx="239.988" cy="239.988" fill="#61481c" shape="circle"></circle>
                                <g transform="matrix(0.7,0,0,0.7,71.99629760161042,71.99643859863284)">
                                    <g xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M279.339,144.016c-3.789-18.657-20.202-32.059-39.24-32.04c-13.255,0-24-10.745-24-24s10.745-24,24-24s24,10.745,24,24h16    c-0.024-19.001-13.389-35.373-32-39.2v-16.8h-16v16.8c-21.65,4.396-35.636,25.51-31.24,47.16    c3.789,18.657,20.202,32.059,39.24,32.04c13.255,0,24,10.745,24,24s-10.745,24-24,24s-24-10.745-24-24h-16    c0.024,19.001,13.389,35.373,32,39.2v16.8h16v-16.8C269.748,186.779,283.735,165.665,279.339,144.016z"
                                                fill="#ffffff" data-original="#000000" class=""></path>
                                        </g>
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M360.098,119.976C360.085,53.701,306.348-0.014,240.074,0C173.8,0.014,120.085,53.75,120.098,120.025    c0.012,57.014,40.138,106.148,96,117.551v82.4h-8c-1.959,0.002-3.849,0.722-5.312,2.024l-72,64    c-1.708,1.517-2.686,3.692-2.688,5.976v80c0,4.418,3.582,8,8,8h152c13.197,0.058,23.943-10.593,24.002-23.79    c0.027-5.995-2.201-11.781-6.242-16.21c8.32-9.044,8.32-22.956,0-32c8.32-9.044,8.32-22.956,0-32    c8.894-9.75,8.2-24.864-1.55-33.758c-4.429-4.04-10.215-6.268-16.21-6.242h-9.472c-2.42-6.776-7.753-12.108-14.528-14.528v-83.872    C319.936,226.099,360.033,176.98,360.098,119.976z M240.098,387.975v-20h-16v20c0.014,9.117,4.475,17.654,11.952,22.872    c-6.026,9.08-5.082,21.1,2.288,29.128c-6.019,6.444-7.878,15.737-4.8,24h-89.44v-68.408l67.04-59.592h44.96c4.418,0,8,3.582,8,8    v44c0,6.627-5.373,12-12,12C245.471,399.975,240.098,394.603,240.098,387.975z M232.098,319.975v-80.408    c2.656,0.176,5.296,0.408,8,0.408s5.344-0.232,8-0.408v80.408H232.098z M288.098,463.975h-32c-4.418,0-8-3.582-8-8s3.582-8,8-8h32    c4.418,0,8,3.582,8,8S292.517,463.975,288.098,463.975z M280.098,351.975h8c4.418,0,8,3.582,8,8s-3.582,8-8,8h-8V351.975z     M280.098,387.975v-4h8c4.418,0,8,3.582,8,8s-3.582,8-8,8H277.29C279.115,396.237,280.075,392.136,280.098,387.975z     M288.098,415.975c4.418,0,8,3.582,8,8s-3.582,8-8,8h-32c-4.418,0-8-3.582-8-8s3.582-8,8-8H288.098z M240.098,223.975    c-57.41-0.066-103.934-46.59-104-104c0-57.438,46.562-104,104-104s104,46.562,104,104S297.536,223.975,240.098,223.975z"
                                                fill="#ffffff" data-original="#000000" class=""></path>
                                        </g>
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M72.098,311.975c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8h16c-0.042-10.134-6.445-19.15-16-22.528v-9.472h-16v9.472    c-12.473,4.393-19.023,18.066-14.629,30.539c3.38,9.596,12.455,16.009,22.629,15.989c4.418,0,8,3.582,8,8s-3.582,8-8,8    s-8-3.582-8-8h-16c0.042,10.134,6.445,19.15,16,22.528v9.472h16v-9.472c12.473-4.393,19.023-18.066,14.629-30.539    C91.348,318.369,82.272,311.956,72.098,311.975z"
                                                fill="#ffffff" data-original="#000000" class=""></path>
                                        </g>
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M72.124,247.949c-39.765-0.014-72.012,32.209-72.026,71.974c-0.013,36.679,27.548,67.505,64,71.58v88.472h16v-88.472    c36.414-4.108,63.95-34.883,64-71.528C144.113,280.211,111.889,247.964,72.124,247.949z M72.098,375.975    c-30.928,0-56-25.072-56-56c0-30.928,25.072-56,56-56c30.928,0,56,25.072,56,56C128.059,350.887,103.01,375.936,72.098,375.975z"
                                                fill="#ffffff" data-original="#000000" class=""></path>
                                        </g>
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M408.098,311.975c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8h16c-0.042-10.134-6.445-19.15-16-22.528v-9.472h-16v9.472    c-12.473,4.393-19.023,18.066-14.629,30.539c3.38,9.596,12.455,16.009,22.629,15.989c4.418,0,8,3.582,8,8s-3.582,8-8,8    s-8-3.582-8-8h-16c0.042,10.134,6.445,19.15,16,22.528v9.472h16v-9.472c12.473-4.393,19.023-18.066,14.63-30.539    C427.348,318.369,418.272,311.956,408.098,311.975z"
                                                fill="#ffffff" data-original="#000000" class=""></path>
                                        </g>
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M479.399,311.748c-4.17-36.255-34.807-63.657-71.301-63.772c-39.764,0.126-71.898,32.463-71.772,72.227    c0.115,36.494,27.517,67.131,63.772,71.301v88.472h16v-88.472C455.602,386.96,483.943,351.252,479.399,311.748z M408.098,375.975    c-30.928,0-56-25.072-56-56c0-30.928,25.072-56,56-56c30.928,0,56,25.072,56,56C464.059,350.887,439.01,375.936,408.098,375.975z"
                                                fill="#ffffff" data-original="#000000" class=""></path>
                                        </g>
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="mt-1">
                            <b>
                                Membantu Pelelangan Lahan
                            </b>
                        </h6>
                        <p style="font-size: small;">
                            Kami melakukan kerjasama dengan berbagai balai lelang pertanahan. Anda juga bisa menjual
                            lahan dengan sistem lelang disini.
                        </p>
                        <a href="{{url('')}}/lelang-lahan" class="text-info" style="text-decoration:none">Bergabung</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bicara Sengketatanah.id -->
        <div class="ps-4" style="margin-bottom:-38px">
            <h5 style="margin-bottom:-30px">
                Bicara <a href="sengketatanah.id" class="text-primary"
                    style="text-decoration: none">Sengketatanah.id</a>
            </h5>
        </div>

        <div class="row justify-content-between mb-3 p-4" style="overflow-x: auto; flex-wrap: nowrap;margin-top:50px">

            <div class="col-sm col-lg">

                <div class="card border-0 shadow">
                    <div class="card-body">
                        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw8QEBUQEA8PDxUQEA8WFRUSDxUQEBAVFRUWFhUVFRUYHSggGBolGxUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGhAQGislHR0rLS0rKy0rLSstLS0tLS0tLS0tLS0tLS0tLS0tLS0vLS0tLS0tLS0tLSsrLSstLS0tLf/AABEIAREAuQMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAAAAQIDBAUGBwj/xABGEAACAQIDAwgGBgcGBwAAAAAAAQIDEQQhMQUSUQYHE0FhcYGRIjJCUqGxFHKSwdHwIzNiorLC4RU0Y3N0ghYkNVNkk/H/xAAZAQEBAQEBAQAAAAAAAAAAAAAAAQIDBAX/xAAjEQEBAAICAgICAwEAAAAAAAAAAQIRAyESMQRBIlETYfAy/9oADAMBAAIRAxEAPwD2IBgbCAYAIBhYBAOwWAQDAIQDABAAAIBgAhEhAIBgAhEhFCAYgLQAZlSAYAIBgEIBgAgGBQhDABAMAEAxAIBgAgGIBAMAFYRICiYDsBlSAkAERjAIQDNDyt5VYbZtPfrNuck9ynHOc7fJdrKN5KSSu2klq27JGmx3KrZ9F2niqKfBS335RTZ4nyk5x8din6E1Rh7NOn60e1t6vtOVqVa1R3k5SlLWUpNt+PWFe7bU5zsDRyi51Jfswe73+lutnI7V51a8sqTVBNL0rRnJP6so2t2Xd+KPN50pxVsrvX0kYdSMov0la/in+I2PTI85+JhnHEyqdlbDQ3Xb/L0b8jq+TnOnhq+7HEKNJyyco33Yvq3ovO3am+1I8HjK+V/DqL4RvZ9ednx7H5PyGx9ZwmpJNNNNXTTumuxjPHOa3lXUhNYacnOEnaKk77rem7d5dyyz6tT2OLuVAAAQAhgAhEhAIBgBYAARQAAAAAAQrVIwi5yajGKbbbskkrts+dOWO0/puKnVc97O0UpdS0twXYe5ct8XCjs/EVJ6KlJJcZSyivNo+Z1O7c+pcMvL89ZRNuMXxb7rJ8LmLUqTb9JtJ8PvLqFOpWe7GN+xXsvwMupsivo4vy/NzPlGphb3I1apR14/gRhOzt1P82sbCWxa69l8BU9iVW9P/pPKHjf019aGsl4rh/QysJP0W/24mXS2PWv6ja0MyjyartWims7r45DykWYZX6PZE3Co5RdrVIuNtcpZWsfSWyZN0YSlq4JvK2ueh8y4vDYnBzjOpTa9O6TvaVuvLqPbObDlrHaFLoau5HEUldqK3YzheyklxXWl2G5dxnKadzYBgGSAAAQDABCGAFgABFADABAMQHDc8OMVPZ0oddacUv8Ab6R4NhKM6i6KEd6VSSWXwPZefL+70F/iT+SOQ5ttlKdfpJL1ItrvJldRvDHd06TYXJqlhKMYWTm0nOXF/gZssFB+wn4G1xazKIxPnZ38n1cJ+LBWBhpux8kR/syn7kfI2dg3Cdt9NbDAQXsryMinQitEkX2ISY2eKvaWy6WKpOnUindZO2aPJqlGvsrGxnTbTpVE09Lrt7Gsj2Og8zkecbZalFVMrtdx6+HKvF8jCaes7D2lDF4eniIWtVgnZO9no1fsdzOOB5lsTKeznCTv0VecVxSai/m2d8el4CsFhgBEBgAhDACwBgRSAYAIBiA8655aO9Qoa/rZd2hh832B3KcpW6kjoec3CqeFhO1+jrQ/eyFydpqnhYyta6cjObvwoY2GZRCBqtp7WxEpvo6Ut1ZaZs1EtqbQT/UtLtV/ijyXi3dvdOTUdl0YbhqdjbRrT/WwUe7rN063YieMdJdqJwKnTNftbG1k7U1nn1XNNHGbSk/1Xo8cov4j+OX7S56dbh6buYvLDCOWGv7qZgbLx2KhL9JTbi+rWx0e14qphKls/wBG2vDM78ePjHn5btq+Zulu4auv/J/kR6CcXzWU7Yaq/ervvyhE7Q9D599gAAiAAABAMRRYAwIpAMQARnJJNt2STbfBIka/lBJrC1WvcYt1Nt8eHnnMf3dOc5UbVhicNOnGLa3oWlwakmm1wNnRoKFKMH7MIr4HOYS0Yb0rWlr2rRW+Z02KeR55nbLt9Ln+PjxZ6w9Oc2vilCSjThvSbS4JX65S6kc1V21i1ivozpQ/Wbt87btr799LHZVoLgY/0Ze6vI545T7i3C3Wrpg4Oo5K7jbddn/TijY2W7cjOn1FsqdonO++nRq8XVlFXUd5t2X4vsNB/bWM+lLDbkFHpN3fcW47tr7901l2WOtVMHR7EdMLJO4zljb6umNszGycnGpBq0mt5K8ZL3ou2j4NHRU6alCUepxa80aullqbTAm8Mu3LlnW2o2JjZYKmouN4Tm5WSzWSTbb7jtKc1JKS0aTXczhK9ZVITdrOLbXC0NP3bnZbIT6CnfXo4/I6ceVtrHy+DHDjxynV3qssAGdXziAYAIBiAsAACgAABEK1JTi4PSSafiWCCy6u44OtQ3JKnJeordnouz+RvXNSpprNNZBt7D7s+k6ppprqvb+iMfZtujcUrbr07Hn87nms1bH2OTk/l48c/wDf2olEW6XV1ZmPUmcjHtXCLbvbJOxe119pgVnP2ZOKbu7a+A1Xna2rtrZJ99iRqxbVjKOeqLo2NdShKzTqVJXd3vO9/uS7EZMKli+l0yVEzqPoxk9LRb8kYFGV2ZuIcuiluptuyyV3m89Ow3h+3DPuyNZgcO6k1laNW+T9azeeXcdolbJdRqtjYFxSqTjaVrK+qXcbU78eOo83zebzy1PUAwA6PEAAAAAACwBAFMQAACGAFdSnGStJKSfU1dGJXwVOMW4QjHuVrozhTV012Mlm2sc7PtzGJRqcVX3M5Xt2Jt+SNtiXZmBON3meDPqvrcd6a2e16WkVOX+yX4FUtpZ5U6jf1XY2FbCReit3FXQvizpjlh9vXjeLXbHpbTfXSn5JfeXUa7qO6pzgn71r+RZTwyWuZktdhjPKWdOXJ4b/ABi/DxsdDsuFo34mgwkXJqK6zqaNPdio8Ed+Cfb53ysvpMAGj0PCBiJAIBgAgGADGIYUAAAAhiAQDOe2rygisVSwVKSlUqSm6jWfRQpwc2n+1KyXZd9hRh43rMSm75Fs60Zrei7p5mHVi+o+bnl2+xjjplysQlYwJ4trJpkPpy4GZY3qtimiU7JGuhi76GVRTbuzWOmbtu9h0/TTetn4G+ObweNUKkIKzlU30lxtFv5pG42XtOjiaaqUZqSaV17UW1pJdTPdx/8APT5vyN+fbMGIZtwNDEMIAAAAAACQAAUAI5vb3LfA4RNOoq017FJqVn2y0XzLodKazbW38Jg472IrQp5ZRvepLugs2eRcoedDGVrxotYaL6oZ1Gu2b+6xwdfE1Ks3KcpScnm5Nyk+1tl0PU9v850616eDhKjF3vUlbpWv2Usod+b7jT83mL3tr0t53c6eIWebb6OT+5nGQnbM2vITEtbVw0/8bd+3GUP5jX1oem1KLoVZ0uqMm4/Uecfhl4FjZueU2Bckq0VdwvvJauL6/DXzNJDNHy+XDxyfY4uTzwlQnBPVFcsJDgZUIk3TMTF02xKVFLRFsq26gkjHrp6LNvRdbZfR7Z3JbDSq4vp5aUU0vrS/BfM88wu2q2FqznQm4OFWrFWzjKKm8pJ5NZHs3J/BdDSjF66y73qfOOHxj3pb2k5Sd+9tn0uCeOOnyfkZ+eds9PauTPOLhcQlDEtYaro28qM3xUvZ7pebO2hJNJppprJp3TXYz5dxGUuFzO2PynxmEdqNepTs/VUrwf8AteT8jdkcH0uB5NsPnamrRxdGM179L0J+MXk/gd5sjldgMVZU8RBSfsVP0c+5J5PwbJ40b0AAyAAADkNoc4+z6eUHOu17sd2PnL8Dmtp869SzVGhThwc5ObXhkjypYhkJTN9K6HbHK/G4m/S4ipJP2U92H2VZHPVa7erK5MgyWgbGqrjpFyvwEid7EE5VLrPLs4GXsCv0eLoT93E0H5Tjc1zZdgpWqQfCpD+JFH1E5R3W28rfA5XFYZU5ejfclnHL1f2X+dDa4+reFOne2+k32qKWXm/gShLLdkk78VkznycfnHp4c7h3+2ikmmS33Y2GKwFlvQu7dWrt2MwlA8eWFxuq9+Ocym4qSLMFRtLpZLKKe5f2paLwRmYLDqUs81FXt739C6cbyd+ry7jtw8W/yrly82vxjM2ZtPehPfVpUld20ate/wAD5loNuMfqr5H0XayqJe1h61+12v8AifOlPRdx69afOz99LJ15WtrbQqlNyzaS7ncUxRf3hhJSLqddrrMe4JjY6/YHLnH4S0YV3KC9ip+kh4Xzj4NHZ4Hncll02Fg+Lp1HF+Ckn8zyBSJKZd79pp9FbG5ebOxO7FVuhnJpKFVbrbfCSvH4nT2PlKlXaqQfC/3Hcf8AE+J/79X7bNTjmXo3pwcXkDZFDObRMAC4DE5CbIgMuwf6yH+ZD+JFCLcPK04vhKL8mgPoyVNSlvPPdSjHw1+NzLhTaWev5yK8NdpNLqRlKJp12lSpprgYuNwSteNk/JPvM2kh1I3MZSZdUxzuN3GqpKNP1W5zaa0e6rlkKFlq+0yOj17xSiXHGY9Rcs7btizorRZOSnH7UWvvPnCWUmuEmvifR+LjkfOFX15fXl82arnlUJla+5k5la6zLCQCGgGNMiwTKGn6a7n80bTpmamnnM2e6bwSsFAOXrMTOakACAQkMQDJJ2IoYV9M7NqXpwfGEX8DMRp+TVdSwtGXvUaT84Jm3Ra0nT1JLUjT1LDIpksyE8i2ZXa+ZRiV4cT5o3rtvi2/M+mMa7Rk+EX8j5jo+qu5fI1UqcitE2yJGQiSENADIXJSIgEH6XkbH6S+C8jWU/W8TNuaxqVVJ+kSaK6r6+0usYaVCZNoiwhWIkiLCi40yIyD3vm5xHSbOoPXdhuf+tuH8p1aR5vzNY3ew1Wi3nSq7y7IzX4xkejpmq1FtPUmV09SwyiqosxMlPUgwrXbcq7mHqy92jVflFs+aoaeCPoTl1W3NnYl6f8AL1F4yW6vmfPZpKUmIGxBlNEkQTByAlNld8iUrvq8yqs8rcRRLCyzzMzfRgU2WiUOoy6hK6RjVGPBT1XaZVlSRWy1lcioiRZIiwpMBIEyDu+aLH9HjnSbyr0pLvlD0l8N89siz5q5O476Pi6NbRU60G/qt2l+62fSFN3Rr6WMmGo75kKRcZFdRZlbRZVKZSKriednFqns6cb51qtKC+1vv4QZ4hc9L56cfeWHw6einVl4+hD+c8yuWs0XI9oNiX5yIiUWyUURRNICTlkYtZ5pGRNmI3eTFE4ss32VRJ3EEpsqw87T7yUmY6dnftMq3CYpEaUsicjQqZFk5EGBEQ2RIiR9C8itq/ScDRqXvLo1Gf14ejL4q/ifPJ6lzM7Suq2Fk9HGrHPqfozt4qP2jUaj1ajPUvuYtFLMyWSlQrMxZzL8R2mFiMRGKcnpFNt8Es2WDwfnHx3TbSrcKTjSXdBZ/vORzLZdj8U61WpVetWpUn3b8nL7yhsiExkbkkRE0TRWiVyiNZmJTfzLMRPIqpaEF0SVyCGA5aGO9QAitnh9C2QwNQVyK5AAQmRAAGdtzQ/9Rf8Apqv8dMAE9q9vo/czJYgLWqxMdp4mm29/dMR/pq/8EgAsHzkRGBhgkSQAAyXUAFViYgjT0GBlE0MACv/Z"
                            style="width:60px;height:60px;margin-top:-30px;z-index:999;object-fit:cover;"
                            class="img-fluid rounded-circle">

                        <h6 style="margin-top:10px">
                            <b>
                                Joko Hartanto
                            </b>
                        </h6>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab alias iure ipsam, enim eveniet
                            nostrum
                            corrupti veniam consequuntur at tempora.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm col-lg">

                <div class="card border-0 shadow">
                    <div class="card-body">
                        <img src="https://nugasin.com/template/assets/photo/WhatsApp_Image_2021-06-26_at_09_47_29.jpeg"
                            style="width:60px;height:60px;margin-top:-30px;z-index:999;object-fit:cover;"
                            class="img-fluid rounded-circle">
                        <h6 style="margin-top:10px">
                            <b>
                                Budi Susilo
                            </b>
                        </h6>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab alias iure ipsam, enim eveniet
                            nostrum
                            corrupti veniam consequuntur at tempora.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm col-lg">

                <div class="card border-0 shadow">
                    <div class="card-body">
                        <img src="https://s.kaskus.id/r540x540/images/2020/11/13/10653066_202011130432060327.jpg"
                            style="width:60px;height:60px;margin-top:-30px;z-index:999;object-fit:cover;"
                            class="img-fluid rounded-circle">
                        <h6 style="margin-top:10px">
                            <b>
                                Ikhsan Jamaludin
                            </b>
                        </h6>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab alias iure ipsam, enim eveniet
                            nostrum
                            corrupti veniam consequuntur at tempora.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <hr>

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

        <script async defer crossorigin="anonymous"
            src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v14.0" nonce="Ee2Zutm6"></script>

    </div>
    @include('layouts.template-public.footer')
    {{-- <div class="row mt-4">
        <div class="card-body text-white text-center  bg-card-dark-mode" style="background: #61481C">
            <p></p>
            <img src="{{asset('/uploads/sengketa-logo.png')}}" style="width:250px" class="img-fluid">
            <p style="font-size:12px" class="card-title">Copyright © Sengketa Tanah 2022. All Rights Reserved
            </p>
            <hr>
            <p style="font-size:14px" class="card-title pb-3">Sovereign Plaza. Lt. 19 <br> Jl. TB Simatupang No.
                36,
                TB Simatupang, Jakarta Selatan</p>
        </div>
    </div> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/b-2.2.3/datatables.min.js">
    </script>
       @include('layouts.dark_mode')
</body>

</html>
