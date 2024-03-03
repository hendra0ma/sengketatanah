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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnify/2.3.3/css/magnify.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/js-image-zoom/js-image-zoom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-image-zoom/js-image-zoom.min.js"></script>


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


        @keyframes blink-animation {

            to {

                visibility: hidden;

            }

        }

        @-webkit-keyframes blink-animation {
            to {
                visibility: hidden;
            }
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

        section {
            $h1-font-size: 55px;

            color: rgba(255, 255, 255, 0.738);
            flex-direction: column;

            >h2 {
                font-size: 25px;
            }

            >h1 {
                font-size: $h1-font-size;
            }

            ul {
                margin-top: 15px;
                list-style: none;

                column-gap: 50px;

                li {
                    text-align: center;

                    h1 {
                        font-size: $h1-font-size;
                    }

                    p {
                        font-size: 14px;
                    }
                }
            }
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
            /* position: absolute;
            right: 14px;
            bottom: 30px; */
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
            /* display: flex; */
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
            /* padding: 13px; */
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

        .col-12.custom {
            width: 33.3333%
        }

        @media (max-width: 1400px) {
            .col-12.custom {
                width: 38% !important
            }

        }

        @media (max-width: 992px) {
            .col-12.custom {
                width: 51% !important
            }

        }

        @media (max-width: 768px) {
            .col-12.custom {
                width: 100% !important
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

            .desktop-arrow {
                width: 100%
            }

            .arrow-desktop {
                display: none
            }

            .arrow-desktop {
                display: none
            }

        }

        table {
            width: 100%;
            text-align: start
        }

        .card {
            border-radius: 10px
        }

        .a-image {
            max-height: 200px;
            object-fit: cover;
        }

        .bg-pengacara {
            background: linear-gradient(90deg, hsla(337, 85%, 31%, 1) 42%, hsla(337, 83%, 30%, 1) 64%, hsla(318, 57%, 22%, 1) 86%);
        }

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
            right: 0.5rem;
            top: 0.5rem;
        }

        @media (max-width: 1199.98px) {
            .gambar-banner {
                width: 80%
            }
        }


        @media (max-width: 991.98px) {
            .gambar-banner {
                width: 75%
            }
        }

        @media (max-width: 575.98px) {
            .gambar-banner {
                width: 90%
            }
        }
    </style>

    <style>
        .row-col {
            text-align: right
        }
        @media (max-width: 767.98px) { 
            .row.row-md {
                text-align: center !important;
            }

            .row.row-md .row-col {
                margin-top: 10px;
                text-align: center !important;
            }
        }
    </style>

</head>

<body>

    @include('layouts.template-public.header')

    <div class="container mt-4 mb-5">
        <h4 class="text-center">Pilih Jenis Akun Borrower</h4>
        <h5 class="text-center text-muted fw-normal">Pilih Jenis Akun yang akan Anda Buat!</h5>

        <div class="wrapper mt-4">
    
            <div class="card mt-2 mb-2 rounded-4">
                <div class="card-body p-5">
                    <div class="row row-md align-items-center">
                        <div class="col-md-8">
                            <h5>Daftar Sebagai Pribadi</h5>
                            <h6 class="text-muted fw-normal mb-0">Pribadi adalah orang yang memiliki rumah atas nama dirinya sendiri.</h6>
                        </div>
                        <div class="col-md row-col">
                            <a href="{{url('')}}/daftar-bid-rumah-pribadi" class="btn btn-lg btn-brown rounded-3 mt-2 w-100">Daftar Sebagai Pribadi</a>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="card mt-2 mb-2 rounded-4">
                <div class="card-body p-5">
                    <div class="row row-md align-items-center">
                        <div class="col-md-8">
                            <h5>Daftar Sebagai Pemilik Perusahaan</h5>
                            <h6 class="text-muted fw-normal mb-0">Milik Perusahaan adalah badan hukum yang memiliki rumah atas nama perusahaan tersebut.</h6>
                        </div>
                        <div class="col-md row-col">
                            <a href="{{url('')}}/daftar-bid-rumah-perusahaan" class="btn btn-lg btn-brown rounded-3 mt-2 w-100">Daftar Sebagai Pemilik Perusahaan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <hr>


    <div class="row justify-content-center">
        <div class="col-12 mt-2 text-center">
            <b>Download Aplikasinya!</b>
            <p class="fw-lighter mb-0">Platform Seputar Tanah No. 1 di Indonesia</p>
        </div>
        <div class="col-12 mb-2 text-center">
            <a href="#"><img src="{{asset('/')}}uploads/google-play-badge.png" class="store" alt=""></a>
            <a href="#"><img src="{{asset('/')}}uploads/appstore-badge.png" class="appstore" alt=""></a>
        </div>
    </div>

    <hr>
    
    @include('layouts.template-public.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>



    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> -->

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/b-2.2.3/datatables.min.js">
    </script>
      @include('layouts.dark_mode')
</body>

</html>