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
    </style>

</head>

<body>

    @include('layouts.template-public.header')



    <div class="card aboute-bottom rounded-0 mobile">
        <div class="card border-0 shadow-sm" style="margin-top:-10px">
            <div class="card-body p-0">
                <div class="row g-0">
                    <div class="col text-center">

                        <a class="btn btn-sm mb-0 p-0 w-100" href="{{url('')}}/">
                            <div class="card rounded-0">
                                <div class="card-body p-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="45px" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="256" cx="256" cy="256" fill="#ffffff" shape="circle"></circle>
                                        <g transform="matrix(0.7,0,0,0.7,76.79200973510743,76.80000000000001)">
                                            <path d="m498.195312 222.695312c-.011718-.011718-.023437-.023437-.035156-.035156l-208.855468-208.847656c-8.902344-8.90625-20.738282-13.8125-33.328126-13.8125-12.589843 0-24.425781 4.902344-33.332031 13.808594l-208.746093 208.742187c-.070313.070313-.140626.144531-.210938.214844-18.28125 18.386719-18.25 48.21875.089844 66.558594 8.378906 8.382812 19.445312 13.238281 31.277344 13.746093.480468.046876.964843.070313 1.453124.070313h8.324219v153.699219c0 30.414062 24.746094 55.160156 55.167969 55.160156h81.710938c8.28125 0 15-6.714844 15-15v-120.5c0-13.878906 11.289062-25.167969 25.167968-25.167969h48.195313c13.878906 0 25.167969 11.289063 25.167969 25.167969v120.5c0 8.285156 6.714843 15 15 15h81.710937c30.421875 0 55.167969-24.746094 55.167969-55.160156v-153.699219h7.71875c12.585937 0 24.421875-4.902344 33.332031-13.808594 18.359375-18.371093 18.367187-48.253906.023437-66.636719zm0 0" fill="#61481c" data-original="#000000" class=""></path>
                                        </g>
                                    </svg>
                                    <h6 class="mt-0 mb-0" style="font-size: 12px">HOME</h6>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col text-center">

                        <button class="btn btn-sm mb-0 p-0 w-100" id="btn-panduan-m" type="button">
                            <div class="card rounded-0">
                                <div class="card-body p-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="45px" x="0" y="0" viewBox="0 0 296.999 296.999" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="148.4995" cx="148.4995" cy="148.4995" fill="#ffffff" shape="circle">
                                        </circle>
                                        <g transform="matrix(0.7,0,0,0.7,44.54984436035157,44.54998970031738)">
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <g>
                                                        <path d="M45.432,35.049c-0.008,0-0.017,0-0.025,0c-2.809,0-5.451,1.095-7.446,3.085c-2.017,2.012-3.128,4.691-3.128,7.543     v159.365c0,5.844,4.773,10.61,10.641,10.625c24.738,0.059,66.184,5.215,94.776,35.136V84.023c0-1.981-0.506-3.842-1.461-5.382     C115.322,40.849,70.226,35.107,45.432,35.049z" fill="#61481c" data-original="#000000" class=""></path>
                                                        <path d="M262.167,205.042V45.676c0-2.852-1.111-5.531-3.128-7.543c-1.995-1.99-4.639-3.085-7.445-3.085c-0.009,0-0.018,0-0.026,0     c-24.793,0.059-69.889,5.801-93.357,43.593c-0.955,1.54-1.46,3.401-1.46,5.382v166.779     c28.592-29.921,70.038-35.077,94.776-35.136C257.394,215.651,262.167,210.885,262.167,205.042z" fill="#61481c" data-original="#000000" class=""></path>
                                                        <path d="M286.373,71.801h-7.706v133.241c0,14.921-12.157,27.088-27.101,27.125c-20.983,0.05-55.581,4.153-80.084,27.344     c42.378-10.376,87.052-3.631,112.512,2.171c3.179,0.724,6.464-0.024,9.011-2.054c2.538-2.025,3.994-5.052,3.994-8.301V82.427     C297,76.568,292.232,71.801,286.373,71.801z" fill="#61481c" data-original="#000000" class=""></path>
                                                        <path d="M18.332,205.042V71.801h-7.706C4.768,71.801,0,76.568,0,82.427v168.897c0,3.25,1.456,6.276,3.994,8.301     c2.545,2.029,5.827,2.78,9.011,2.054c25.46-5.803,70.135-12.547,112.511-2.171c-24.502-23.19-59.1-27.292-80.083-27.342     C30.49,232.13,18.332,219.963,18.332,205.042z" fill="#61481c" data-original="#000000" class=""></path>
                                                    </g>
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
                                    <h6 class="mt-0 mb-0" style="font-size: 12px">PANDUAN</h6>
                                </div>
                            </div>
                        </button>

                        <script>
                            $("#btn-panduan-m").click(function() {
                                $("#panduan-m").toggleClass('show');
                                $("#jaminan-m").removeClass('show');
                                $("#chat-m").removeClass('show');
                                $("#tentang-m").removeClass('show');
                            });
                        </script>
                    </div>

                    <div class="col text-center">
                        <button class="btn btn-sm mb-0 p-0 w-100" id="btn-jaminan-m" type="button">
                            <div class="card rounded-0">
                                <div class="card-body p-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="45px" x="0" y="0" viewBox="0 0 32 32" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="16" cx="16" cy="16" fill="#ffffff" shape="circle"></circle>
                                        <g transform="matrix(0.7,0,0,0.7,4.799999713897705,4.800377225875856)">
                                            <g xmlns="http://www.w3.org/2000/svg" id="_26-Guranteed" data-name="26-Guranteed">
                                                <path d="m27 6c-5.56 0-10.33-3.74-10.38-3.78a1 1 0 0 0 -1.24 0c-.05.04-4.8 3.78-10.38 3.78a1 1 0 0 0 -1 1v9c0 6.71 2.71 10 11.59 13.91a1 1 0 0 0 .82 0c8.88-3.91 11.59-7.2 11.59-13.91v-9a1 1 0 0 0 -1-1zm-11 18a8 8 0 1 1 8-8 8 8 0 0 1 -8 8z" fill="#61481c" data-original="#000000" class=""></path>
                                                <path d="m18.29 13.29-3.29 3.3-1.29-1.3a1 1 0 0 0 -1.42 1.42l2 2a1 1 0 0 0 1.42 0l4-4a1 1 0 0 0 -1.42-1.42z" fill="#61481c" data-original="#000000" class=""></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <h6 class="mt-0 mb-0" style="font-size: 12px">JAMINAN</h6>
                                </div>
                        </button>

                        <script>
                            $("#btn-jaminan-m").click(function() {
                                $("#panduan-m").removeClass('show');
                                $("#jaminan-m").toggleClass('show');
                                $("#chat-m").removeClass('show');
                                $("#tentang-m").removeClass('show');
                            });
                        </script>

                    </div>

                    <div class="col text-center">
                        <button class="btn btn-sm mb-0 p-0 w-100" id="btn-chat-m" type="button">
                            <div class="card rounded-0">
                                <div class="card-body p-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="45px" x="0" y="0" viewBox="0 0 361.014 361.014" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="180.507" cx="180.507" cy="180.507" fill="#ffffff" shape="circle">
                                        </circle>
                                        <g transform="matrix(0.7,0,0,0.7,54.15209197998048,54.151945495605474)">
                                            <g>
                                                <g id="Layer_5_47_">
                                                    <path d="M331.035,126.94H318.01c-3.563,0-3.682-2.333-3.805-3.494C307.375,59.094,252.77,8.791,186.637,8.791h-12.26
                                                    c-65.644,0-119.929,49.56-127.409,113.229c-0.191,1.631-0.291,4.92-3.291,4.92H29.978C20.987,126.94,0,136.401,0,184.18v25.075
                                                    c0,35.436,20.987,43.609,29.978,43.609h43.584c8.991,0,16.347-7.356,16.347-16.347v-93.23c0-8.991-7.356-16.347-16.347-16.347
                                                    c0,0-2.052-0.18-1.529-3.835c7.192-50.319,50.129-89.313,102.344-89.313h12.26c51.86,0,94.912,38.418,102.2,88.288
                                                    c0.235,1.608,1.111,4.86-1.385,4.86c-8.991,0-16.347,7.356-16.347,16.347v93.23c0,8.991,7.356,16.347,16.347,16.347h8.184
                                                    c2.25,0,1.868,1.798,1.667,2.704c-6.667,30.104-21.637,64.256-55.238,64.256h-24.889c-2.54,0-3.167-1.861-3.65-2.743
                                                    c-4.032-7.367-11.851-12.364-20.841-12.364h-22.933c-13.118,0-23.753,10.634-23.753,23.753c0,13.119,10.635,23.752,23.753,23.752
                                                    h22.933c9.112,0,17.023-5.132,21.005-12.662c0.348-0.658,0.633-2.026,3.321-2.026h25.054c22.823,0,53.365-11.341,69.259-65.373
                                                    c1.694-5.758,3.068-11.496,4.187-17.026c0.154-0.761,0.25-2.27,2.625-2.27h12.9c8.991,0,29.978-8.174,29.978-43.609v-25.075
                                                    C361.013,137.082,340.026,126.94,331.035,126.94z" fill="#61481c" data-original="#000000" class=""></path>
                                                </g>
                                    </svg>
                                    <h6 class="mt-0 mb-0" style="font-size: 12px;margin-top:13px">CHAT</h6>
                                </div>
                            </div>
                        </button>

                        <script>
                            $("#btn-chat-m").click(function() {
                                $("#panduan-m").removeClass('show');
                                $("#jaminan-m").removeClass('show');
                                $("#chat-m").toggleClass('show');
                                $("#tentang-m").removeClass('show');
                            });
                        </script>
                    </div>

                    <div class="col text-center">
                        <button class="btn btn-sm mb-0 p-0 w-100" id="btn-tentang-m" type="button">
                            <div class="card rounded-0">
                                <div class="card-body p-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="45px" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="12" cx="12" cy="12" fill="#ffffff" shape="circle"></circle>
                                        <g transform="matrix(0.7,0,0,0.7,3.600000000000003,3.600000000000003)">
                                            <g xmlns="http://www.w3.org/2000/svg" fill="rgb(0,0,0)">
                                                <path d="m12 0a12 12 0 1 0 12 12 12.013 12.013 0 0 0 -12-12zm0 22a10 10 0 1 1 10-10 10.011 10.011 0 0 1 -10 10z" fill="#61481c" data-original="#000000" class=""></path>
                                                <path d="m12 9a1 1 0 0 0 -1 1v8a1 1 0 0 0 2 0v-8a1 1 0 0 0 -1-1z" fill="#61481c" data-original="#000000" class=""></path>
                                                <circle cx="12" cy="6" r="1" fill="#61481c" data-original="#000000" class=""></circle>
                                            </g>
                                        </g>
                                    </svg>
                                    <h6 class="mt-0 mb-0" style="font-size: 12px">TENTANG</h6>
                                </div>
                            </div>
                        </button>

                        <script>
                            $("#btn-tentang-m").click(function() {
                                $("#panduan-m").removeClass('show');
                                $("#jaminan-m").removeClass('show');
                                $("#chat-m").removeClass('show');
                                $("#tentang-m").toggleClass('show');
                            });
                        </script>

                    </div>



                    <ol id="panduan-m" class="list-group panduan list-group-numbered shadow dropdown-menu rounded-0 p-0" style="inset: auto auto 0px 0px; margin: 0px; border-top: none">
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold" style="color: #61481C">Buat Akun Sengketa Tanah</div>
                                Daftarkan diri Anda sesuai dengan role yang diinginkan (Korban, Sponsor,
                                Pengacara).
                            </div>
                            <i class="fa-solid fa-user-plus fs-6" style="color: #61481C"></i>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold" style="color: #61481C">Buat Laporan Sengketa Tanah
                                </div>
                                Laporkan dengan jelas melalui formulir korban tentang masalah sengketa tanah
                                Anda.
                            </div>
                            <i class="fa-solid fa-file-circle-plus fs-6" style="color: #61481C"></i>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold" style="color: #61481C">Tampilkan Dokumen</div>
                                Upload dan kirimkan dokumen pendukung laporan Anda.
                            </div>
                            <i class="fa-solid fa-file-lines fs-6" style="color: #61481C"></i>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold" style="color: #61481C">Temukan Bantuan</div>
                                Pilih bantuan yang diinginkan mulai dari bantuan pendanaan sponsor, bantuan
                                hukum pengacara, dan
                                bantuan pemerintah.
                            </div>
                            <i class="fa fa-circle-question fs-6" style="color: #61481C"></i>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold" style="color: #61481C">Pilih Bantuan</div>
                                Pilih bantuan yang masuk sesuai dengan kesepakatanmu.
                            </div>
                            <i class="fa-regular fa-circle-question fs-6" style="color: #61481C"></i>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold" style="color: #61481C">Dapatkan Bantuan</div>
                                Yay! Selamat, kamu telah mendapatkan bantuan.
                            </div>
                            <i class="fa-solid fa-handshake-angle fs-6" style="color: #61481C"></i>
                        </li>
                    </ol>

                    <ol id="jaminan-m" class="list-group list-group-numbered shadow dropdown-menu rounded-0 p-3" style="inset: auto auto 0px 0px; margin: 0px; border-top: none">
                        <div class="col-md-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <h5 style="color: #61481C" class="mb-0"><b><i class="fa-solid fa-user-tie"></i></b>
                                    </h5>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 style="color: #61481C" class="mb-0"><b>Sponsor Terverifikasi</b>
                                    </h5>
                                    Setiap sponsor yang terlibat di verifikasi kemampuan dan sumber dananya.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <h5 style="color: #61481C" class="mb-0"><b><i class="fa-solid fa-gavel"></i></b>
                                    </h5>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 ms-3">
                                        <h5 style="color: #61481C" class="mb-0"><b>Pengacara
                                                Terverifikasi</b></h5>
                                        Setiap pengacara wajib memiliki sertifikasi advokat yang dibutuhkan.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <h5 style="color: #61481C" class="mb-0"><b><i class="fa-solid fa-hand-holding-dollar"></i></b>
                                    </h5>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 ms-3">
                                        <h5 style="color: #61481C" class="mb-0"><b>Pembayaran Aman</b></h5>
                                        Setiap transaksi yang terjadi menggunakan platform pembayaran
                                        Sengketa Tanah.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <h5 style="color: #61481C" class="mb-0"><b><i class="fa-solid fa-chart-line"></i></b></h5>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 ms-3">
                                        <h5 style="color: #61481C" class="mb-0"><b>Bantuan Analisa</b></h5>
                                        Kami memberikan bantuan analisa terhadap permasalahan yang relevan
                                        untuk diatasi.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <h5 style="color: #61481C" class="mb-0"><b><i class="fa-solid fa-handshake"></i></b>
                                    </h5>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 ms-3">
                                        <h5 style="color: #61481C" class="mb-0"><b>Kesepakatan
                                                Terlindungi</b></h5>
                                        Semua kesepakatan yang terjadi dilindungi perjanjian hukum yang
                                        ketat dan mengikat.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <h5 style="color: #61481C" class="mb-0"><b><i class="fa-solid fa-user-gear"></i></b>
                                    </h5>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 ms-3">
                                        <h5 style="color: #61481C" class="mb-0"><b>Bantuan Customer
                                                Support</b></h5>
                                        Layanan CS 24 jam siap membantu anda.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ol>

                    <ol id="chat-m" class="list-group list-group-numbered shadow dropdown-menu rounded-0 p-3 text-center" style="inset: auto auto 0px 0px; margin: 0px; border-top: none">
                        <h2>
                            <div class="fw-bold" style="color: #61481C"> Customer Service</div>
                        </h2>
                        <div class="chat-form"> <input type="text" class="form-control" placeholder="Nama">
                            <input type="text" class="form-control" placeholder="Email"> <textarea class="form-control" placeholder="Masukan Pesan"></textarea> <button class="btn btn-brown btn-block">Kirim</button>
                        </div>
                    </ol>

                    <ol id="tentang-m" class="list-group list-group-numbered shadow dropdown-menu rounded-0 p-3 text-center" style="inset: auto auto 0px 0px; margin: 0px; border-top: none; max-height: 500px; overflow-y: auto">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row desktop mb-4">
                                    <div class="col-md">
                                        <div class="card-body text-center container" style="height:500px">
                                            <img src="{{asset('/uploads/sengketa-tanah-jokowi.png')}}" style="width:300px; height:400px;object-fit:cover" alt="" srcset="" class="img-fluid">
                                            <div class="card rounded-0" style="width: 17rem; position:relative; left:50%;transform: translate(-50%, -50%);">
                                                <div class="card-body">
                                                    <p class="card-text">"Presiden Joko Widodo menegaskan kepada
                                                        Kementerian
                                                        ATR/BPN untuk
                                                        serius dalam memberantas mafia tanah"
                                                        <br> -<b> Ir. H. Joko Widodo (Presiden RI)</b>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="card-title fw-bolder text-dark"></p>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="card-body text-center container" style="height:500px">
                                            <img src="{{asset('/uploads/atr-hadi-tjahjanto.png')}}" style="width:300px; height:400px;object-fit:cover" alt="" srcset="" class="img-fluid">
                                            <div class="card rounded-0" style="width: 17rem; position:relative; left:50%;transform: translate(-50%, -50%);">
                                                <div class="card-body">
                                                    <p class="card-text">"Sesuai perintah Bapak Presiden, semua
                                                        kasus mafia
                                                        tanah yang ada
                                                        di
                                                        Indonesia harus
                                                        diselesaikan" <br> -<b> Hadi Tjahjanto (Mentri ATR/BPN)
                                                        </b>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="card-title fw-bolder text-dark"></p>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="card-body text-center container" style="height:500px">
                                            <img src="{{asset('/uploads/kapolri.png')}}" style="width:300px; height:400px;object-fit:cover" alt="" srcset="" class="img-fluid">
                                            <div class="card rounded-0" style="width: 17rem; position:relative; left:50%;transform: translate(-50%, -50%);">
                                                <div class="card-body">
                                                    <p class="card-text">"Penyidik tidak perlu ragu ragu dalam
                                                        mengusut
                                                        tuntas masalah mafia
                                                        tanah, penyidik agar tindak tegas siapapun dalang dan
                                                        bekingannya"
                                                        <br> -<b> Listyo
                                                            Sigit Prabowo (Kapolri) </b>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="card-title fw-bolder text-dark"></p>
                                        </div>
                                    </div>
                                </div>
                                <div id="carouselExampleControlsPres" class="carousel slide mobile mb-4">
                                    <div class="carousel-inner mb-5">
                                        <div class="carousel-item active">
                                            <div class="card-body text-center container" style="height:505px">
                                                <img src="{{asset('/uploads/sengketa-tanah-jokowi.png')}}" style="width:300px; height:400px;object-fit:cover" alt="" srcset="" class="img-fluid">
                                                <div class="card rounded-0" style="width: 14rem; position:relative; left:50%;transform: translate(-50%, -50%);z-index:10">
                                                    <div class="card-body">
                                                        <p class="card-text">"Presiden Joko Widodo menegaskan
                                                            kepada Kementerian ATR/BPN untuk serius dalam
                                                            memberantas mafia tanah" <br> -<b>
                                                                Ir. H. Joko Widodo (Presiden RI)</b>
                                                        </p>
                                                    </div>
                                                </div>
                                                <p class="card-title fw-bolder text-dark"></p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="card-body text-center container" style="height:505px">
                                                <img src="{{asset('/uploads/atr-hadi-tjahjanto.png')}}" style="width:300px; height:400px;object-fit:cover" alt="" srcset="" class="img-fluid">
                                                <div class="card rounded-0" style="width: 14rem; position:relative; left:50%;transform: translate(-50%, -50%);">
                                                    <div class="card-body">
                                                        <p class="card-text">"Sesuai perintah Bapak Presiden,
                                                            semua kasus
                                                            mafia tanah yang
                                                            ada
                                                            di Indonesia harus
                                                            diselesaikan"<br> -<b> Hadi Tjahjanto (Mentri
                                                                ATR/BPN) </b>
                                                        </p>
                                                    </div>
                                                </div>
                                                <p class="card-title fw-bolder text-dark"></p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="card-body text-center container" style="height:505px">
                                                <img src="{{asset('/uploads/kapolri.png')}}" style="width:300px; height:400px;object-fit:cover" alt="" srcset="" class="img-fluid">
                                                <div class="card rounded-0" style="width: 14rem; position:relative; left:50%;transform: translate(-50%, -50%);">
                                                    <div class="card-body">
                                                        <p class="card-text">"Penyidik tidak perlu ragu ragu
                                                            dalam mengusut
                                                            tuntas masalah
                                                            mafia

                                                            tanah, penyidik agar tindak tegas siapapun dalang
                                                            dan
                                                            bekingannya" <br> -<b>
                                                                Listyo
                                                                Sigit Prabowo (Kapolri) </b>
                                                        </p>
                                                    </div>
                                                </div>
                                                <p class="card-title fw-bolder text-dark"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev my-auto" style="background: rgba(0, 0, 0, 0.75); height: 35px; width: 10%;border-radius: 50%" type="button" data-bs-target="#carouselExampleControlsPres" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next my-auto" style="background: rgba(0, 0, 0, 0.75); height: 35px; width: 10%;border-radius: 50%" type="button" data-bs-target="#carouselExampleControlsPres" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <style>
                            @media (min-width: 1400px) {
                                .container-lsa {
                                    max-width: 1000px !important;
                                }
                            }
                        </style>
                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png" class="mb-2" style="width: 75px" alt="">
                        <div class="container-lsa mx-auto mb-3">
                            <h2>
                                <div class="fw-bold" style="color: #61481C"> TENTANG KAMI</div>
                            </h2>
                            SENGKETA TANAH adalah platform digital dengan spesialisasi penanganan
                            masalah
                            sengketa tanah di seluruh wilayah Indonesia. Kami mempertemukan korban sengketa
                            tanah
                            atau korban
                            mafia
                            tanah dengan Sponsor, Kantor hukum, dan Pemerintah untuk menuntaskan masalah
                            persengketaan tanah
                            tersebut.

                            <h2>
                                <div class="fw-bold mt-5" style="color: #61481C"> VISI MISI</div>
                            </h2>
                            <div class="text-start">
                                <h5>VISI</h5>
                                Membantu Masyarakat dan Pemerintah Indonesia dalam penyelesaian Sengketa
                                Pertanahan, Konflik Pertanahan dan Perkara Pertanahan dengan membangun ekosistem
                                steakholder terkait, seperti Korban Sengketa, Sponsor, Pengacara dan
                                Pemerintahnya itu sendiri agar semua jenis permasalahan tanah lebih cepat
                                diselesaikan. Tujuan utama Platform Sengketa Tanah adalah membawa persoalan
                                tanah yang dulunya tabu menjadi lebih terbuka dengan pendekatan ecommerce yang
                                profit oriented.
                                <h5 class="mt-3">MISI</h5>
                                <ol style="padding-left: 1rem">
                                    <li>Membantu masyarakat Indonesia menyelesaikan persolan sengketa
                                        pertanahan, konflik pertanahan dan perkara pertanahan dengan menyediakan
                                        bantuan akses pada sponsor, pengacara dan pemerintah.</li>
                                    <li>Membantu Pemerintah Indonesia dalam hal ini Kementrian ATR/BPN untuk
                                        menyelesaikan persolan sengketa pertanahan, konflik pertanahan dan
                                        perkara pertanahan dengan menyediakan sortasi data persengketaan tanah
                                        yang terjadi di masyarakat.</li>
                                    <li>Mengangkat semua jenis persoalan tanah dengan multi komprehensif, mulai
                                        dari dokumen pertanahan, analisa, pengecekan sampai kepada wawancara
                                        mendalam pada korban dan pihak terkait yang disajikan dengan audio
                                        visual untuk memudahkan steak holder mengambil keputusan.
                                    <li>Menjadi platform khusus pertanahan yang dipercaya publik dengan komitmen
                                        kuat penyelesaian kasus-kasus persengketaan tanah.</li>
                                    <li>Mengintegrasikan semua jenis bidang seputar pertanahan dalam satu
                                        platform seperti sengketa pertanahan, jual beli lahan, kerja sama lahan
                                        sampai dengan pelelangan lahan.</li>
                                    <li>Menyediakan berbagai tenaga ahli pertanahan dalam platform untuk
                                        membantu desiminasi permasalahan dalam rangka menentukan tindakan yang
                                        akan diambil, baik untuk korban, sponsor, pengacara maupun pemerintah.
                                    </li>
                                    <li>Menjadi platform yang terintegrasi dengan kementrian ATR/BPN</li>
                                </ol>

                            </div>
                        </div>

                    </ol>

                </div>

            </div>
        </div>
    </div>

    <div class="container">

        <div class="row justify-content-center mb-2">

            <div class="col-lg-12">

                <div class="card mb-0 border-0 mb-3 mt-3" style="z-index:999">
                    <div class="card-body pb-0">
                        <div class="row justify-content-between text-center scroll-simple" style="overflow-x: auto; flex-wrap: nowrap">
                            <div class="col mb-4">
                                <a href="{{url('/')}}/bid-sengketa" class="btn btn-outline-light text-dark w-100 rounded-4 shadow">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="71px" x="0" y="0" viewBox="0 0 50 60" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="25" cx="25" cy="30" fill="#ffffff" shape="circle"></circle>
                                        <g transform="matrix(0.7,0,0,0.7,7.500000286102296,9)">
                                            <g xmlns="http://www.w3.org/2000/svg" id="Page-1" fill="none" fill-rule="evenodd">
                                                <g id="001---Bid-Sign" fill="rgb(0,0,0)" fill-rule="nonzero">
                                                    <path id="Shape" d="m3 52h8.072c.4576865.0004997.9089573.107668 1.318.313l1.456.733c2.5817025 1.2790372 5.42284 1.9475804 8.304 1.954h2.63c.5642399.6337052 1.3715062.9973386 2.22 1v1c0 1.6568542 1.3431458 3 3 3s3-1.3431458 3-3v-1c1.1856144.005247 2.2620981-.691231 2.7432243-1.7748484.4811261-1.0836175.2758048-2.3492169-.5232243-3.2251516 1.0400491-1.1305142 1.0400491-2.8694858 0-4 1.0400491-1.1305142 1.0400491-2.8694858 0-4 .5806193-.6333292.85885-1.4868812.7629994-2.3407179-.0958505-.8538368-.5564082-1.6244534-1.2629994-2.1132821 1.9862979-.6121975 3.325279-2.4679926 3.28-4.546 0-1.1045695-.8954305-2-2-2h-3v-2h14c1.6568542 0 3-1.3431458 3-3v-24c0-1.65685425-1.3431458-3-3-3h-34c-1.6568542 0-3 1.34314575-3 3v24c0 1.6568542 1.3431458 3 3 3h14v2h-2.64c-4.3481249.0027575-8.558163 1.5272159-11.9 4.309-.5364453.4462991-1.2121774.6907656-1.91.691h-7.55c-1.65685425 0-3 1.3431458-3 3v9c0 1.6568542 1.34314575 3 3 3zm22-11c0-.5522847.4477153-1 1-1h7c.5522847 0 1 .4477153 1 1s-.4477153 1-1 1h-7c-.5522847 0-1-.4477153-1-1zm9 4c0 .5522847-.4477153 1-1 1h-7c-.5522847 0-1-.4477153-1-1s.4477153-1 1-1h7c.5522847 0 1 .4477153 1 1zm-1 3c.5522847 0 1 .4477153 1 1s-.4477153 1-1 1h-7c-.5522847 0-1-.4477153-1-1s.4477153-1 1-1zm-2 9c0 .5522847-.4477153 1-1 1s-1-.4477153-1-1v-1h2zm2-3h-6c-.5522847 0-1-.4477153-1-1s.4477153-1 1-1h6c.5522847 0 1 .4477153 1 1s-.4477153 1-1 1zm3-20c0 2.1-1.684 2.748-3 2.932v-2.932zm-24-7v-24c0-.55228475.4477153-1 1-1h34c.5522847 0 1 .44771525 1 1v24c0 .5522847-.4477153 1-1 1h-34c-.5522847 0-1-.4477153-1-1zm19 3v8h-2v-8zm-29 10c0-.5522847.44771525-1 1-1h7.55c1.1656656-.0009424 2.2943701-.4091295 3.191-1.154 2.982163-2.4823219 6.7388958-3.8429391 10.619-3.846h2.64v4h-1c-1.1856144-.005247-2.2620981.691231-2.7432243 1.7748484-.4811261 1.0836175-.2758048 2.3492169.5232243 3.2251516-1.0400491 1.1305142-1.0400491 2.8694858 0 4-.5967576.6515543-.8725607 1.5349101-.752536 2.4102596s.6234232 1.6518641 1.373536 2.1187404c-.2595214.4470314-.3977522.9541075-.401 1.471h-1.85c-2.570894-.0058162-5.1060912-.602152-7.41-1.743l-1.451-.731c-.6882064-.3448961-1.4472076-.5249748-2.217-.526h-8.072c-.55228475 0-1-.4477153-1-1z" fill="#61481c" data-original="#000000" class=""></path>
                                                    <path id="Shape" d="m25 11c-.0033061-2.76005315-2.2399468-4.99669388-5-5h-3c-1.1045695 0-2 .8954305-2 2v14c0 1.1045695.8954305 2 2 2h3c2.1566753.0062173 4.0727751-1.3751502 4.7484261-3.423267.675651-2.0481169-.0423886-4.2984577-1.7794261-5.576733 1.272967-.9358543 2.0265663-2.4200479 2.031-4zm-2 8c0 1.6568542-1.3431458 3-3 3h-3v-6h3c1.6568542 0 3 1.3431458 3 3zm-3-5h-3v-6h3c1.6568542.00000003 2.9999999 1.34314578 2.9999999 3 0 1.6568542-1.3431457 3-2.9999999 3z" fill="#61481c" data-original="#000000" class=""></path>
                                                    <path id="Shape" d="m38 24h2c3.3123376-.0033074 5.9966926-2.6876624 6-6v-6c-.0033074-3.31233757-2.6876624-5.99669262-6-6h-2c-1.1045695 0-2 .8954305-2 2v14c0 1.1045695.8954305 2 2 2zm0-16h2c2.209139 0 4 1.790861 4 4v6c0 2.209139-1.790861 4-4 4h-2z" fill="#61481c" data-original="#000000" class=""></path>
                                                    <path id="Shape" d="m34 23c0-.5522847-.4477153-1-1-1h-2v-14h2c.5522847 0 1-.44771525 1-1s-.4477153-1-1-1h-6c-.5522847 0-1 .44771525-1 1s.4477153 1 1 1h2v14h-2c-.5522847 0-1 .4477153-1 1s.4477153 1 1 1h6c.5522847 0 1-.4477153 1-1z" fill="#61481c" data-original="#000000" class=""></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="mt-0" style="font-size: 12px">Bid <br> Sengketa</div>
                                </a>
                            </div>
                            <div class="col mb-4">
                                <a href="{{url('/')}}/bidding-pengacara" class="btn btn-outline-light text-dark w-100 rounded-4 shadow">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="85px" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="256" cx="256" cy="256" fill="#ffffff" shape="circle"></circle>
                                        <g transform="matrix(0.7,0,0,0.7,76.80000000000001,76.80000000000001)">
                                            <path d="M488,176H435.2002a103.81249,103.81249,0,0,1-91.76465-55.05859L333.647,102.58789A87.85219,87.85219,0,0,0,288,62.002V48a32,32,0,0,0-64,0V62.002a87.85457,87.85457,0,0,0-45.64746,40.58594l-9.7876,18.35352A103.81381,103.81381,0,0,1,76.7998,176H24a8.00008,8.00008,0,0,0-8,8v32a8.00008,8.00008,0,0,0,8,8H76.57812L50.39624,296H40a8.00008,8.00008,0,0,0-8,8,64,64,0,0,0,128,0,8.00008,8.00008,0,0,0-8-8H141.60376l-26.18188-72h19.51367a95.96823,95.96823,0,0,0,63.21631-23.75293l21.05371-18.42285A55.85554,55.85554,0,0,1,224,178.08691V390.11133L211.05566,416H192a7.99927,7.99927,0,0,0-6.3999,3.2002L164.00024,448H128a8.00008,8.00008,0,0,0-8,8v32a8.00008,8.00008,0,0,0,8,8H384a8.00008,8.00008,0,0,0,8-8V456a8.00008,8.00008,0,0,0-8-8H347.99976L326.3999,419.2002A7.99927,7.99927,0,0,0,320,416H300.94434L288,390.11133V178.08691a55.85554,55.85554,0,0,1,4.79443,3.73731H292.794l21.05419,18.42285A95.96823,95.96823,0,0,0,377.06445,224h19.51367l-26.18188,72H360a8.00008,8.00008,0,0,0-8,8,64,64,0,0,0,128,0,8.00008,8.00008,0,0,0-8-8H461.60376l-26.18188-72H488a8.00008,8.00008,0,0,0,8-8V184A8.00008,8.00008,0,0,0,488,176ZM240,48a16,16,0,0,1,32,0v9.46777a87.941,87.941,0,0,0-32,0ZM96,352a48.07871,48.07871,0,0,1-47.3335-40h94.667A48.07871,48.07871,0,0,1,96,352Zm28.57812-56H67.42188l26.18188-72h4.79248ZM376,480H136V464H376Zm-48-32H184l12-16H316Zm-55.15527-52.42188L283.05566,416H228.94434l10.21093-20.42188A7.99934,7.99934,0,0,0,240,392V170.35352a55.56338,55.56338,0,0,1,32,0V392A7.99934,7.99934,0,0,0,272.84473,395.57812ZM416,352a48.07871,48.07871,0,0,1-47.3335-40h94.667A48.07871,48.07871,0,0,1,416,352Zm28.57812-56H387.42188l26.18188-72h4.79248ZM480,208H377.06445a79.97228,79.97228,0,0,1-52.68017-19.79395l-21.0542-18.42285h-.00049a71.87558,71.87558,0,0,0-94.65967,0l-21.0542,18.42285A79.97228,79.97228,0,0,1,134.93555,208H32V192H76.7998a119.78374,119.78374,0,0,0,105.88282-63.5293l9.78759-18.35351a72.00063,72.00063,0,0,1,127.05909,0l9.78857,18.35351A119.78241,119.78241,0,0,0,435.2002,192H480Z" fill="#61481c" data-original="#000000" class=""></path>
                                            <path d="M256,88a24,24,0,1,0,24,24A24.02718,24.02718,0,0,0,256,88Zm0,32a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,256,120Z" fill="#61481c" data-original="#000000" class=""></path>
                                        </g>
                                    </svg>
                                    <div class="mt-0" style="font-size: 12px">Bid <br> Pengacara</div>
                                </a>
                            </div>
                            <div class="col mb-4">
                                <a href="{{url('/')}}/jual-beli-lahan" class="btn btn-outline-light text-dark w-100 rounded-4 shadow">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="85px" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="32" cx="32" cy="32" fill="#ffffff" shape="circle"></circle>
                                        <g transform="matrix(0.7,0,0,0.7,9.600008887052539,9.600000000000001)">
                                            <path xmlns="http://www.w3.org/2000/svg" d="m62.9 52.553-10-20a1 1 0 0 0 -.9-.553h-17v-6h12a1 1 0 0 0 1-1v-18a1 1 0 0 0 -1-1h-30a1 1 0 0 0 -1 1v18a1 1 0 0 0 1 1h12v6h-17a1 1 0 0 0 -.895.553l-10 20a1 1 0 0 0 -.105.447v4a1 1 0 0 0 1 1h60a1 1 0 0 0 1-1v-4a1 1 0 0 0 -.1-.447zm-59.282-.553 4-8h10.6l-2 8zm16.662-8h10.72v8h-12.72zm20.939-10 2 8h-10.219v-8zm-10.219 8h-10.22l2-8h8.22zm2 2h10.719l2 8h-12.719zm14.779 8-2-8h10.6l4 8zm7.6-10h-10.1l-2-8h8.1zm-37.379-34h28v16h-28zm13 18h2v6h-2zm-18.382 8h8.1l-2 8h-10.1zm-9.618 22v-2h58v2z" fill="#61481c" data-original="#000000" class=""></path>
                                            <path xmlns="http://www.w3.org/2000/svg" d="m26.293 39.707a1 1 0 0 0 1.414 0l2-2-1.414-1.414-1.293 1.293-1.293-1.293-1.414 1.414z" fill="#61481c" data-original="#000000" class=""></path>
                                            <path xmlns="http://www.w3.org/2000/svg" d="m26.293 46.293-1.293 1.293-1.293-1.293-1.414 1.414 2 2a1 1 0 0 0 1.414 0l2-2z" fill="#61481c" data-original="#000000" class=""></path>
                                            <path xmlns="http://www.w3.org/2000/svg" d="m39.293 46.293-1.293 1.293-1.293-1.293-1.414 1.414 2 2a1 1 0 0 0 1.414 0l2-2z" fill="#61481c" data-original="#000000" class=""></path>
                                            <path xmlns="http://www.w3.org/2000/svg" d="m37.293 39.707a1 1 0 0 0 1.414 0l2-2-1.414-1.414-1.293 1.293-1.293-1.293-1.414 1.414z" fill="#61481c" data-original="#000000" class=""></path>
                                            <path xmlns="http://www.w3.org/2000/svg" d="m48.293 39.707a1 1 0 0 0 1.414 0l2-2-1.414-1.414-1.293 1.293-1.293-1.293-1.414 1.414z" fill="#61481c" data-original="#000000" class=""></path>
                                            <path xmlns="http://www.w3.org/2000/svg" d="m53.293 46.293-1.293 1.293-1.293-1.293-1.414 1.414 2 2a1 1 0 0 0 1.414 0l2-2z" fill="#61481c" data-original="#000000" class=""></path>
                                            <path xmlns="http://www.w3.org/2000/svg" d="m13.293 46.293-1.293 1.293-1.293-1.293-1.414 1.414 2 2a1 1 0 0 0 1.414 0l2-2z" fill="#61481c" data-original="#000000" class=""></path>
                                            <path xmlns="http://www.w3.org/2000/svg" d="m14.293 39.707a1 1 0 0 0 1.414 0l2-2-1.414-1.414-1.293 1.293-1.293-1.293-1.414 1.414z" fill="#61481c" data-original="#000000" class=""></path>
                                            <path xmlns="http://www.w3.org/2000/svg" d="m32 13a1 1 0 0 1 1 1h2a3 3 0 0 0 -2-2.816v-1.184h-2v1.184a2.993 2.993 0 0 0 1 5.816 1 1 0 1 1 -1 1h-2a3 3 0 0 0 2 2.816v1.184h2v-1.184a2.993 2.993 0 0 0 -1-5.816 1 1 0 0 1 0-2z" fill="#61481c" data-original="#000000" class=""></path>
                                            <path xmlns="http://www.w3.org/2000/svg" d="m37 13h4v2h-4z" fill="#61481c" data-original="#000000" class=""></path>
                                            <path xmlns="http://www.w3.org/2000/svg" d="m37 17h4v2h-4z" fill="#61481c" data-original="#000000" class=""></path>
                                            <path xmlns="http://www.w3.org/2000/svg" d="m23 13h4v2h-4z" fill="#61481c" data-original="#000000" class=""></path>
                                            <path xmlns="http://www.w3.org/2000/svg" d="m23 17h4v2h-4z" fill="#61481c" data-original="#000000" class=""></path>
                                        </g>
                                    </svg>
                                    <div class="mt-0" style="font-size: 12px">Jual Beli <br> Lahan</div>
                                </a>
                            </div>
                            <div class="col mb-4">
                                <a href="{{url('/')}}/lelang-lahan" class="btn btn-outline-light text-dark w-100 rounded-4 shadow">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="85px" x="0" y="0" viewBox="0 0 479.976 479.976" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="239.988" cx="239.988" cy="239.988" fill="#ffffff" shape="circle">
                                        </circle>
                                        <g transform="matrix(0.7,0,0,0.7,71.99629760161042,71.99643859863284)">
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path d="M279.339,144.016c-3.789-18.657-20.202-32.059-39.24-32.04c-13.255,0-24-10.745-24-24s10.745-24,24-24s24,10.745,24,24h16    c-0.024-19.001-13.389-35.373-32-39.2v-16.8h-16v16.8c-21.65,4.396-35.636,25.51-31.24,47.16    c3.789,18.657,20.202,32.059,39.24,32.04c13.255,0,24,10.745,24,24s-10.745,24-24,24s-24-10.745-24-24h-16    c0.024,19.001,13.389,35.373,32,39.2v16.8h16v-16.8C269.748,186.779,283.735,165.665,279.339,144.016z" fill="#61481c" data-original="#000000" class=""></path>
                                                </g>
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path d="M360.098,119.976C360.085,53.701,306.348-0.014,240.074,0C173.8,0.014,120.085,53.75,120.098,120.025    c0.012,57.014,40.138,106.148,96,117.551v82.4h-8c-1.959,0.002-3.849,0.722-5.312,2.024l-72,64    c-1.708,1.517-2.686,3.692-2.688,5.976v80c0,4.418,3.582,8,8,8h152c13.197,0.058,23.943-10.593,24.002-23.79    c0.027-5.995-2.201-11.781-6.242-16.21c8.32-9.044,8.32-22.956,0-32c8.32-9.044,8.32-22.956,0-32    c8.894-9.75,8.2-24.864-1.55-33.758c-4.429-4.04-10.215-6.268-16.21-6.242h-9.472c-2.42-6.776-7.753-12.108-14.528-14.528v-83.872    C319.936,226.099,360.033,176.98,360.098,119.976z M240.098,387.975v-20h-16v20c0.014,9.117,4.475,17.654,11.952,22.872    c-6.026,9.08-5.082,21.1,2.288,29.128c-6.019,6.444-7.878,15.737-4.8,24h-89.44v-68.408l67.04-59.592h44.96c4.418,0,8,3.582,8,8    v44c0,6.627-5.373,12-12,12C245.471,399.975,240.098,394.603,240.098,387.975z M232.098,319.975v-80.408    c2.656,0.176,5.296,0.408,8,0.408s5.344-0.232,8-0.408v80.408H232.098z M288.098,463.975h-32c-4.418,0-8-3.582-8-8s3.582-8,8-8h32    c4.418,0,8,3.582,8,8S292.517,463.975,288.098,463.975z M280.098,351.975h8c4.418,0,8,3.582,8,8s-3.582,8-8,8h-8V351.975z     M280.098,387.975v-4h8c4.418,0,8,3.582,8,8s-3.582,8-8,8H277.29C279.115,396.237,280.075,392.136,280.098,387.975z     M288.098,415.975c4.418,0,8,3.582,8,8s-3.582,8-8,8h-32c-4.418,0-8-3.582-8-8s3.582-8,8-8H288.098z M240.098,223.975    c-57.41-0.066-103.934-46.59-104-104c0-57.438,46.562-104,104-104s104,46.562,104,104S297.536,223.975,240.098,223.975z" fill="#61481c" data-original="#000000" class=""></path>
                                                </g>
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path d="M72.098,311.975c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8h16c-0.042-10.134-6.445-19.15-16-22.528v-9.472h-16v9.472    c-12.473,4.393-19.023,18.066-14.629,30.539c3.38,9.596,12.455,16.009,22.629,15.989c4.418,0,8,3.582,8,8s-3.582,8-8,8    s-8-3.582-8-8h-16c0.042,10.134,6.445,19.15,16,22.528v9.472h16v-9.472c12.473-4.393,19.023-18.066,14.629-30.539    C91.348,318.369,82.272,311.956,72.098,311.975z" fill="#61481c" data-original="#000000" class=""></path>
                                                </g>
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path d="M72.124,247.949c-39.765-0.014-72.012,32.209-72.026,71.974c-0.013,36.679,27.548,67.505,64,71.58v88.472h16v-88.472    c36.414-4.108,63.95-34.883,64-71.528C144.113,280.211,111.889,247.964,72.124,247.949z M72.098,375.975    c-30.928,0-56-25.072-56-56c0-30.928,25.072-56,56-56c30.928,0,56,25.072,56,56C128.059,350.887,103.01,375.936,72.098,375.975z" fill="#61481c" data-original="#000000" class=""></path>
                                                </g>
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path d="M408.098,311.975c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8h16c-0.042-10.134-6.445-19.15-16-22.528v-9.472h-16v9.472    c-12.473,4.393-19.023,18.066-14.629,30.539c3.38,9.596,12.455,16.009,22.629,15.989c4.418,0,8,3.582,8,8s-3.582,8-8,8    s-8-3.582-8-8h-16c0.042,10.134,6.445,19.15,16,22.528v9.472h16v-9.472c12.473-4.393,19.023-18.066,14.63-30.539    C427.348,318.369,418.272,311.956,408.098,311.975z" fill="#61481c" data-original="#000000" class=""></path>
                                                </g>
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path d="M479.399,311.748c-4.17-36.255-34.807-63.657-71.301-63.772c-39.764,0.126-71.898,32.463-71.772,72.227    c0.115,36.494,27.517,67.131,63.772,71.301v88.472h16v-88.472C455.602,386.96,483.943,351.252,479.399,311.748z M408.098,375.975    c-30.928,0-56-25.072-56-56c0-30.928,25.072-56,56-56c30.928,0,56,25.072,56,56C464.059,350.887,439.01,375.936,408.098,375.975z" fill="#61481c" data-original="#000000" class=""></path>
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
                                    <div class="mt-0" style="font-size: 12px">Pelelangan <br> Lahan</div>
                                </a>
                            </div>
                            <div class="col mb-4">
                                <a href="{{url('/')}}/jasa-tukang-ukur" class="btn btn-outline-light text-dark w-100 rounded-4 shadow">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="77px" x="0" y="0" viewBox="0 0 54 60" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="27" cx="27" cy="30" fill="#ffffff" shape="circle"></circle>
                                        <g transform="matrix(0.7,0,0,0.7,8.084528160095218,8.999380803108217)">
                                            <g xmlns="http://www.w3.org/2000/svg" id="Page-1" fill="none" fill-rule="evenodd">
                                                <g id="022---Tape-Measure" fill="rgb(0,0,0)" fill-rule="nonzero" transform="translate(0 -1)">
                                                    <path id="Shape" d="m35.264 1.609c-3.7378983-.44229717-7.5002037-.64571016-11.264-.609-13.458 0-24 5.271-24 12v16c0 5.383 6.783 9.917 16.775 11.445-2.7926667 2.016-5.7446667 4.0936667-8.856 6.233-.52171701.3581018-.84249019.9425814-.86438596 1.5749943s.25768537 1.2376783.75338596 1.6310057l13.344 10.677c.7075125.5643386 1.7047481.5868449 2.437.055 2.234-1.627 4.415-3.327 6.539-5.072 2.0666667-1.7006667 4.0666667-3.4456667 6-5.235.01-.011.024-.014.033-.025l.007-.012c1.8933333-1.75 3.708-3.5286667 5.444-5.336.021-.02.049-.028.068-.051s.016-.033.027-.048c1.274-1.329 2.516-2.666 3.689-4.011 3.332-3.822 7.478-8.577 8.268-14.434.806-5.974-.307-14.827-6.094-20.117-3.615-3.316-8.248-4.147-12.306-4.666zm-11.264 1.391c11.925 0 22 4.58 22 10 0 6.481-12.9 10-22 10-11.925 0-22-4.58-22-10s10.075-10 22-10zm-22 26v-11.126c3.67 4.233 12.033 7.126 22 7.126 5.2574546.0850922 10.482356-.8399846 15.391-2.725-6.137036 5.6608759-12.6126553 10.9432928-19.391 15.818v-5.093c0-.5522847-.4477153-1-1-1s-1 .4477153-1 1v5.6c-1.6868152-.2203923-3.35715-.5524548-5-.994v-5.606c0-.5522847-.4477153-1-1-1s-1 .4477153-1 1v5c-1.38319746-.4632171-2.72192488-1.0499144-4-1.753v-6.247c0-.5522847-.44771525-1-1-1s-1 .4477153-1 1v4.931c-1.9-1.482-3-3.176-3-4.931zm20.4 30-13.349-10.673c1.525-1.048 3.157-2.182 4.851-3.375.8795125.5637678 1.9341854.788068 2.967.631.6467275-.1382595 1.3217636.0033584 1.858396.3898785s.8848318.9819079.958604 1.6391215c.402216 2.320963 2.5831155 3.8968216 4.913 3.55.6475955-.1324477 1.3210571.0126426 1.8566662.3999993.535609.3873568.8843101.9815027.9613338 1.6380007.1115411.5302585.3016372 1.040889.564 1.515-1.819 1.467-3.681 2.902-5.581 4.285zm29.291-32.88c-.2314302 1.5810662-.7085194 3.1162541-1.414 4.55l-1.422-2c-.3203252-.4501121-.9448879-.5553252-1.395-.235s-.5553252.9448879-.235 1.395l1.991 2.8c-.9637169 1.5504227-2.0385323 3.0289622-3.216 4.424l-2.783-3.182c-.2344926-.2711789-.5962086-.3960829-.9480668-.3273765-.3518582.0687063-.6400157.3205093-.7552681.6599819-.1152523.3394726-.0399631.7146672.1973349.9833946l2.977 3.412c-.267.309-.532.614-.791.91-.974 1.118-2 2.23-3.046 3.337l-4.2-3.6c-.2690133-.2485449-.6523779-.3301409-.9992902-.2126907-.3469124.1174502-.6018621.415153-.66456.7760016-.0626979.3608485.0768884.7271025.3638502.9546891l4.117 3.533c-1.315 1.345-2.685 2.675-4.093 3.99l-4.725-4.048c-.2715218-.2322227-.6463077-.3019501-.9831793-.1829166-.3368717.1190335-.5846503.4087439-.6500001.7600001-.0653497.3512561.0616575.7106939.3331794.9429165l4.55 3.894c-1.4 1.273-2.857 2.52-4.334 3.75-.0840051-.2267706-.1538069-.4585525-.209-.694-.4011847-2.3176237-2.5798838-3.8905859-4.906-3.542-.6498109.1317688-1.3251096-.0145721-1.8620778-.4035225-.5369682-.3889505-.8865429-.9849718-.9639222-1.6434775-.3956791-2.3200929-2.5801354-3.8932042-4.906-3.533-.2990527.032209-.6006079.0338843-.9.005 11.38-8.1 24.973-18.56 30.1-25.628 1.2497329-1.3192534 1.9876535-3.0411864 2.081-4.856.052-3.144-2.156-5.638-4.789-7.387 1.0986623.52852923 2.1165304 1.21069956 3.023 2.026 4.878 4.462 6.256 12.442 5.457 18.372z" fill="#61481c" data-original="#000000" class=""></path>
                                                    <path id="Shape" d="m23.969 19c4.091 0 10.919-1.174 12.678-4.88 1.194-2.516-.879-5.1-3.215-6.678-2.2044717-1.3965907-4.6319185-2.40518012-7.177-2.982-.778402-.19740877-1.6042675-.03956041-2.255.431-.3982804.28692111-.7127686.67493952-.911 1.124-6.945.227-12.089 2.953-12.089 6.485 0 4.715 7.876 6.5 12.969 6.5zm7.343-3.2.358-7.106c.2226667.13333333.4376667.26966667.645.409 3.756 2.532 3.677 4.942-1.003 6.697zm-6.456-8.717v-.019c.017091-.22037403.1305214-.42198743.31-.551.1701891-.12668716.3886521-.16934997.594-.116 1.3508165.33520878 2.6737454.77417913 3.957 1.313l-.438 8.706c-1.6840136.3905512-3.4072936.5865005-5.136.5840236zm-2.072.946-.639 8.9c-5.511-.398-9.145-2.538-9.145-4.429 0-1.977 3.965-4.19 9.784-4.471z" fill="#61481c" data-original="#000000" class=""></path>
                                                    <path id="Shape" d="m27 11c-.5522847 0-1 .4477153-1 1v1c0 .5522847.4477153 1 1 1s1-.4477153 1-1v-1c0-.5522847-.4477153-1-1-1z" fill="#61481c" data-original="#000000" class=""></path>
                                                    <path id="Shape" d="m16.625 49.219c-.4313344-.3451779-1.060822-.2753344-1.406.156-.3451779.4313344-.2753344 1.060822.156 1.406l5 4c.4313344.3451779 1.060822.2753344 1.406-.156.3451779-.4313344.2753344-1.060822-.156-1.406z" fill="#61481c" data-original="#000000" class=""></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="mt-0" style="font-size: 12px">Jasa <br> Petugas Ukur</div>
                                </a>
                            </div>
                            <div class="col mb-4">
                                <a href="{{url('/')}}/jasa-pengacara" class="btn btn-outline-light text-dark w-100 rounded-4 shadow">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="85px" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="256" cx="256" cy="256" fill="#ffffff" shape="circle"></circle>
                                        <g transform="matrix(0.7,0,0,0.7,76.80000457763674,76.81020755767824)">
                                            <g id="Outline">
                                                <path d="M459.642,296.664l-55.32-15.656L384,260.686V231.992A79.9,79.9,0,0,0,416,168v-2.414a32,32,0,0,0,0-64v-24c0-22-11.1-42.048-28.283-51.063q-.312-.163-.638-.3a133.54,133.54,0,0,0-102.158,0q-.325.135-.638.3C267.1,35.54,256,55.584,256,77.588v24a32,32,0,1,0,0,64V168a79.868,79.868,0,0,0,17.011,49.32,35.751,35.751,0,0,1-26.136-3.091,51.935,51.935,0,0,0-46.051-1.62l-1.265.577A31.359,31.359,0,0,0,200,208a32,32,0,0,0-64,0,31.359,31.359,0,0,0,.441,5.186l-1.266-.577a51.772,51.772,0,0,0-46.055,1.623,36.11,36.11,0,0,1-27.462,2.718l-3.349-1.01-4.618,15.32,3.328,1a51.822,51.822,0,0,0,12.81,2.19L16.845,340.422l.006,0A7.952,7.952,0,0,0,16,344a40.045,40.045,0,0,0,40,40h48a40.045,40.045,0,0,0,40-40,7.952,7.952,0,0,0-.851-3.575l.006,0L88.818,231.748a50.221,50.221,0,0,0,7.978-3.477,36.178,36.178,0,0,1,31.749-1.1L144,234.209V416.8a40.015,40.015,0,0,0-31.325,31.876A39.993,39.993,0,0,0,80,488a8,8,0,0,0,8,8H192V343.231a31.954,31.954,0,0,1,24.239-31.044l22.669-5.668L232.04,375.2A8,8,0,0,0,240,384h21.754l-5.515,22.06a8,8,0,0,0,3.323,8.6L328,460.281V496h16V460.281l68.438-45.625a8,8,0,0,0,3.323-8.6L410.246,384H432a8,8,0,0,0,7.96-8.8l-6.869-68.685,22.67,5.668A31.954,31.954,0,0,1,480,343.231V496h16V343.231A47.931,47.931,0,0,0,459.642,296.664ZM104,368H56a24.042,24.042,0,0,1-22.629-16h93.258A24.042,24.042,0,0,1,104,368ZM36.944,336,80,249.889,123.056,336Zm198.562-45.123L256,249.889l14.266,28.531-2.588,2.588ZM328,325.626l8-9.333,8,9.333v86.9l-8,21-8-21Zm-16,44.9-6.919-18.164L312,344.292Zm48,0V344.292l6.919,8.072Zm-61.4-35.184-17.277-45.35L296,275.314l29.1,29.1Zm74.806,0L346.9,304.418l29.1-29.1,14.68,14.68ZM368,260.686l-32,32-32-32V241.331a80.108,80.108,0,0,0,64,0Zm-80-28.694v28.694l-5.809,5.809-16.02-32.041a51.807,51.807,0,0,0,12.788-2.184l6.872-1.961Q286.9,231.169,288,231.992Zm144-98.406a16.019,16.019,0,0,1-16,16v-32A16.019,16.019,0,0,1,432,133.586Zm-160-56c0-15.994,7.611-30.369,19.419-36.736a117.457,117.457,0,0,1,89.162,0C392.389,47.219,400,61.594,400,77.588v7.267A195.151,195.151,0,0,1,386.27,58.44a8,8,0,0,0-10.15-4.347,114.855,114.855,0,0,1-80.239,0,8,8,0,0,0-10.15,4.348A195.059,195.059,0,0,1,272,84.856Zm-32,56a16.019,16.019,0,0,1,16-16v32A16.019,16.019,0,0,1,240,133.586Zm32-21.179a200.571,200.571,0,0,0,25.407-40.9,130.866,130.866,0,0,0,77.188,0,200.548,200.548,0,0,0,25.4,40.9V168a64,64,0,1,1-128,0ZM168,192a16.019,16.019,0,0,1,16,16,15.78,15.78,0,0,1-5.354,11.828A8,8,0,0,0,176,225.771V416H160V225.771a8,8,0,0,0-2.646-5.943A15.78,15.78,0,0,1,152,208,16.019,16.019,0,0,1,168,192ZM135.027,439.027A23.847,23.847,0,0,1,152,432h24v16H129.357A23.908,23.908,0,0,1,135.027,439.027ZM97.357,480A24.037,24.037,0,0,1,120,464h56v16ZM192,307.443V234.209l15.455-7.038A35.9,35.9,0,0,1,222.23,224a35.477,35.477,0,0,1,16.971,4.269,50.3,50.3,0,0,0,7.979,3.483l-32.118,64.236-2.7.676A47.929,47.929,0,0,0,192,307.443Zm81.129,97.028,6.632-26.531A8,8,0,0,0,272,368H248.84l6.6-66.049,11.81-3.936,52.361,137.447ZM400,368a8,8,0,0,0-7.761,9.94l6.632,26.531-46.486,30.991,52.361-137.447,11.81,3.936L423.16,368Z" fill="#61481c" data-original="#000000" class=""></path>
                                                <path d="M300,136a12,12,0,1,0-12-12A12.013,12.013,0,0,0,300,136Z" fill="#61481c" data-original="#000000" class=""></path>
                                                <path d="M372,136a12,12,0,1,0-12-12A12.013,12.013,0,0,0,372,136Z" fill="#61481c" data-original="#000000" class=""></path>
                                                <path d="M312,184h14.891c13.9,0,27.091-3.228,37.14-9.09l-8.062-13.82c-7.529,4.391-18.127,6.91-29.078,6.91H312Z" fill="#61481c" data-original="#000000" class=""></path>
                                                <rect x="296" y="464" width="16" height="16" fill="#61481c" data-original="#000000" class=""></rect>
                                                <rect x="232" y="424" width="16" height="72" fill="#61481c" data-original="#000000" class=""></rect>
                                                <rect x="424" y="424" width="16" height="72" fill="#61481c" data-original="#000000" class=""></rect>
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="mt-0" style="font-size: 12px">Jasa <br> Pengacara</div>
                                </a>
                            </div>
                            <div class="col mb-4">
                                <a href="{{url('/')}}/jasa-notaris" class="btn btn-outline-light text-dark w-100 rounded-4 shadow" href="https://mitra.atrbpn.go.id">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="85px" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="256" cx="256" cy="256" fill="#ffffff" shape="circle"></circle>
                                        <g transform="matrix(0.7,0,0,0.7,76.80001373291017,76.80002059936524)">
                                            <g>
                                                <path d="m416.652 358.622-67.31-20.727-10.825-21.648c-1.882-3.766-5.269-6.639-9.291-7.884-3.172-.981-6.585-.887-9.693.192v-16.899c25.014-17.396 42.619-44.741 47.02-76.253h4.457c14.618 0 27.156-10.862 28.544-24.728.778-7.771-1.764-15.53-6.974-21.287-.319-.352-.646-.694-.981-1.028v-64.667c0-57.176-46.516-103.693-103.693-103.693h-72.146c-13.014 0-24.578 6.318-31.793 16.046-.091-.003-.18-.014-.272-.014-35.076 0-63.613 28.537-63.613 63.613v89.276c-4.292 4.301-7.171 9.906-7.794 16.126-.779 7.771 1.762 15.531 6.972 21.289 5.214 5.762 12.659 9.067 20.426 9.067h5.598c4.399 31.521 22.003 58.869 47.022 76.263v16.889c-3.108-1.079-6.52-1.173-9.692-.192-4.022 1.244-7.409 4.118-9.292 7.884l-10.853 21.706-67.121 20.669c-23.468 7.227-39.235 28.58-39.235 53.135v92.743c0 4.143 3.358 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-92.743c0-17.93 11.513-33.522 28.649-38.799l20.4-6.282v9.565c0 12.976 10.557 23.533 23.532 23.533h6.884l-4.063 20.317c-1.799 8.998.399 18.312 6.033 25.556l49.355 63.457c1.479 1.901 3.69 2.896 5.925 2.896 1.609 0 3.23-.516 4.599-1.58 3.27-2.543 3.859-7.255 1.315-10.524l-49.355-63.457c-2.955-3.8-4.108-8.687-3.165-13.406l5.857-29.288c.44-2.203-.13-4.488-1.555-6.226-1.424-1.738-3.553-2.745-5.8-2.745h-16.032c-4.705 0-8.532-3.828-8.532-8.533v-14.184l28.952-8.915 85.235 154.972c1.318 2.396 3.836 3.886 6.572 3.886s5.253-1.489 6.572-3.886l85.259-155.014 28.928 8.908v14.234c0 4.705-3.828 8.533-8.532 8.533h-16.032c-2.247 0-4.375 1.007-5.8 2.745s-1.995 4.022-1.555 6.226l5.857 29.288c.944 4.72-.209 9.605-3.164 13.405l-49.355 63.457c-2.543 3.27-1.954 7.981 1.315 10.524 1.369 1.064 2.99 1.58 4.599 1.58 2.235 0 4.447-.994 5.925-2.896l49.356-63.457c5.634-7.244 7.833-16.559 6.033-25.556l-4.063-20.317h6.884c12.976 0 23.532-10.557 23.532-23.533v-9.615l20.56 6.331c17.136 5.277 28.649 20.869 28.649 38.799v92.744c0 4.143 3.358 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-92.743c0-24.555-15.767-45.908-39.235-53.135zm-136 85.35-4.672-42.017c3.07-2.69 5.465-6.185 6.822-10.255l1.708-5.123 15.279 13.096c1.184 1.015 2.5 1.821 3.892 2.43zm-72.491-41.87c1.392-.609 2.707-1.415 3.891-2.43l15.403-13.202 1.743 5.23c1.356 4.069 3.751 7.564 6.821 10.254l-4.698 42.257zm35.268-15.145-3.676-11.028 16.167-13.858 16.291 13.964-3.64 10.922c-1.163 3.489-4.416 5.834-8.094 5.834h-8.954c-3.678 0-6.931-2.345-8.094-5.834zm81.363-64.264c.21.065.284.213.309.262l10.493 20.986-25.261 44.206c-.036.063-.121.211-.36.252-.245.04-.369-.069-.424-.116l-40.563-34.769 55.403-30.78c.047-.026.191-.106.403-.041zm-147.768-291.192c-.541 2.604-.828 5.301-.828 8.063 0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5c0-13.544 11.019-24.564 24.564-24.564h72.146c48.906 0 88.693 39.788 88.693 88.693v56.995c-1.461-.24-2.946-.366-4.444-.366h-12.025c-4.705 0-8.532-3.828-8.532-8.547l-.04-20.221c-.03-15.096-10.815-28.103-25.646-30.928l-129.797-24.723c-6.911-1.315-13.985.501-19.406 4.987s-8.53 11.094-8.53 18.13v28.722c0 17.965-14.616 32.581-32.581 32.581-.174 0-.345.012-.516.023v-80.701c.001-24.541 18.284-44.88 41.942-48.144zm-17.813 168.386c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v.516h-4.524c-3.537 0-6.927-1.506-9.303-4.131-2.407-2.66-3.532-6.115-3.17-9.729.63-6.292 6.612-11.221 13.619-11.221 1.188 0 2.311-.276 3.309-.768 22.173-4.037 39.038-23.493 39.038-46.813v-28.721c0-2.551 1.127-4.947 3.093-6.573 1.965-1.626 4.53-2.286 7.036-1.808l129.797 24.723c7.779 1.481 13.437 8.304 13.452 16.223l.04 20.206c0 12.976 10.557 23.533 23.532 23.533h12.024c3.537 0 6.928 1.505 9.303 4.13 2.406 2.659 3.532 6.114 3.17 9.729-.63 6.292-6.612 11.222-13.619 11.222h-3.382v-.439c0-4.141-3.356-7.499-7.497-7.5-.001 0-.002 0-.003 0-4.14 0-7.497 3.354-7.5 7.495-.039 53.286-43.421 96.638-96.706 96.638-53.325-.002-96.709-43.386-96.709-96.712zm27.528 123.068c.024-.049.099-.197.309-.262.21-.063.355.015.403.042l16.389 9.105c3.622 2.013 8.188.707 10.199-2.914 2.012-3.621.707-8.187-2.914-10.199l-3.817-2.121v-16.156c14.706 7.138 31.2 11.147 48.614 11.147 17.411 0 33.905-4.012 48.612-11.153v16.163l-48.612 27.007-18.224-10.125c-3.622-2.011-8.187-.706-10.199 2.914-2.012 3.621-.707 8.187 2.914 10.199l12.443 6.913-40.564 34.77c-.055.047-.182.159-.424.116-.24-.042-.324-.189-.36-.252l-25.26-44.206zm69.181 165.983-12.051-21.911c.007-.052.019-.101.024-.153l6.574-59.124c.352.016.701.042 1.056.042h8.954c.354 0 .704-.026 1.055-.042l6.566 59.049z" fill="#61481c" data-original="#000000" class=""></path>
                                                <path d="m207.823 168.339c-4.142 0-7.5 3.358-7.5 7.5v8.016c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-8.016c0-4.142-3.358-7.5-7.5-7.5z" fill="#61481c" data-original="#000000" class=""></path>
                                                <path d="m304.017 168.339c-4.142 0-7.5 3.358-7.5 7.5v8.016c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-8.016c0-4.142-3.358-7.5-7.5-7.5z" fill="#61481c" data-original="#000000" class=""></path>
                                                <path d="m285.308 226.684c-2.91-2.949-7.659-2.98-10.606-.071-2.737 2.701-9.298 5.855-18.781 5.855s-16.043-3.154-18.781-5.855c-2.95-2.91-7.698-2.877-10.606.071-2.909 2.948-2.877 7.697.071 10.606 6.459 6.373 17.418 10.177 29.316 10.177s22.857-3.805 29.316-10.177c2.948-2.909 2.98-7.658.071-10.606z" fill="#61481c" data-original="#000000" class=""></path>
                                                <path d="m215.84 144.291h-16.033c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h16.033c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5z" fill="#61481c" data-original="#000000" class=""></path>
                                                <path d="m296.001 159.291h16.032c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-16.032c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5z" fill="#61481c" data-original="#000000" class=""></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="mt-0" style="font-size: 12px">Jasa <br> Notaris</div>
                                </a>
                            </div>
                            <div class="col mb-4">
                                <a href="{{url('/')}}/jasa-ppat" class="btn btn-outline-light text-dark w-100 rounded-4 shadow" href="https://mitra.atrbpn.go.id">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="85px" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="256" cx="256" cy="256" fill="#ffffff" shape="circle"></circle>
                                        <g transform="matrix(0.7,0,0,0.7,76.80001373291017,76.80002059936524)">
                                            <g>
                                                <path d="m416.652 358.622-67.31-20.727-10.825-21.648c-1.882-3.766-5.269-6.639-9.291-7.884-3.172-.981-6.585-.887-9.693.192v-16.899c25.014-17.396 42.619-44.741 47.02-76.253h4.457c14.618 0 27.156-10.862 28.544-24.728.778-7.771-1.764-15.53-6.974-21.287-.319-.352-.646-.694-.981-1.028v-64.667c0-57.176-46.516-103.693-103.693-103.693h-72.146c-13.014 0-24.578 6.318-31.793 16.046-.091-.003-.18-.014-.272-.014-35.076 0-63.613 28.537-63.613 63.613v89.276c-4.292 4.301-7.171 9.906-7.794 16.126-.779 7.771 1.762 15.531 6.972 21.289 5.214 5.762 12.659 9.067 20.426 9.067h5.598c4.399 31.521 22.003 58.869 47.022 76.263v16.889c-3.108-1.079-6.52-1.173-9.692-.192-4.022 1.244-7.409 4.118-9.292 7.884l-10.853 21.706-67.121 20.669c-23.468 7.227-39.235 28.58-39.235 53.135v92.743c0 4.143 3.358 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-92.743c0-17.93 11.513-33.522 28.649-38.799l20.4-6.282v9.565c0 12.976 10.557 23.533 23.532 23.533h6.884l-4.063 20.317c-1.799 8.998.399 18.312 6.033 25.556l49.355 63.457c1.479 1.901 3.69 2.896 5.925 2.896 1.609 0 3.23-.516 4.599-1.58 3.27-2.543 3.859-7.255 1.315-10.524l-49.355-63.457c-2.955-3.8-4.108-8.687-3.165-13.406l5.857-29.288c.44-2.203-.13-4.488-1.555-6.226-1.424-1.738-3.553-2.745-5.8-2.745h-16.032c-4.705 0-8.532-3.828-8.532-8.533v-14.184l28.952-8.915 85.235 154.972c1.318 2.396 3.836 3.886 6.572 3.886s5.253-1.489 6.572-3.886l85.259-155.014 28.928 8.908v14.234c0 4.705-3.828 8.533-8.532 8.533h-16.032c-2.247 0-4.375 1.007-5.8 2.745s-1.995 4.022-1.555 6.226l5.857 29.288c.944 4.72-.209 9.605-3.164 13.405l-49.355 63.457c-2.543 3.27-1.954 7.981 1.315 10.524 1.369 1.064 2.99 1.58 4.599 1.58 2.235 0 4.447-.994 5.925-2.896l49.356-63.457c5.634-7.244 7.833-16.559 6.033-25.556l-4.063-20.317h6.884c12.976 0 23.532-10.557 23.532-23.533v-9.615l20.56 6.331c17.136 5.277 28.649 20.869 28.649 38.799v92.744c0 4.143 3.358 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-92.743c0-24.555-15.767-45.908-39.235-53.135zm-136 85.35-4.672-42.017c3.07-2.69 5.465-6.185 6.822-10.255l1.708-5.123 15.279 13.096c1.184 1.015 2.5 1.821 3.892 2.43zm-72.491-41.87c1.392-.609 2.707-1.415 3.891-2.43l15.403-13.202 1.743 5.23c1.356 4.069 3.751 7.564 6.821 10.254l-4.698 42.257zm35.268-15.145-3.676-11.028 16.167-13.858 16.291 13.964-3.64 10.922c-1.163 3.489-4.416 5.834-8.094 5.834h-8.954c-3.678 0-6.931-2.345-8.094-5.834zm81.363-64.264c.21.065.284.213.309.262l10.493 20.986-25.261 44.206c-.036.063-.121.211-.36.252-.245.04-.369-.069-.424-.116l-40.563-34.769 55.403-30.78c.047-.026.191-.106.403-.041zm-147.768-291.192c-.541 2.604-.828 5.301-.828 8.063 0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5c0-13.544 11.019-24.564 24.564-24.564h72.146c48.906 0 88.693 39.788 88.693 88.693v56.995c-1.461-.24-2.946-.366-4.444-.366h-12.025c-4.705 0-8.532-3.828-8.532-8.547l-.04-20.221c-.03-15.096-10.815-28.103-25.646-30.928l-129.797-24.723c-6.911-1.315-13.985.501-19.406 4.987s-8.53 11.094-8.53 18.13v28.722c0 17.965-14.616 32.581-32.581 32.581-.174 0-.345.012-.516.023v-80.701c.001-24.541 18.284-44.88 41.942-48.144zm-17.813 168.386c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v.516h-4.524c-3.537 0-6.927-1.506-9.303-4.131-2.407-2.66-3.532-6.115-3.17-9.729.63-6.292 6.612-11.221 13.619-11.221 1.188 0 2.311-.276 3.309-.768 22.173-4.037 39.038-23.493 39.038-46.813v-28.721c0-2.551 1.127-4.947 3.093-6.573 1.965-1.626 4.53-2.286 7.036-1.808l129.797 24.723c7.779 1.481 13.437 8.304 13.452 16.223l.04 20.206c0 12.976 10.557 23.533 23.532 23.533h12.024c3.537 0 6.928 1.505 9.303 4.13 2.406 2.659 3.532 6.114 3.17 9.729-.63 6.292-6.612 11.222-13.619 11.222h-3.382v-.439c0-4.141-3.356-7.499-7.497-7.5-.001 0-.002 0-.003 0-4.14 0-7.497 3.354-7.5 7.495-.039 53.286-43.421 96.638-96.706 96.638-53.325-.002-96.709-43.386-96.709-96.712zm27.528 123.068c.024-.049.099-.197.309-.262.21-.063.355.015.403.042l16.389 9.105c3.622 2.013 8.188.707 10.199-2.914 2.012-3.621.707-8.187-2.914-10.199l-3.817-2.121v-16.156c14.706 7.138 31.2 11.147 48.614 11.147 17.411 0 33.905-4.012 48.612-11.153v16.163l-48.612 27.007-18.224-10.125c-3.622-2.011-8.187-.706-10.199 2.914-2.012 3.621-.707 8.187 2.914 10.199l12.443 6.913-40.564 34.77c-.055.047-.182.159-.424.116-.24-.042-.324-.189-.36-.252l-25.26-44.206zm69.181 165.983-12.051-21.911c.007-.052.019-.101.024-.153l6.574-59.124c.352.016.701.042 1.056.042h8.954c.354 0 .704-.026 1.055-.042l6.566 59.049z" fill="#61481c" data-original="#000000" class=""></path>
                                                <path d="m207.823 168.339c-4.142 0-7.5 3.358-7.5 7.5v8.016c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-8.016c0-4.142-3.358-7.5-7.5-7.5z" fill="#61481c" data-original="#000000" class=""></path>
                                                <path d="m304.017 168.339c-4.142 0-7.5 3.358-7.5 7.5v8.016c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-8.016c0-4.142-3.358-7.5-7.5-7.5z" fill="#61481c" data-original="#000000" class=""></path>
                                                <path d="m285.308 226.684c-2.91-2.949-7.659-2.98-10.606-.071-2.737 2.701-9.298 5.855-18.781 5.855s-16.043-3.154-18.781-5.855c-2.95-2.91-7.698-2.877-10.606.071-2.909 2.948-2.877 7.697.071 10.606 6.459 6.373 17.418 10.177 29.316 10.177s22.857-3.805 29.316-10.177c2.948-2.909 2.98-7.658.071-10.606z" fill="#61481c" data-original="#000000" class=""></path>
                                                <path d="m215.84 144.291h-16.033c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h16.033c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5z" fill="#61481c" data-original="#000000" class=""></path>
                                                <path d="m296.001 159.291h16.032c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-16.032c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5z" fill="#61481c" data-original="#000000" class=""></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="mt-0" style="font-size: 12px">Jasa <br> PPAT</div>
                                </a>
                            </div>
                            <div class="col mb-4">
                                <a href="{{url('/')}}/podcast-sengketa" class="btn btn-outline-light text-dark w-100 rounded-4 shadow">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="85px" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="256" cx="256" cy="256" fill="#ffffff" shape="circle"></circle>
                                        <g transform="matrix(0.7,0,0,0.7,76.80000000000001,76.80000457763674)">
                                            <g xmlns="http://www.w3.org/2000/svg" id="XMLID_81_">
                                                <g id="XMLID_393_">
                                                    <path id="XMLID_433_" d="m256 350.502c46.317 0 84-37.682 84-84v-155.502c0-27.061-13.158-52.623-35.199-68.378-4.495-3.212-10.74-2.172-13.95 2.32-3.212 4.493-2.174 10.739 2.319 13.951 9.158 6.546 16.298 15.315 20.904 25.275h-19.074c-5.522 0-10 4.477-10 10s4.478 10 10 10h24.625c.244 2.258.375 4.537.375 6.832v13.168h-25c-5.522 0-10 4.477-10 10s4.478 10 10 10h25v20h-25c-5.522 0-10 4.477-10 10s4.478 10 10 10h25v20h-128v-20h25c5.522 0 10-4.477 10-10s-4.478-10-10-10h-25v-20h25c5.522 0 10-4.477 10-10s-4.478-10-10-10h-25v-13.168c0-2.295.131-4.574.375-6.832h24.625c5.522 0 10-4.477 10-10s-4.478-10-10-10h-19.078c4.638-10.03 11.846-18.849 21.101-25.412 4.505-3.195 5.566-9.437 2.371-13.942-3.194-4.504-9.436-5.566-13.941-2.372-22.2 15.746-35.453 41.374-35.453 68.558v155.502c0 46.318 37.683 84 84 84zm-64-126.334h128v42.334c0 35.29-28.71 64-64 64s-64-28.71-64-64z" fill="#61481c" data-original="#000000" class=""></path>
                                                    <path id="XMLID_442_" d="m370 256.502c-5.522 0-10 4.477-10 10 0 57.346-46.654 104-104 104s-104-46.654-104-104c0-5.523-4.478-10-10-10s-10 4.477-10 10c0 58.032 40.074 106.873 94 120.323v34.269c-28.346 1.604-50.917 25.166-50.917 53.906 0 5.523 4.478 10 10 10h141.834c5.522 0 10-4.477 10-10 0-28.741-22.571-52.302-50.917-53.906v-34.269c53.926-13.45 94-62.291 94-120.323 0-5.523-4.478-10-10-10zm-54.583 208.498h-118.834c4.28-13.883 17.23-24 32.5-24h53.834c15.27 0 28.22 10.117 32.5 24zm-49.417-74.498v30.498h-20v-30.498z" fill="#61481c" data-original="#000000" class=""></path>
                                                    <path id="XMLID_444_" d="m10 104.79c-5.522 0-10 4.477-10 10v130.168c0 5.523 4.478 10 10 10s10-4.477 10-10v-130.168c0-5.523-4.478-10-10-10z" fill="#61481c" data-original="#000000" class=""></path>
                                                    <path id="XMLID_445_" d="m102 104.79c-5.522 0-10 4.477-10 10v130.168c0 5.523 4.478 10 10 10s10-4.477 10-10v-130.168c0-5.523-4.478-10-10-10z" fill="#61481c" data-original="#000000" class=""></path>
                                                    <path id="XMLID_446_" d="m56 49.914c-5.522 0-10 4.477-10 10v239.92c0 5.523 4.478 10 10 10s10-4.477 10-10v-239.92c0-5.523-4.478-10-10-10z" fill="#61481c" data-original="#000000" class=""></path>
                                                    <path id="XMLID_447_" d="m502 104.79c-5.522 0-10 4.477-10 10v130.168c0 5.523 4.478 10 10 10s10-4.477 10-10v-130.168c0-5.523-4.478-10-10-10z" fill="#61481c" data-original="#000000" class=""></path>
                                                    <path id="XMLID_448_" d="m410 104.79c-5.522 0-10 4.477-10 10v130.168c0 5.523 4.478 10 10 10s10-4.477 10-10v-130.168c0-5.523-4.478-10-10-10z" fill="#61481c" data-original="#000000" class=""></path>
                                                    <path id="XMLID_449_" d="m456 49.914c-5.522 0-10 4.477-10 10v239.92c0 5.523 4.478 10 10 10s10-4.477 10-10v-239.92c0-5.523-4.478-10-10-10z" fill="#61481c" data-original="#000000" class=""></path>
                                                    <path id="XMLID_450_" d="m256 286.84c2.63 0 5.21-1.07 7.069-2.93 1.86-1.87 2.931-4.44 2.931-7.07s-1.07-5.21-2.931-7.08c-1.859-1.86-4.439-2.93-7.069-2.93s-5.21 1.07-7.07 2.93c-1.86 1.87-2.93 4.44-2.93 7.08 0 2.63 1.069 5.2 2.93 7.07 1.86 1.86 4.44 2.93 7.07 2.93z" fill="#61481c" data-original="#000000" class=""></path>
                                                    <path id="XMLID_451_" d="m256.13 47c2.63 0 5.21-1.07 7.07-2.93 1.859-1.86 2.93-4.44 2.93-7.07s-1.07-5.21-2.93-7.07-4.44-2.93-7.07-2.93c-2.64 0-5.21 1.07-7.08 2.93-1.86 1.86-2.92 4.44-2.92 7.07s1.06 5.21 2.92 7.07c1.87 1.86 4.44 2.93 7.08 2.93z" fill="#61481c" data-original="#000000" class=""></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="mt-0" style="font-size: 12px">Podcast <br> Sengketa</div>
                                </a>
                            </div>
                            <div class="col mb-4">
                                <a href="{{url('/')}}/advokasi-pemerintah" class="btn btn-outline-light text-dark w-100 rounded-4 shadow">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="85px" x="0" y="0" viewBox="0 0 512 511" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="256" cx="256" cy="255.5" fill="#ffffff" shape="circle"></circle>
                                        <g transform="matrix(0.7,0,0,0.7,76.80000000000001,76.48344733715058)">
                                            <path d="m256 131.46875c13.273438 0 24.066406-10.796875 24.066406-24.066406 0-13.273438-10.796875-24.070313-24.066406-24.070313s-24.066406 10.796875-24.066406 24.070313c0 13.269531 10.796875 24.066406 24.066406 24.066406zm0-33.136719c5 0 9.066406 4.070313 9.066406 9.070313 0 4.996094-4.066406 9.066406-9.066406 9.066406s-9.066406-4.066406-9.066406-9.066406 4.066406-9.070313 9.066406-9.070313zm0 0" fill="#61481c" data-original="#000000" class=""></path>
                                            <path d="m504.5 461.261719h-9.066406v-25.632813c0-4.140625-3.359375-7.5-7.5-7.5h-25.632813v-25.632812c0-4.140625-3.355469-7.5-7.5-7.5h-9.0625v-164.128906h9.0625c4.144531 0 7.5-3.359376 7.5-7.5v-25.632813h25.632813c4.144531 0 7.5-3.359375 7.5-7.5v-33.132813c0-4.140624-3.355469-7.5-7.5-7.5h-14.222656l-213.441407-147.769531c-2.566406-1.7773435-5.96875-1.7773435-8.539062 0l-213.4375 147.769531h-14.226563c-4.140625 0-7.5 3.355469-7.5 7.5v33.132813c0 4.140625 3.359375 7.5 7.5 7.5h25.632813v25.632813c0 4.140624 3.359375 7.5 7.5 7.5h9.066406v164.128906h-9.066406c-4.140625 0-7.5 3.355468-7.5 7.5v25.632812h-25.632813c-4.140625 0-7.5 3.359375-7.5 7.5v25.632813h-9.066406c-4.144531 0-7.5 3.355469-7.5 7.5v33.128906c0 4.144531 3.355469 7.5 7.5 7.5h497c4.144531 0 7.5-3.355469 7.5-7.5v-33.128906c0-4.140625-3.355469-7.5-7.5-7.5zm-57.199219-33.132813h-67.832031v-18.132812h67.832031zm-51.269531-33.132812v-164.128906h34.703125v164.128906zm51.269531-179.128906h-67.832031v-18.132813h67.832031zm-75.332031 15h9.0625v164.128906h-9.0625c-4.144531 0-7.5 3.355468-7.5 7.5v25.632812h-59.550781v-25.632812c0-4.144532-3.359375-7.5-7.5-7.5h-9.066407v-164.128906h9.066407c4.140625 0 7.5-3.359376 7.5-7.5v-25.632813h59.550781v25.632813c0 4.140624 3.355469 7.5 7.5 7.5zm-149.882812-33.132813h67.832031v18.132813h-67.832031zm16.5625 33.132813h34.703124v164.128906h-34.703124zm51.269531 179.128906v18.132812h-67.832031v-18.132812zm-258.351563-245.394532h9.070313.007812.003907 121.800781c4.144531 0 7.5-3.359374 7.5-7.5 0-4.144531-3.355469-7.5-7.5-7.5h-97.804688l191.355469-132.480468 191.359375 132.480468h-254.910156c-4.140625 0-7.5 3.355469-7.5 7.5 0 4.140626 3.359375 7.5 7.5 7.5h278.816406.023437 9.144532v18.132813h-448.867188zm33.132813 33.132813h67.835937v18.132813h-67.835937zm51.269531 33.132813v164.128906h-34.703125v-164.128906zm-51.269531 179.128906h67.835937v18.132812h-67.835937zm75.335937-15h-9.066406v-164.128906h9.066406c4.140625 0 7.5-3.359376 7.5-7.5v-25.632813h59.550782v25.632813c0 4.140624 3.355468 7.5 7.5 7.5h9.0625v164.128906h-9.0625c-4.144532 0-7.5 3.355468-7.5 7.5v25.632812h-59.550782v-25.632812c0-4.144532-3.359375-7.5-7.5-7.5zm-108.46875 48.132812h448.867188v18.132813h-448.867188zm465.433594 51.265625h-482v-18.132812h482zm0 0" fill="#61481c" data-original="#000000" class=""></path>
                                        </g>
                                    </svg>
                                    <div class="mt-0" style="font-size: 12px">Advokasi <br> Pemerintah</div>
                                </a>
                            </div>
                            <div class="col mb-4">
                                <a class="btn btn-outline-light text-dark w-100 rounded-4 shadow" href="https://mitra.atrbpn.go.id">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Logo_BPN-KemenATR_%282017%29.png" class="p-2" width="85px" alt="">
                                    <div class="mt-0" style="font-size: 12px">Mitra <br> BPN</div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card border-0">
                    <div class="input-group">
                        <div class="input-group-prepend my-auto">
                            <span class="px-3">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control border-0" placeholder="Search" name="" id="">
                        <button class="btn h-100 mb-0 desktop" style="color: #fff; background: #E6B325">Search</button>
                    </div>
                </div>

                <div class="card mt-3 border-0 shadow-sm desktop" style="margin-top:-10px">
                    <div class="card-body pb-1 pt-2">
                        <div class="row align-items-center g-0">

                            <div class="col-3 text-center">
                                <button class="btn btn-sm" id="btn-panduan" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="70px" x="0" y="0" viewBox="0 0 296.999 296.999" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="148.4995" cx="148.4995" cy="148.4995" fill="#ffffff" shape="circle">
                                        </circle>
                                        <g transform="matrix(0.7,0,0,0.7,44.54984436035157,44.54998970031738)">
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <g>
                                                        <path d="M45.432,35.049c-0.008,0-0.017,0-0.025,0c-2.809,0-5.451,1.095-7.446,3.085c-2.017,2.012-3.128,4.691-3.128,7.543     v159.365c0,5.844,4.773,10.61,10.641,10.625c24.738,0.059,66.184,5.215,94.776,35.136V84.023c0-1.981-0.506-3.842-1.461-5.382     C115.322,40.849,70.226,35.107,45.432,35.049z" fill="#61481c" data-original="#000000" class=""></path>
                                                        <path d="M262.167,205.042V45.676c0-2.852-1.111-5.531-3.128-7.543c-1.995-1.99-4.639-3.085-7.445-3.085c-0.009,0-0.018,0-0.026,0     c-24.793,0.059-69.889,5.801-93.357,43.593c-0.955,1.54-1.46,3.401-1.46,5.382v166.779     c28.592-29.921,70.038-35.077,94.776-35.136C257.394,215.651,262.167,210.885,262.167,205.042z" fill="#61481c" data-original="#000000" class=""></path>
                                                        <path d="M286.373,71.801h-7.706v133.241c0,14.921-12.157,27.088-27.101,27.125c-20.983,0.05-55.581,4.153-80.084,27.344     c42.378-10.376,87.052-3.631,112.512,2.171c3.179,0.724,6.464-0.024,9.011-2.054c2.538-2.025,3.994-5.052,3.994-8.301V82.427     C297,76.568,292.232,71.801,286.373,71.801z" fill="#61481c" data-original="#000000" class=""></path>
                                                        <path d="M18.332,205.042V71.801h-7.706C4.768,71.801,0,76.568,0,82.427v168.897c0,3.25,1.456,6.276,3.994,8.301     c2.545,2.029,5.827,2.78,9.011,2.054c25.46-5.803,70.135-12.547,112.511-2.171c-24.502-23.19-59.1-27.292-80.083-27.342     C30.49,232.13,18.332,219.963,18.332,205.042z" fill="#61481c" data-original="#000000" class=""></path>
                                                    </g>
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
                                    <h6 class="mt-2 mb-0" style="font-weight:bold;">PANDUAN</h6>
                                </button>
                                <script>
                                    $("#btn-panduan").click(function() {
                                        $("#panduan").toggleClass('show');
                                        $("#jaminan").removeClass('show');
                                        $("#chat").removeClass('show');
                                        $("#tentang").removeClass('show');
                                    });
                                </script>
                            </div>
                            <div class="col-3 text-center">
                                <button class="btn btn-sm" id="btn-jaminan" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="70px" x="0" y="0" viewBox="0 0 32 32" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="16" cx="16" cy="16" fill="#ffffff" shape="circle"></circle>
                                        <g transform="matrix(0.7,0,0,0.7,4.799999713897705,4.800377225875856)">
                                            <g xmlns="http://www.w3.org/2000/svg" id="_26-Guranteed" data-name="26-Guranteed">
                                                <path d="m27 6c-5.56 0-10.33-3.74-10.38-3.78a1 1 0 0 0 -1.24 0c-.05.04-4.8 3.78-10.38 3.78a1 1 0 0 0 -1 1v9c0 6.71 2.71 10 11.59 13.91a1 1 0 0 0 .82 0c8.88-3.91 11.59-7.2 11.59-13.91v-9a1 1 0 0 0 -1-1zm-11 18a8 8 0 1 1 8-8 8 8 0 0 1 -8 8z" fill="#61481c" data-original="#000000" class=""></path>
                                                <path d="m18.29 13.29-3.29 3.3-1.29-1.3a1 1 0 0 0 -1.42 1.42l2 2a1 1 0 0 0 1.42 0l4-4a1 1 0 0 0 -1.42-1.42z" fill="#61481c" data-original="#000000" class=""></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <h6 class="mt-2 mb-0" style="font-weight:bold;">JAMINAN</h6>
                                </button>
                                <script>
                                    $("#btn-jaminan").click(function() {
                                        $("#panduan").removeClass('show');
                                        $("#jaminan").toggleClass('show');
                                        $("#chat").removeClass('show');
                                        $("#tentang").removeClass('show');
                                    });
                                </script>
                            </div>
                            <div class="col-3 text-center">
                                <button class="btn btn-sm" id="btn-chat" type="button">
                                    <img src="{{asset('')}}images/cus.svg" style="width:55px;margin-top:9px" alt="" srcset="">
                                    <h6 class=" mb-0" style="font-weight:bold;margin-top:13px">CHAT</h6>
                                </button>
                                <script>
                                    $("#btn-chat").click(function() {
                                        $("#panduan").removeClass('show');
                                        $("#jaminan").removeClass('show');
                                        $("#chat").toggleClass('show');
                                        $("#tentang").removeClass('show');
                                    });
                                </script>
                            </div>
                            <div class="col-3 text-center">
                                <button class="btn btn-sm" id="btn-tentang" type="button" style="margin-left:-10px">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="70px" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="12" cx="12" cy="12" fill="#ffffff" shape="circle"></circle>
                                        <g transform="matrix(0.7,0,0,0.7,3.600000000000003,3.600000000000003)">
                                            <g xmlns="http://www.w3.org/2000/svg" fill="rgb(0,0,0)">
                                                <path d="m12 0a12 12 0 1 0 12 12 12.013 12.013 0 0 0 -12-12zm0 22a10 10 0 1 1 10-10 10.011 10.011 0 0 1 -10 10z" fill="#61481c" data-original="#000000" class=""></path>
                                                <path d="m12 9a1 1 0 0 0 -1 1v8a1 1 0 0 0 2 0v-8a1 1 0 0 0 -1-1z" fill="#61481c" data-original="#000000" class=""></path>
                                                <circle cx="12" cy="6" r="1" fill="#61481c" data-original="#000000" class=""></circle>
                                            </g>
                                        </g>
                                    </svg>
                                    <h6 class="mt-2 mb-0" style="font-weight:bold;">TENTANG</h6>
                                </button>
                                <script>
                                    $("#btn-tentang").click(function() {
                                        $("#panduan").removeClass('show');
                                        $("#jaminan").removeClass('show');
                                        $("#chat").removeClass('show');
                                        $("#tentang").toggleClass('show');
                                    });
                                </script>
                            </div>
                            <ol id="panduan" class="list-group panduan list-group-numbered shadow dropdown-menu rounded-0 p-0" style="inset: auto auto 0px 0px; margin: 0px; border-top: none">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="color: #61481C">Buat Akun Sengketa Tanah</div>
                                        Daftarkan diri Anda sesuai dengan role yang diinginkan (Korban, Sponsor,
                                        Pengacara).
                                    </div>
                                    <i class="fa-solid fa-user-plus fs-6" style="color: #61481C"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="color: #61481C">Buat Laporan Sengketa Tanah
                                        </div>
                                        Laporkan dengan jelas melalui formulir korban tentang masalah sengketa tanah
                                        Anda.
                                    </div>
                                    <i class="fa-solid fa-file-circle-plus fs-6" style="color: #61481C"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="color: #61481C">Tampilkan Dokumen</div>
                                        Upload dan kirimkan dokumen pendukung laporan Anda.
                                    </div>
                                    <i class="fa-solid fa-file-lines fs-6" style="color: #61481C"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="color: #61481C">Temukan Bantuan</div>
                                        Pilih bantuan yang diinginkan mulai dari bantuan pendanaan sponsor, bantuan
                                        hukum pengacara, dan
                                        bantuan pemerintah.
                                    </div>
                                    <i class="fa fa-circle-question fs-6" style="color: #61481C"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="color: #61481C">Pilih Bantuan</div>
                                        Pilih bantuan yang masuk sesuai dengan kesepakatanmu.
                                    </div>
                                    <i class="fa-regular fa-circle-question fs-6" style="color: #61481C"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="color: #61481C">Dapatkan Bantuan</div>
                                        Yay! Selamat, kamu telah mendapatkan bantuan.
                                    </div>
                                    <i class="fa-solid fa-handshake-angle fs-6" style="color: #61481C"></i>
                                </li>
                            </ol>
                            <ol id="jaminan" class="list-group list-group-numbered shadow dropdown-menu rounded-0 p-3" style="inset: auto auto 0px 0px; margin: 0px; border-top: none">
                                <div class="col-md-12">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <h5 style="color: #61481C" class="mb-0"><b><i class="fa-solid fa-user-tie"></i></b></h5>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 style="color: #61481C" class="mb-0"><b>Sponsor Terverifikasi</b>
                                            </h5>
                                            Setiap sponsor yang terlibat di verifikasi kemampuan dan sumber dananya.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <h5 style="color: #61481C" class="mb-0"><b><i class="fa-solid fa-gavel"></i></b></h5>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 ms-3">
                                                <h5 style="color: #61481C" class="mb-0"><b>Pengacara
                                                        Terverifikasi</b></h5>
                                                Setiap pengacara wajib memiliki sertifikasi advokat yang dibutuhkan.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <h5 style="color: #61481C" class="mb-0"><b><i class="fa-solid fa-hand-holding-dollar"></i></b>
                                            </h5>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 ms-3">
                                                <h5 style="color: #61481C" class="mb-0"><b>Pembayaran Aman</b></h5>
                                                Setiap transaksi yang terjadi menggunakan platform pembayaran
                                                Sengketa Tanah.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <h5 style="color: #61481C" class="mb-0"><b><i class="fa-solid fa-chart-line"></i></b></h5>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 ms-3">
                                                <h5 style="color: #61481C" class="mb-0"><b>Bantuan Analisa</b></h5>
                                                Kami memberikan bantuan analisa terhadap permasalahan yang relevan
                                                untuk diatasi.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <h5 style="color: #61481C" class="mb-0"><b><i class="fa-solid fa-handshake"></i></b></h5>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 ms-3">
                                                <h5 style="color: #61481C" class="mb-0"><b>Kesepakatan
                                                        Terlindungi</b></h5>
                                                Semua kesepakatan yang terjadi dilindungi perjanjian hukum yang
                                                ketat dan mengikat.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <h5 style="color: #61481C" class="mb-0"><b><i class="fa-solid fa-user-gear"></i></b></h5>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 ms-3">
                                                <h5 style="color: #61481C" class="mb-0"><b>Bantuan Customer
                                                        Support</b></h5>
                                                Layanan CS 24 jam siap membantu anda.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </ol>
                            <ol id="chat" class="list-group list-group-numbered shadow dropdown-menu rounded-0 p-3 text-center" style="inset: auto auto 0px 0px; margin: 0px; border-top: none">
                                <h2>
                                    <div class="fw-bold" style="color: #61481C"> Customer Service</div>
                                </h2>
                                <div class="chat-form"> <input type="text" class="form-control" placeholder="Nama">
                                    <input type="text" class="form-control" placeholder="Email"> <textarea class="form-control" placeholder="Masukan Pesan"></textarea> <button class="btn btn-success btn-block">Kirim</button>
                                </div>
                            </ol>
                            <ol id="tentang" class="list-group list-group-numbered shadow dropdown-menu rounded-0 p-3 text-center" style="inset: auto auto 0px 0px; margin: 0px; border-top: none">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="row desktop mb-4">
                                            <div class="col-md">
                                                <div class="card-body text-center container" style="height:500px">
                                                    <img src="{{asset('/uploads/sengketa-tanah-jokowi.png')}}" style="width:300px; height:400px;object-fit:cover" alt="" srcset="" class="img-fluid">
                                                    <div class="card rounded-0" style="width: 17rem; position:relative; left:50%;transform: translate(-50%, -50%);">
                                                        <div class="card-body">
                                                            <p class="card-text">"Presiden Joko Widodo menegaskan kepada
                                                                Kementerian
                                                                ATR/BPN untuk
                                                                serius dalam memberantas mafia tanah"
                                                                <br> -<b> Ir. H. Joko Widodo (Presiden RI)</b>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="card-title fw-bolder text-dark"></p>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="card-body text-center container" style="height:500px">
                                                    <img src="{{asset('/uploads/atr-hadi-tjahjanto.png')}}" style="width:300px; height:400px;object-fit:cover" alt="" srcset="" class="img-fluid">
                                                    <div class="card rounded-0" style="width: 17rem; position:relative; left:50%;transform: translate(-50%, -50%);">
                                                        <div class="card-body">
                                                            <p class="card-text">"Sesuai perintah Bapak Presiden, semua
                                                                kasus mafia
                                                                tanah yang ada
                                                                di
                                                                Indonesia harus
                                                                diselesaikan" <br> -<b> Hadi Tjahjanto (Mentri ATR/BPN)
                                                                </b>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="card-title fw-bolder text-dark"></p>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="card-body text-center container" style="height:500px">
                                                    <img src="{{asset('/uploads/kapolri.png')}}" style="width:300px; height:400px;object-fit:cover" alt="" srcset="" class="img-fluid">
                                                    <div class="card rounded-0" style="width: 17rem; position:relative; left:50%;transform: translate(-50%, -50%);">
                                                        <div class="card-body">
                                                            <p class="card-text">"Penyidik tidak perlu ragu ragu dalam
                                                                mengusut
                                                                tuntas masalah mafia
                                                                tanah, penyidik agar tindak tegas siapapun dalang dan
                                                                bekingannya"
                                                                <br> -<b> Listyo
                                                                    Sigit Prabowo (Kapolri) </b>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="card-title fw-bolder text-dark"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="carouselExampleControlsPres" class="carousel slide mobile  mb-4">
                                            <div class="carousel-inner  mb-5">
                                                <div class="carousel-item active">
                                                    <div class="card-body text-center container" style="height:505px">
                                                        <img src="{{asset('/uploads/sengketa-tanah-jokowi.png')}}" style="width:300px; height:400px;object-fit:cover" alt="" srcset="" class="img-fluid">
                                                        <div class="card rounded-0" style="width: 14rem; position:relative; left:50%;transform: translate(-50%, -50%);z-index:10">
                                                            <div class="card-body">
                                                                <p class="card-text">"Presiden Joko Widodo menegaskan
                                                                    kepada Kementerian ATR/BPN untuk serius dalam
                                                                    memberantas mafia tanah" <br> -<b>
                                                                        Ir. H. Joko Widodo (Presiden RI)</b>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="card-title fw-bolder text-dark"></p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="card-body text-center container" style="height:505px">
                                                        <img src="{{asset('/uploads/atr-hadi-tjahjanto.png')}}" style="width:300px; height:400px;object-fit:cover" alt="" srcset="" class="img-fluid">
                                                        <div class="card rounded-0" style="width: 14rem; position:relative; left:50%;transform: translate(-50%, -50%);">
                                                            <div class="card-body">
                                                                <p class="card-text">"Sesuai perintah Bapak Presiden,
                                                                    semua kasus
                                                                    mafia tanah yang
                                                                    ada
                                                                    di Indonesia harus
                                                                    diselesaikan"<br> -<b> Hadi Tjahjanto (Mentri
                                                                        ATR/BPN) </b>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="card-title fw-bolder text-dark"></p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="card-body text-center container" style="height:505px">
                                                        <img src="{{asset('/uploads/kapolri.png')}}" style="width:300px; height:400px;object-fit:cover" alt="" srcset="" class="img-fluid">
                                                        <div class="card rounded-0" style="width: 14rem; position:relative; left:50%;transform: translate(-50%, -50%);">
                                                            <div class="card-body">
                                                                <p class="card-text">"Penyidik tidak perlu ragu ragu
                                                                    dalam mengusut
                                                                    tuntas masalah
                                                                    mafia
                                                                    tanah, penyidik agar tindak tegas siapapun dalang
                                                                    dan
                                                                    bekingannya" <br> -<b>
                                                                        Listyo
                                                                        Sigit Prabowo (Kapolri) </b>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="card-title fw-bolder text-dark"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <style>
                                    @media (min-width: 1400px) {
                                        .container-lsa {
                                            max-width: 1000px !important;
                                        }
                                    }
                                </style>
                                <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png" class="mb-2" style="width: 75px" alt="">
                                <div class="container-lsa mx-auto mb-3">
                                    <h2>
                                        <div class="fw-bold" style="color: #61481C"> TENTANG KAMI</div>
                                    </h2>
                                    SENGKETA TANAH adalah platform digital dengan spesialisasi penanganan
                                    masalah
                                    sengketa tanah di seluruh wilayah Indonesia. Kami mempertemukan korban sengketa
                                    tanah
                                    atau korban
                                    mafia
                                    tanah dengan Sponsor, Kantor hukum, dan Pemerintah untuk menuntaskan masalah
                                    persengketaan tanah
                                    tersebut.
                                    <h2>
                                        <div class="fw-bold mt-5" style="color: #61481C"> VISI MISI</div>
                                    </h2>
                                    <div class="text-start">
                                        <h5>VISI</h5>
                                        Membantu Masyarakat dan Pemerintah Indonesia dalam penyelesaian Sengketa
                                        Pertanahan, Konflik Pertanahan dan Perkara Pertanahan dengan membangun ekosistem
                                        steakholder terkait, seperti Korban Sengketa, Sponsor, Pengacara dan
                                        Pemerintahnya itu sendiri agar semua jenis permasalahan tanah lebih cepat
                                        diselesaikan. Tujuan utama Platform Sengketa Tanah adalah membawa persoalan
                                        tanah yang dulunya tabu menjadi lebih terbuka dengan pendekatan ecommerce yang
                                        profit oriented.
                                        <h5 class="mt-3">MISI</h5>
                                        <ol style="padding-left: 1rem">
                                            <li>Membantu masyarakat Indonesia menyelesaikan persolan sengketa
                                                pertanahan, konflik pertanahan dan perkara pertanahan dengan menyediakan
                                                bantuan akses pada sponsor, pengacara dan pemerintah.</li>
                                            <li>Membantu Pemerintah Indonesia dalam hal ini Kementrian ATR/BPN untuk
                                                menyelesaikan persolan sengketa pertanahan, konflik pertanahan dan
                                                perkara pertanahan dengan menyediakan sortasi data persengketaan tanah
                                                yang terjadi di masyarakat.</li>
                                            <li>Mengangkat semua jenis persoalan tanah dengan multi komprehensif, mulai
                                                dari dokumen pertanahan, analisa, pengecekan sampai kepada wawancara
                                                mendalam pada korban dan pihak terkait yang disajikan dengan audio
                                                visual untuk memudahkan steak holder mengambil keputusan.
                                            <li>Menjadi platform khusus pertanahan yang dipercaya publik dengan komitmen
                                                kuat penyelesaian kasus-kasus persengketaan tanah.</li>
                                            <li>Mengintegrasikan semua jenis bidang seputar pertanahan dalam satu
                                                platform seperti sengketa pertanahan, jual beli lahan, kerja sama lahan
                                                sampai dengan pelelangan lahan.</li>
                                            <li>Menyediakan berbagai tenaga ahli pertanahan dalam platform untuk
                                                membantu desiminasi permasalahan dalam rangka menentukan tindakan yang
                                                akan diambil, baik untuk korban, sponsor, pengacara maupun pemerintah.
                                            </li>
                                            <li>Menjadi platform yang terintegrasi dengan kementrian ATR/BPN</li>
                                        </ol>
                                    </div>
                                </div>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="card mb-3 mt-3 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-1 arrow-desktop text-center">
                                <button id="left-orang1" class="btn rounded-5 text-white bg-secondary mt-4" style="background-color: #61481C">
                                    <i class="fa-solid fa-arrow-left"></i>
                                </button>
                            </div>
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col mobile-scroll" id='orang-kotak' style="white-space:nowrap;flex-wrap:nowarp;display:flex">

                                        <?php
                                        $name = [
                                            "Budi K.",
                                            "Rudi H.",

                                            "Ustman A.",
                                            "Joko L.",

                                            "James Tate",
                                            "Robert K.",
                                            "Hadi Ismail", 'Abdullah', 'Nugraha D.', 'Ade Syarief', "Adhi Utomo", 'Leman wan', 'Noto Adi', 'Agus Susan'
                                        ];
                                        ?>
                                        <div class="container-gambar text-center ms-1" style='display: inline-block;flex: 0 0 auto'>
                                            <img src="data:image/png;base64,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" alt="" srcset="" class="rounded-circle img-thumbnail" style="width:70px;height:70px;object-fit:cover;background:#61481C"> <br>

                                            Tukang Ukur

                                        </div>
                                        @for($i=13;$i> 0;$i--)
                                        <div class="container-gambar text-center ms-1" style='display: inline-block;flex: 0 0 auto'>
                                            <img src="https://randomuser.me/api/portraits/men/{{$i}}.jpg" alt="" srcset="" class="rounded-circle img-thumbnail " style="width:70px;height:70px;object-fit:cover;"> <br>
                                            {{$name[$i]}}
                                        </div>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                            <div class="col-1 arrow-desktop text-center">
                                <button id="right-orang1" class="btn rounded-5 text-white bg-secondary mt-4" style="background-color: #61481C">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    $('#right-orang1').click(function() {
                        event.preventDefault();
                        $('#orang-kotak').animate({
                            scrollLeft: "+=300px"
                        }, "slow");
                    });

                    $('#left-orang1').click(function() {
                        event.preventDefault();
                        $('#orang-kotak').animate({
                            scrollLeft: "-=300px"
                        }, "slow");
                    });
                </script>
                <div class="card mt-0">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <form action="">
                                <div class="row mb-2" id="titleSponsor">
                                    <div class="col">
                                        <div class="row fw-bold pe-2 ps-2">
                                            <table style="width:100%">
                                                <tbody>
                                                    <tr>
                                                        <td rowspan="2" style="width: 40px">
                                                            <img src="http://sengketatanah.id/uploads/sengketa-logo_pas.png" style="width:30px">
                                                        </td>
                                                        <td>
                                                            <h3 color="text-primary" style="margin-bottom: 0px !important">
                                                                Kerja Sama Lahan
                                                            </h3>
                                                        </td>
                                                        <td class="text-end" rowspan="2">
                                                            <h5 class="text-primary fw-bold" style="text-decoration: none">
                                                                1.430
                                                            </h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <hr>

                            <div class="col-lg-12 mt-2 show" id="dataSponsor">
                                <div class="row">
                                    <?php $counter = 1 ?>
                                    @foreach($data_jual_beli as $bs)
                                    @if($bs['id'] > 3)
                                    @continue
                                    @endif
                                    <div class="col-md-4 mb-3 {{$bs['kode_objek']}}">
                                        <div class="card mb-2">

                                            <div class="card-header text-white px-3 py-1" style="
                                            background: #8f8f8f">
                                                <div class="row">

                                                    <div class="col-lg-12">
                                                        <!-- <h5 class="mb-0 text-center">Kode Bid {{$bs['kode']}} <img
                                                                src="{{url('/')}}/uploads/biru_centang.png" alt=""
                                                                class="mb-1" style="height:20px"></h4> -->
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
                                            <!--            <span class="badge bg-dark float-end" onclick="return document.querySelector('form.form-sengketa<?= $bs['id'] ?>').submit()">Lihat Podcast Sengketa</span>-->
                                            <!--            <span class="float-end">&nbsp;</span>-->

                                            <!--        </div>-->
                                            <!--    </div>-->
                                            <!--</div>-->




                                            <div class="card-body">


                                                @if($bs['id'] < 5) <div class="ribbon-pop"><i class="fa-solid fa-star"></i>&nbsp;HOT </div>
                                            @else
                                            @endif

                                            <div class="desktop-2">
                                                <div id="carouselExampleControls{{$bs['id']}}" class="carousel slide" data-bs-interval="false">
                                                    <div class="carousel-indicators">
                                                        <button type="button" data-bs-target="#carouselExampleControls{{$bs['id']}}" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                        <button type="button" data-bs-target="#carouselExampleControls{{$bs['id']}}" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                        <button type="button" data-bs-target="#carouselExampleControls{{$bs['id']}}" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                        <button type="button" data-bs-target="#carouselExampleControls{{$bs['id']}}" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                                    </div>

                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="{{asset('')}}{{$bs['img']}}" class="d-block w-100" style="height:250px;width:auto;object-fit:cover">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="{{asset('')}}{{$bs['img1']}}" class="d-block w-100" style="height:250px;width:auto;object-fit:cover">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="{{asset('')}}{{$bs['img2']}}" class="d-block w-100" style="height:250px;width:auto;object-fit:cover">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="{{asset('')}}{{$bs['img3']}}" class="d-block w-100" style="height:250px;width:auto;object-fit:cover">
                                                        </div>
                                                    </div>
                                                    <button class="carousel-control-prev opacity-90 text-dark" type="button" data-bs-target="#carouselExampleControls{{$bs['id']}}" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next opacity-90 text-dark" type="button" data-bs-target="#carouselExampleControls{{$bs['id']}}" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="mobile">
                                                <div id="carouselmobile{{$bs['id']}}" class="carousel slide" data-bs-interval="false">
                                                    <div class="carousel-indicators">
                                                        <button type="button" data-bs-target="#carouselmobile{{$bs['id']}}" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                        <button type="button" data-bs-target="#carouselmobile{{$bs['id']}}" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                        <button type="button" data-bs-target="#carouselmobile{{$bs['id']}}" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                        <button type="button" data-bs-target="#carouselmobile{{$bs['id']}}" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                                    </div>

                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="{{asset('')}}{{$bs['img']}}" class="d-block w-100" style="height:210px;width:auto;object-fit:cover">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="{{asset('')}}{{$bs['img1']}}" class="d-block w-100" style="height:210px;width:auto;object-fit:cover">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="{{asset('')}}{{$bs['img2']}}" class="d-block w-100" style="height:210px;width:auto;object-fit:cover">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="{{asset('')}}{{$bs['img3']}}" class="d-block w-100" style="height:210px;width:auto;object-fit:cover">
                                                        </div>
                                                    </div>
                                                    <button class="carousel-control-prev opacity-90 text-dark" type="button" data-bs-target="#carouselmobile{{$bs['id']}}" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next opacity-90 text-dark" type="button" data-bs-target="#carouselmobile{{$bs['id']}}" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="share-icon">
                                                <button class="btn btn-sm text-white rounded-5" style="background: rgba(0, 0, 0, 0.5)">
                                                    <i class="fa-solid fa-share-from-square"></i>
                                                </button>
                                            </div>
                                            <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h5 class="mb-0 text-center">Kode Bidang KSL-00{{$bs['id']}} <img src="{{asset('')}}uploads/biru_centang.png" alt="" class="mb-1" style="height:20px"></h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="mb-2 mt-2" style="width:100%">
                                                <tr>
                                                    <td class="text-start">
                                                        <h5>
                                                            <b class="text-danger fs-4">
                                                                Kerja Sama
                                                            </b>
                                                        </h5>
                                                    </td>
                                                    <td class="align-items-center">


                                                        <div class="row d-flex  align-items-center mb-2">
                                                            <div class="col text-end">
                                                                <a id="fav-{{$bs['id']}}">
                                                                    <h5 class="mb-0 text-fav-disable" id="fav-ch-{{$bs['id']}}">
                                                                        <i class="fas fa-star"></i>
                                                                    </h5>
                                                                </a>
                                                            </div>
                                                            <div class="col">
                                                                <button class="btn float-end btn-danger mb-0" data-bs-toggle="modal" data-bs-target="#exampleSponsor">
                                                                    &nbsp;&nbsp;&nbsp;Bid&nbsp;&nbsp;&nbsp;</button>
                                                            </div>
                                                        </div>
                                                        <script>
                                                            $("#fav-<?= $bs['id'] ?>").click(function() {
                                                                $("#fav-ch-<?= $bs['id'] ?>").toggleClass('fav-icon');
                                                            });
                                                        </script>

                                                    </td>
                                                </tr>
                                            </table>

                                            <hr>

                                            <table class="mt-3">

                                                <tr>
                                                    <td>Luas</td>
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
                                                    <td>Jenis Lahan</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;{{$bs['jenis_lahan']}}</td>
                                                </tr>

                                                <tr>
                                                    <td>Dokumen</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;SHM</td>
                                                </tr>
                                                <tr>
                                                    <td>Peruntukan</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;Permukiman</td>
                                                </tr>
                                                <tr>
                                                    <td>Akses</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;Mobil</td>
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
                                                <div class="col text-start">

                                                    <a href="#" class="  mx-auto rounded-5" data-bs-toggle="modal" data-bs-target="#berkasA" style="text-decoration:none">
                                                        <i class="fa-solid fa-eye"></i> Lihat Detail
                                                    </a>


                                                    <div class="modal fade my-auto text-center" id="berkasA" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header p-0">
                                                                    <h1 class="modal-title mx-auto text-danger display-1">
                                                                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png" style="width: 100px" alt="">
                                                                    </h1>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda harus memiliki akun sebelum melihat
                                                                    detail.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary me-auto" data-bs-dismiss="modal">Close</button>
                                                                    <a type="button" class="btn btn-success" href="{{url('')}}/login">Login</a>
                                                                    <a type="button" class="btn btn-danger" href="{{url('')}}/register">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>


                                            <form action="{{url('/')}}/bid-sengketa/podcast" class="form-sengketa{{$bs['id']}}" method="get">
                                                <input type="hidden" name="owner" value="{{$bs['owner']}}">
                                                <input type="hidden" name="objek" value="{{$bs['objek']}}">
                                                <input type="hidden" name="luas" value="{{$bs['luas']}}">
                                                <input type="hidden" name="lokasi" value="{{$bs['lokasi']}}">
                                                <input type="hidden" name="komentar" value="">
                                                <input type="hidden" name="link_yt" value="{{$bs['link_yt']}}">
                                                <input type="hidden" name="form" value="sponsor">
                                            </form>


                                            <hr>
                                            <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                <div class="col-4">

                                                    <div class="d-grid gap-2 ">

                                                        <!-- <button type="button" class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleSponsor">
                                                            BID
                                                        </button> -->


                                                        <div class="modal fade my-auto" id="exampleSponsor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1 class="modal-title mx-auto text-danger display-1">
                                                                            <i class="fa-regular fa-circle-xmark"></i>
                                                                        </h1>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Anda harus masuk sebagai sponsor sebelum
                                                                        melakukan bid.
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary me-auto" data-bs-dismiss="modal">Close</button>
                                                                        <a type="button" class="btn btn-success" href="{{url('')}}/login">Login</a>
                                                                        <a type="button" class="btn btn-danger" href="{{url('')}}/register">Register</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php $counter++ ?>
                                @endforeach
                            </div>

                        </div>




                    </div>
                </div>








            </div>



            <div class="card mb-2 mt-2 border-0 shadow-sm">
                <div class="card-body">
                    <div class="row justify-content-center">

                        <div class="col-1 arrow-desktop text-center">
                            <button id="left-orang1" class="btn rounded-5 text-white bg-secondary" style="background-color: #61481C">
                                <i class="fa-solid fa-arrow-left"></i>
                            </button>
                        </div>
                        <div class="col-lg-10">
                            <div class="row">
                                <div class="col mobile-scroll" id='orang-kotak' style="white-space:nowrap;flex-wrap:nowarp;display:flex">

                                    <?php
                                    $name = [
                                        "Budi K.",
                                        "Rudi H.",

                                        "Ustman A.",
                                        "Joko L.",

                                        "James Tate",
                                        "Robert K.",
                                        "Hadi Ismail", 'Abdullah', 'Nugraha D.', 'Ade Syarief', "Adhi Utomo", 'Leman wan', 'Noto Adi', 'Agus Susan'
                                    ];
                                    ?>
                                    <div class="container-gambar text-center ms-1" style='display: inline-block;flex: 0 0 auto'>
                                        <img src="data:image/png;base64,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" alt="" srcset="" class="rounded-4 img-thumbnail" style="width:70px;height:70px;object-fit:cover;background:#61481C"> <br>

                                        Notaris

                                    </div>
                                    @for($i=13;$i> 0;$i--)
                                    <div class="container-gambar text-center ms-1" style='display: inline-block;flex: 0 0 auto'>
                                        <img src="https://randomuser.me/api/portraits/men/{{$i}}.jpg" alt="" srcset="" class="rounded-4 img-thumbnail " style="width:70px;height:70px;object-fit:cover;"> <br>
                                        {{$name[$i]}}
                                    </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                        <div class="col-1 arrow-desktop text-center">
                            <button id="right-orang1" class="btn rounded-5 text-white bg-secondary" style="background-color: #61481C">
                                <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>


                    </div>
                </div>
            </div>





            <div class="card mb-2 border-0 shadow-sm mt-2">
                <div class="card-body">
                    <div class="col-lg-12 mt-2 show" id="dataSponsor">
                        <div class="row">
                            <?php $counter = 1 ?>
                            @foreach($data_jual_beli as $bs)
                            @if($bs['id'] < 4 ) @continue @endif @if($bs['id']> 6 )
                                @continue
                                @endif
                                <div class="col-md-4 mb-3 {{$bs['kode_objek']}}">
                                    <div class="card mb-2">

                                        <div class="card-header text-white px-3 py-1" style="
                                                    background: #8f8f8f">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <!-- <h5 class="mb-0 text-center">Kode Bid {{$bs['kode']}} <img
                                                                        src="{{url('/')}}/uploads/biru_centang.png" alt=""
                                                                        class="mb-1" style="height:20px"></h4> -->
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
                                        <!--            <span class="badge bg-dark float-end" onclick="return document.querySelector('form.form-sengketa<?= $bs['id'] ?>').submit()">Lihat Podcast Sengketa</span>-->
                                        <!--            <span class="float-end">&nbsp;</span>-->

                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->




                                        <div class="card-body">


                                            @if($bs['id'] < 5) <div class="ribbon-pop"><i class="fa-solid fa-star"></i>&nbsp;HOT </div>
                                        @else
                                        @endif

                                        <div class="desktop-2">
                                            <div id="carouselExampleControls{{$bs['id']}}" class="carousel slide" data-bs-interval="false">
                                                <div class="carousel-indicators">
                                                    <button type="button" data-bs-target="#carouselExampleControls{{$bs['id']}}" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                    <button type="button" data-bs-target="#carouselExampleControls{{$bs['id']}}" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                    <button type="button" data-bs-target="#carouselExampleControls{{$bs['id']}}" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                    <button type="button" data-bs-target="#carouselExampleControls{{$bs['id']}}" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                                </div>

                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img src="{{asset('')}}{{$bs['img']}}" class="d-block w-100" style="height:250px;width:auto;object-fit:cover">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{asset('')}}{{$bs['img1']}}" class="d-block w-100" style="height:250px;width:auto;object-fit:cover">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{asset('')}}{{$bs['img2']}}" class="d-block w-100" style="height:250px;width:auto;object-fit:cover">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{asset('')}}{{$bs['img3']}}" class="d-block w-100" style="height:250px;width:auto;object-fit:cover">
                                                    </div>
                                                </div>
                                                <button class="carousel-control-prev opacity-90 text-dark" type="button" data-bs-target="#carouselExampleControls{{$bs['id']}}" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next opacity-90 text-dark" type="button" data-bs-target="#carouselExampleControls{{$bs['id']}}" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="mobile">
                                            <div id="carouselmobile{{$bs['id']}}" class="carousel slide" data-bs-interval="false">
                                                <div class="carousel-indicators">
                                                    <button type="button" data-bs-target="#carouselmobile{{$bs['id']}}" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                    <button type="button" data-bs-target="#carouselmobile{{$bs['id']}}" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                    <button type="button" data-bs-target="#carouselmobile{{$bs['id']}}" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                    <button type="button" data-bs-target="#carouselmobile{{$bs['id']}}" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                                </div>

                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img src="{{asset('')}}{{$bs['img']}}" class="d-block w-100" style="height:210px;width:auto;object-fit:cover">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{asset('')}}{{$bs['img1']}}" class="d-block w-100" style="height:210px;width:auto;object-fit:cover">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{asset('')}}{{$bs['img2']}}" class="d-block w-100" style="height:210px;width:auto;object-fit:cover">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{asset('')}}{{$bs['img3']}}" class="d-block w-100" style="height:210px;width:auto;object-fit:cover">
                                                    </div>
                                                </div>
                                                <button class="carousel-control-prev opacity-90 text-dark" type="button" data-bs-target="#carouselmobile{{$bs['id']}}" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next opacity-90 text-dark" type="button" data-bs-target="#carouselmobile{{$bs['id']}}" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="share-icon">
                                            <button class="btn btn-sm text-white rounded-5" style="background: rgba(0, 0, 0, 0.5)">
                                                <i class="fa-solid fa-share-from-square"></i>
                                            </button>
                                        </div>
                                        <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <h5 class="mb-0 text-center">Kode Bidang JBL-004 <img src="{{asset('')}}uploads/biru_centang.png" alt="" class="mb-1" style="height:20px"></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <table class="mb-2 mt-2" style="width:100%">
                                            <tr>
                                                <td class="text-start">
                                                    <h5>
                                                        <b class="text-danger fs-4">
                                                            Kerja Sama
                                                        </b>
                                                    </h5>
                                                </td>
                                                <td class="align-items-center">


                                                    <div class="row d-flex  align-items-center mb-2">
                                                        <div class="col text-end">
                                                            <a id="fav-{{$bs['id']}}">
                                                                <h5 class="mb-0 text-fav-disable" id="fav-ch-{{$bs['id']}}">
                                                                    <i class="fas fa-star"></i>
                                                                </h5>
                                                            </a>
                                                        </div>
                                                        <div class="col">
                                                            <button class="btn float-end btn-danger mb-0" data-bs-toggle="modal" data-bs-target="#exampleSponsor">
                                                                &nbsp;&nbsp;&nbsp;Bid&nbsp;&nbsp;&nbsp;</button>
                                                        </div>
                                                    </div>
                                                    <script>
                                                        $("#fav-<?= $bs['id'] ?>").click(function() {
                                                            $("#fav-ch-<?= $bs['id'] ?>").toggleClass('fav-icon');
                                                        });
                                                    </script>

                                                </td>
                                            </tr>
                                        </table>

                                        <hr>


                                        <table class="mt-3">

                                            <tr>
                                                <td>Luas</td>
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
                                                <td>Jenis Lahan</td>
                                                <td></td>
                                                <td>:</td>
                                                <td>&nbsp;{{$bs['jenis_lahan']}}</td>
                                            </tr>

                                            <tr>
                                                <td>Dokumen</td>
                                                <td></td>
                                                <td>:</td>
                                                <td>&nbsp;SHM</td>
                                            </tr>
                                            <tr>
                                                <td>Peruntukan</td>
                                                <td></td>
                                                <td>:</td>
                                                <td>&nbsp;Permukiman</td>
                                            </tr>
                                            <tr>
                                                <td>Akses</td>
                                                <td></td>
                                                <td>:</td>
                                                <td>&nbsp;Mobil</td>
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
                                            <div class="col text-start">

                                                <a href="#" class="  mx-auto rounded-5" data-bs-toggle="modal" data-bs-target="#berkasA" style="text-decoration:none">
                                                    <i class="fa-solid fa-eye"></i> Lihat Detail
                                                </a>


                                                <div class="modal fade my-auto text-center" id="berkasA" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header p-0">
                                                                <h1 class="modal-title mx-auto text-danger display-1">
                                                                    <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png" style="width: 100px" alt="">
                                                                </h1>
                                                            </div>
                                                            <div class="modal-body">
                                                                Anda harus memiliki akun sebelum melihat
                                                                detail.
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary me-auto" data-bs-dismiss="modal">Close</button>
                                                                <a type="button" class="btn btn-success" href="{{url('')}}/login">Login</a>
                                                                <a type="button" class="btn btn-danger" href="{{url('')}}/register">Register</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        <form action="{{url('/')}}/bid-sengketa/podcast" class="form-sengketa{{$bs['id']}}" method="get">
                                            <input type="hidden" name="owner" value="{{$bs['owner']}}">
                                            <input type="hidden" name="objek" value="{{$bs['objek']}}">
                                            <input type="hidden" name="luas" value="{{$bs['luas']}}">
                                            <input type="hidden" name="lokasi" value="{{$bs['lokasi']}}">
                                            <input type="hidden" name="komentar" value="">
                                            <input type="hidden" name="link_yt" value="{{$bs['link_yt']}}">
                                            <input type="hidden" name="form" value="sponsor">
                                        </form>


                                        <hr>
                                        <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                            <div class="col-4">

                                                <div class="d-grid gap-2 ">

                                                    <!-- <button type="button" class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleSponsor">
                                                        BID
                                                    </button> -->


                                                    <div class="modal fade my-auto" id="exampleSponsor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header p-0">
                                                                    <h1 class="modal-title mx-auto text-danger display-1">
                                                                        <i class="fa-regular fa-circle-xmark"></i>
                                                                    </h1>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda harus masuk sebagai sponsor sebelum
                                                                    melakukan bid.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary me-auto" data-bs-dismiss="modal">Close</button>
                                                                    <a type="button" class="btn btn-success" href="{{url('')}}/login">Login</a>
                                                                    <a type="button" class="btn btn-danger" href="{{url('')}}/register">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                        </div>
                        <?php $counter++ ?>
                        @endforeach
                    </div>
                </div>
            </div>








        </div>



        <div class="card mb-2 mt-2 border-0 shadow-sm">
            <div class="card-body">
                <div class="row justify-content-center">

                    <div class="col-1 arrow-desktop text-center">
                        <button id="left-orang2" class="btn rounded-5 text-white bg-secondary" style="background-color: #61481C">
                            <i class="fa-solid fa-arrow-left"></i>
                        </button>
                    </div>
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col mobile-scroll" id='orang-bulet2' style="white-space:nowrap;flex-wrap:nowarp;display:flex">

                                <?php
                                $name = [
                                    "Rudi H.",
                                    "Budi K.",
                                    "Joko Afdal",
                                    "Ustman A.",
                                    "Robert K.",
                                    "James Tate", "Hadi Ismail", 'Abdullah', 'Nugraha D.', 'Ade Syarief', "Adhi Utomo", 'Leman wan', 'Pranoto Adi', 'Agus Susan'
                                ];
                                ?>
                                <div class="container-gambar text-center ms-1" style='display: inline-block;flex: 0 0 auto'>
                                    <img src="data:image/png;base64,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" alt="" srcset="" class="rounded-circle img-thumbnail " style="width:70px;height:70px;object-fit:cover;background:#61481C"> <br>

                                    PPAT

                                </div>
                                @for($i=0;$i< 14;$i++) <div class="container-gambar text-center ms-1" style='display: inline-block;flex: 0 0 auto'>
                                    <img src="https://randomuser.me/api/portraits/men/{{$i}}.jpg" alt="" srcset="" class="rounded-circle img-thumbnail " style="width:70px;height:70px;object-fit:cover;"> <br>
                                    {{$name[$i]}}
                            </div>
                            @endfor
                        </div>
                    </div>
                </div>
                <div class="col-1 arrow-desktop text-center">
                    <button id="right-orang2" class="btn rounded-5 text-white bg-secondary" style="background-color: #61481C">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>

                <script>
                    $('#right-orang2').click(function() {
                        event.preventDefault();
                        $('#orang-bulet2').animate({
                            scrollLeft: "+=300px"
                        }, "slow");
                    });

                    $('#left-orang2').click(function() {
                        event.preventDefault();
                        $('#orang-bulet2').animate({
                            scrollLeft: "-=300px"
                        }, "slow");
                    });
                </script>
            </div>

        </div>
    </div>




    <div class="card mb-2 border-0 shadow-sm mt-2">
        <div class="card-body">
            <div class="col-lg-12 mt-2 show" id="dataSponsor">
                <div class="row">
                    <?php $counter = 1 ?>
                    @foreach($data_jual_beli as $bs)

                    @if($bs['id'] < 7 ) @continue @endif <div class="col-md-4 mb-3 {{$bs['kode_objek']}}">
                        <div class="card mb-2">

                            <div class="card-header text-white px-3 py-1" style="
                                                    background: #8f8f8f">
                                <div class="row">

                                    <div class="col-lg-12">
                                        <!-- <h5 class="mb-0 text-center">Kode Bid {{$bs['kode']}} <img
                                                                        src="{{url('/')}}/uploads/biru_centang.png" alt=""
                                                                        class="mb-1" style="height:20px"></h4> -->
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
                            <!--            <span class="badge bg-dark float-end" onclick="return document.querySelector('form.form-sengketa<?= $bs['id'] ?>').submit()">Lihat Podcast Sengketa</span>-->
                            <!--            <span class="float-end">&nbsp;</span>-->

                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->




                            <div class="card-body">


                                @if($bs['id'] < 5) <div class="ribbon-pop"><i class="fa-solid fa-star"></i>&nbsp;HOT
                            </div>
                            @else
                            @endif

                            <div class="desktop-2">
                                <div id="carouselExampleControls{{$bs['id']}}" class="carousel slide" data-bs-interval="false">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleControls{{$bs['id']}}" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleControls{{$bs['id']}}" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleControls{{$bs['id']}}" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        <button type="button" data-bs-target="#carouselExampleControls{{$bs['id']}}" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                    </div>

                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{asset('')}}{{$bs['img']}}" class="d-block w-100" style="height:250px;width:auto;object-fit:cover">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{asset('')}}{{$bs['img1']}}" class="d-block w-100" style="height:250px;width:auto;object-fit:cover">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{asset('')}}{{$bs['img2']}}" class="d-block w-100" style="height:250px;width:auto;object-fit:cover">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{asset('')}}{{$bs['img3']}}" class="d-block w-100" style="height:250px;width:auto;object-fit:cover">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev opacity-90 text-dark" type="button" data-bs-target="#carouselExampleControls{{$bs['id']}}" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next opacity-90 text-dark" type="button" data-bs-target="#carouselExampleControls{{$bs['id']}}" data-bs-slide="next">
                                        <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="mobile">
                                <div id="carouselmobile{{$bs['id']}}" class="carousel slide" data-bs-interval="false">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselmobile{{$bs['id']}}" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselmobile{{$bs['id']}}" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselmobile{{$bs['id']}}" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        <button type="button" data-bs-target="#carouselmobile{{$bs['id']}}" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                    </div>

                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{asset('')}}{{$bs['img']}}" class="d-block w-100" style="height:210px;width:auto;object-fit:cover">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{asset('')}}{{$bs['img1']}}" class="d-block w-100" style="height:210px;width:auto;object-fit:cover">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{asset('')}}{{$bs['img2']}}" class="d-block w-100" style="height:210px;width:auto;object-fit:cover">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{asset('')}}{{$bs['img3']}}" class="d-block w-100" style="height:210px;width:auto;object-fit:cover">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev opacity-90 text-dark" type="button" data-bs-target="#carouselmobile{{$bs['id']}}" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next opacity-90 text-dark" type="button" data-bs-target="#carouselmobile{{$bs['id']}}" data-bs-slide="next">
                                        <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="share-icon">
                                <button class="btn btn-sm text-white rounded-5" style="background: rgba(0, 0, 0, 0.5)">
                                    <i class="fa-solid fa-share-from-square"></i>
                                </button>
                            </div>

                            <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h5 class="mb-0 text-center">Kode Bidang JBL-004 <img src="{{asset('')}}uploads/biru_centang.png" alt="" class="mb-1" style="height:20px"></h5>
                                    </div>
                                </div>
                            </div>
                            <table class="mb-2 mt-2" style="width:100%">
                                <tr>
                                    <td class="text-start">
                                        <h5>
                                            <b class="text-danger fs-4">
                                                Kerja Sama
                                            </b>
                                        </h5>
                                    </td>
                                    <td class="align-items-center">


                                        <div class="row d-flex  align-items-center mb-2">
                                            <div class="col text-end">
                                                <a id="fav-{{$bs['id']}}">
                                                    <h5 class="mb-0 text-fav-disable" id="fav-ch-{{$bs['id']}}">
                                                        <i class="fas fa-star"></i>
                                                    </h5>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <button class="btn float-end btn-danger mb-0" data-bs-toggle="modal" data-bs-target="#exampleSponsor">
                                                    &nbsp;&nbsp;&nbsp;Bid&nbsp;&nbsp;&nbsp;</button>
                                            </div>
                                        </div>
                                        <script>
                                            $("#fav-<?= $bs['id'] ?>").click(function() {
                                                $("#fav-ch-<?= $bs['id'] ?>").toggleClass('fav-icon');
                                            });
                                        </script>

                                    </td>
                                </tr>
                            </table>

                            <hr>


                            <table class="mt-3">

                                <tr>
                                    <td>Luas</td>
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
                                    <td>Jenis Lahan</td>
                                    <td></td>
                                    <td>:</td>
                                    <td>&nbsp;{{$bs['jenis_lahan']}}</td>
                                </tr>

                                <tr>
                                    <td>Dokumen</td>
                                    <td></td>
                                    <td>:</td>
                                    <td>&nbsp;SHM</td>
                                </tr>
                                <tr>
                                    <td>Peruntukan</td>
                                    <td></td>
                                    <td>:</td>
                                    <td>&nbsp;Permukiman</td>
                                </tr>
                                <tr>
                                    <td>Akses</td>
                                    <td></td>
                                    <td>:</td>
                                    <td>&nbsp;Mobil</td>
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
                                <div class="col text-start">

                                    <a href="#" class="  mx-auto rounded-5" data-bs-toggle="modal" data-bs-target="#berkasA" style="text-decoration:none">
                                        <i class="fa-solid fa-eye"></i> Lihat Detail
                                    </a>


                                    <div class="modal fade my-auto text-center" id="berkasA" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header p-0">
                                                    <h1 class="modal-title mx-auto text-danger display-1">
                                                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png" style="width: 100px" alt="">
                                                    </h1>
                                                </div>
                                                <div class="modal-body">
                                                    Anda harus memiliki akun sebelum melihat
                                                    detail.
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary me-auto" data-bs-dismiss="modal">Close</button>
                                                    <a type="button" class="btn btn-success" href="{{url('')}}/login">Login</a>
                                                    <a type="button" class="btn btn-danger" href="{{url('')}}/register">Register</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>


                            <form action="{{url('/')}}/bid-sengketa/podcast" class="form-sengketa{{$bs['id']}}" method="get">
                                <input type="hidden" name="owner" value="{{$bs['owner']}}">
                                <input type="hidden" name="objek" value="{{$bs['objek']}}">
                                <input type="hidden" name="luas" value="{{$bs['luas']}}">
                                <input type="hidden" name="lokasi" value="{{$bs['lokasi']}}">
                                <input type="hidden" name="komentar" value="">
                                <input type="hidden" name="link_yt" value="{{$bs['link_yt']}}">
                                <input type="hidden" name="form" value="sponsor">
                            </form>


                            <hr>
                            <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                <div class="col-4">

                                    <div class="d-grid gap-2 ">

                                        <!-- <button type="button" class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleSponsor">
                                            BID
                                        </button> -->


                                        <div class="modal fade my-auto" id="exampleSponsor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header p-0">
                                                        <h1 class="modal-title mx-auto text-danger display-1">
                                                            <i class="fa-regular fa-circle-xmark"></i>
                                                        </h1>
                                                    </div>
                                                    <div class="modal-body">
                                                        Anda harus masuk sebagai sponsor sebelum
                                                        melakukan bid.
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary me-auto" data-bs-dismiss="modal">Close</button>
                                                        <a type="button" class="btn btn-success" href="{{url('')}}/login">Login</a>
                                                        <a type="button" class="btn btn-danger" href="{{url('')}}/register">Register</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                        </div>
                </div>
            </div>
            <?php $counter++ ?>
            @endforeach
        </div>
    </div>
    </div>
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

        <div class="modal fade" id="korbanSengketaModal" tabindex="-1" aria-labelledby="korbanSengketaModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-dark text-white">
                        <div class="row">
                            <div class="col-12 text-center text-uppercase">
                                <h5 class="modal-title" id="formSponsoranModalLabel">Korban Sengketa Tanah</h5>
                            </div>
                            <div class="col-12 text-center">
                                <h6 class="modal-title" style="font-size:12px">Korban adalah orang yang
                                    dirugikan,
                                    dirampas,
                                    atau kehilangan hak atas tanah yang dimilikinya*</h6>
                            </div>
                        </div>
                    </div>
                    <form method="post" class="text-start" action="{{url('sengketa/send')}}" enctype="multipart/form-data">
                        <div class="modal-body">
                            @csrf
                            @if ($errors->all())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>

                            @endif
                            @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                            @endif

                            <div class="mb-2">
                                <label for="nama" class="form-label">Nama Pelapor</label>
                                <input type="text" class="form-control rounded-0" id="nama" placeholder="Masukkan Nama Anda" aria-describedby="input-nama" name="nama" required>
                                <div id="input-nama" class="form-text"></div>
                            </div>

                            <div class="mb-2">
                                <label for="Alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control rounded-0" id="Alamat" placeholder="Masukkan Alamat Anda" aria-describedby="input-Alamat" name="alamat" required>
                                <div id="input-Alamat" class="form-text"></div>
                            </div>
                            <div class="mb-2">
                                <label for="no_hp" class="form-label">Nomor Hp</label>
                                <input type="number" class="form-control rounded-0" id="no_hp" placeholder="Masukkan Nomor HP Anda" aria-describedby="input-no_hp" name="no_hp" required>
                                <div id="input-no_hp" class="form-text"></div>
                            </div>
                            <div class="mb-2">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control rounded-0" id="email" placeholder="Masukkan Email Anda" aria-describedby="input-email" name="email" required>
                                <div id="input-email" class="form-text"></div>
                            </div>
                            <div class="mb-2">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control rounded-0" id="password" placeholder="buat password Anda" aria-describedby="input-password" name="password" required>
                                <div id="input-password" class="form-text"></div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-2">
                                        <label class="form-label">Objek Sengketa</label>
                                        <select class="form-select rounded-0" aria-label="Default select example" name="objek_sengketa" required>
                                            <option value="Sengketa Pertanahan">Sengketa Pertanahan</option>
                                            <option value="Konflik Pertanahan">Konflik Pertanahan</option>
                                            <option value="Perkara Pertanahan">Perkara Pertanahan</option>
                                            <option value="Penjualan Lahan">Penjualan Lahan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="mb-2">
                                        <label for="luas" class="form-label">Luas Tanah (meter/ha)</label>
                                        <input type="text" class="form-control rounded-0" id="luas" placeholder="Masukkan Luas Tanah" aria-describedby="input-luas" name="luas" required>
                                        <div id="input-luas" class="form-text"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-2">
                                <label for="lokasi" class="form-label">Lokasi</label>
                                <input type="text" class="form-control rounded-0" id="lokasi" placeholder="Masukkan Lokasi" aria-describedby="input-lokasi" name="lokasi" required>
                                <div id="input-lokasi" class="form-text"></div>
                            </div>
                            <div class="mb-2">
                                <label for="kronologi" class="form-label">Kronologi</label>
                                <textarea id="kronologi" class="form-control rounded-0" placeholder="Masukkan Kronologi" aria-describedby="input-kronologi" name="kronologi" cols="30" rows="10" required></textarea>
                                <div id="input-kronologi" class="form-text"></div>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Status Pelapor</label>
                                <select class="form-select rounded-0" aria-label="Default select example" name="status_pelapor" required>
                                    <option value="Pemilik">Pemilik</option>
                                    <option value="Kuasa Pemilik">Kuasa Pemilik</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Pilih Jenis Pertolongan</label>
                                <select class="form-select rounded-0" aria-label="Default select example" name="jenis_pertolongan" required>
                                    <option selected disabled>Pilih Pertolongan</option>
                                    <option value="sponsor">Sponsor</option>
                                    <option value="pengacara">Pengacara</option>
                                    <option value="pemerintah">Pemerintah</option>
                                </select>
                            </div>

                            <div id="pengembalian_dana" class="alert alert-danger sponsor" role="alert">
                                <strong>
                                    Saya membutuhkan bantuan pendanaan dari sponsor untuk menyelesaikan
                                    permasalahan
                                    sengketa tanah saya.
                                </strong>
                            </div>

                            <div class="mb-2 pengacara">
                                <label class="form-label">Pilih Tindakan Pengacara</label>
                                <select class="form-select rounded-0" aria-label="Default select example" name="bantuan_pengacara" required>
                                    <option selected disabled>Pilih Bantuan Pengacara</option>
                                    <option value="konsultasi">Konsultasi</option>
                                    <option value="pendampingan">Pendampingan</option>
                                    <option value="penindakan">Penindakan</option>
                                </select>
                            </div>

                            <div class="mb-2 pengacara">
                                <label for="anggaran_pengacara" class="form-label">Anggaran Pengacara</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="number" class="form-control rounded-0" id="anggaran_pengacara-s" placeholder="Anggaran mulai dari ..." aria-describedby="input-anggaran_pengacara-s" name="anggaran_pengacara-s">
                                    </div>
                                    <div class="col-1 text-center" style="width:4% !important; padding-right: 0px !important; padding-left: 0px !important">
                                        -
                                    </div>
                                    <div class="col">
                                        <input type="number" class="form-control rounded-0" id="anggaran_pengacara-e" placeholder="Sampai ..." aria-describedby="input-anggaran_pengacara-e" name="anggaran_pengacara-e">
                                    </div>
                                </div>
                            </div>

                            <div id="pengembalian_dana" class="alert alert-danger pemerintah" role="alert">
                                <strong>
                                    Saya hanya membutuhkan pertolongan agar permasalahan sengketa tanah saya
                                    diteruskan
                                    pada
                                    Pemerintah.
                                </strong>
                            </div>

                            <div class="mb-2 sponsor">
                                <label for="keb_dana" class="form-label">Jumlah Dana Sponsor</label>
                                <input type="number" class="form-control rounded-0" id="keb_dana" placeholder="Sebutkan Nilai Pinjaman" aria-describedby="input-keb_dana" name="keb_dana" required>
                                <div id="input-keb_dana" class="form-text"></div>
                            </div>

                            <div class="mb-2 sponsor">
                                <label class="form-label">Pengembalian Dana Sponsor</label>
                                <select class="form-select rounded-0" aria-label="Default select example" name="pengembalian_dana_sponsor" required>
                                    <option selected disabled>Pilih Jenis Pengembalian</option>
                                    <option value="70/30">Bagi Hasil 70/30*</option>
                                    <option value="60/40">Bagi Hasil 60/40*</option>
                                    <option value="50/50">Bagi Hasil 50/50*</option>
                                    <option value="lain">Fee 50% Dari Pinjaman</option>
                                    <option value="lain">Fee 75% Dari Pinjaman</option>
                                    <option value="lain">Fee 100% Dari Pinjaman</option>
                                </select>
                                <small id="pengembalian_dana_sponsor" class="form-text text-muted">Bagi hasil di
                                    rekomendasikan untuk kasus-kasus sengketa tanah yang berat. Tanda bintang(*)
                                    adalah
                                    pembagian untuk sponsor. </small>
                            </div>

                            <div class="mb-2 sponsor">
                                <label class="form-label" for="jaminan_dana">Jaminan Dana Sponsor</label>
                                <select class="form-select rounded-0" aria-label="Default select example" name="jaminan" required>
                                    <option selected disabled>Pilih Jaminan</option>
                                    <option value="ada">Ada Jaminan</option>
                                    <option value="tidak">Tidak Ada Jaminan</option>
                                </select>
                            </div>

                            <div class="mb-2 jaminan_berupa">
                                <label for="jaminan_berupa" class="form-label">Jaminan Berupa</label>
                                <select class="form-select rounded-0" id="lokasi" placeholder="Masukkan Jaminan" aria-describedby="input-jaminan" name="jaminan_berupa" required>
                                    <option value="Sertifikat Tanah">Sertifikat Tanah</option>
                                    <option value="Sertifikat Rumah">Sertifikat Rumah</option>
                                </select>
                            </div>
                            {{-- <div class="mb-2">
                                <label for="ktp" class="form-label">Foto KTP</label>
                                <input class="form-control rounded-0" type="file" id="ktp" name="foto_ktp" required>
                            </div>
                            <div class="mb-2">
                                <label for="foto_lokasi" class="form-label">Foto Lokasi</label>
                                <input class="form-control rounded-0" type="file" id="foto_lokasi" name="foto_lokasi"
                                    required>
                            </div>
                            <div class="mb-2">
                                <label for="dokumenTanah" class="form-label">Foto Dokumen Hak Tanah</label>
                                <input class="form-control rounded-0" type="file" id="dokumenTanah" name="dokumen_tanah"
                                    required>
                            </div> --}}
                            <div class="mb-2 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" style="text-align:justify" for="exampleCheck1">Dengan
                                    mengisi form ini saya
                                    menyatakan bahwa semua data yang diberikan benar adanya dan laporan ini
                                    tidak
                                    sedang dalam penanganan hukum pihak lain. Saya bersedia melakukan wawancara
                                    mendalam
                                    di
                                    <b>PODCAST SENGKETA TANAH</b> dan bekerja sama dengan
                                    Sponsor melalui <b>PLATFORM SENGKETA TANAH</b> untuk diselesaikan.</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-dark">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v14.0" nonce="Ee2Zutm6"></script>
    <div class="row mt-4">
        <div class="card-body bg-dark text-white text-center">
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