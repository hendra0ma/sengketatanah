<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Sengketa Tanah, Dapatkan solusi bantuan pendanaan dan bantuan hukum disini. Bebaskan Indonesia dari Mafia Tanah!" />
    <meta property="og:title" content="Sengketa Tanah" />
    <meta property="og:url" content="https://sengketatanah.id/" />
    <meta property="og:description"
        content="Platform SENGKETA TANAH siap membantu anda dalam urusan hukum persengketaan tanah di seluruh wilayah Indonesia." />
    <meta property="og:image" content="{{asset('/uploads/sengketa-logo_pas.ico')}}" />
    <title>Sengketa Tanah</title>
    <link rel="icon" href="{{asset('/uploads/sengketa-logo_pas-9.png')}}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs5/dt-1.12.1/b-2.2.3/datatables.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" type="text/css"
        href=" https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css" />
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

        @media (min-width: 1400px) {
            .container {
                max-width: 1000px;
            }
        }

        @media (min-width: 1200px) {
            .container {
                max-width: 1000px;
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

        . .btn-glass {
            color: rgba(255, 255, 255, 0.7);
            background-color: rgba(17, 17, 17, 0);
        }

        . .btn-glass:hover {
            border-color: #000000;
            background-color: #111111;
        }

        . .btn-glass:active {
            position: relative;
            z-index: 1;
            box-shadow: 0 0 1em 0.5ex rgba(17, 17, 17, 0.5);
        }

        . .btn-glass.btn-primary {
            color: rgba(255, 255, 255, 0.7);
            background-color: rgba(42, 143, 189, 0);
        }

        . .btn-glass.btn-primary:hover {
            border-color: #1c607e;
            background-color: #2a8fbd;
        }

        . .btn-glass.btn-primary:active {
            position: relative;
            z-index: 1;
            box-shadow: 0 0 1em 0.5ex rgba(42, 143, 189, 0.5);
        }

        . .btn-glass.btn-success {
            color: rgba(255, 255, 255, 0.7);
            background-color: rgba(127, 175, 27, 0);
        }

        . .btn-glass.btn-success:hover {
            border-color: #4f6d11;
            background-color: #3cb22e;
        }

        . .btn-glass.btn-success:active {
            position: relative;
            z-index: 1;
            box-shadow: 0 0 1em 0.5ex rgba(127, 175, 27, 0.5);
        }

        . .btn-glass.btn-warning {
            color: rgba(255, 255, 255, 0.7);
            background-color: rgba(251, 184, 41, 0);
        }

        . .btn-glass.btn-warning:hover {
            border-color: #d49104;
            background-color: #fbb829;
        }

        . .btn-glass.btn-warning:active {
            position: relative;
            z-index: 1;
            box-shadow: 0 0 1em 0.5ex rgba(251, 184, 41, 0.5);
        }

        . .btn-glass.btn-danger {
            color: rgba(255, 255, 255, 0.7);
            background-color: rgba(240, 35, 17, 0);
        }

        . .btn-glass.btn-danger:hover {
            border-color: #aa180b;
            background-color: #f02311;
        }

        . .btn-glass.btn-danger:active {
            position: relative;
            z-index: 1;
            box-shadow: 0 0 1em 0.5ex rgba(240, 35, 17, 0.5);
        }

        . .btn-glass.btn-info {
            color: rgba(255, 255, 255, 0.7);
            background-color: rgba(108, 223, 234, 0);
        }

        . .btn-glass.btn-info:hover {
            border-color: #29d0e0;
            background-color: #6cdfea;
        }

        . .btn-glass.btn-info:active {
            position: relative;
            z-index: 1;
            box-shadow: 0 0 1em 0.5ex rgba(108, 223, 234, 0.5);
        }

        .btn-glass {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            text-align: center;
            display: inline-block;
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            padding: 1em 2em;
            font-family: Lato;
            font-weight: 300;
            border: 1px dotted transparent;
            letter-spacing: 0.98pt;
            text-transform: uppercase;
            -webkit-transition: background-position 2s cubic-bezier(0, 1, 0, 1), border-color 500ms, background-color 500ms;
            transition: background-position 2s cubic-bezier(0, 1, 0, 1), border-color 500ms, background-color 500ms;
            position: relative;
            background-attachment: fixed, scroll;
            background-size: 100vw 100vh, cover;
            background-position: center center, 0 0;

            background-image: -webkit-repeating-linear-gradient(135deg, rgba(255, 255, 255, 0) 8%, rgba(255, 255, 255, 0.075) 10%, rgba(255, 255, 255, 0.075) 14%, rgba(255, 255, 255, 0.15) 14%, rgba(255, 255, 255, 0.15) 15%, rgba(255, 255, 255, 0.075) 17%, rgba(255, 255, 255, 0) 30%, rgba(255, 255, 255, 0) 36%, rgba(255, 255, 255, 0.075) 40%, rgba(255, 255, 255, 0.15) 42%, rgba(255, 255, 255, 0) 43%, rgba(255, 255, 255, 0) 55%, rgba(255, 255, 255, 0.075) 60%, rgba(255, 255, 255, 0.075) 66%, rgba(255, 255, 255, 0.15) 66%, rgba(255, 255, 255, 0.075) 70%, rgba(255, 255, 255, 0) 75%, rgba(255, 255, 255, 0) 100%), -webkit-radial-gradient(ellipse farthest-corner, transparent, rgba(0, 0, 0, 0.2) 110%);

            background-image: repeating-linear-gradient(-45deg, rgba(255, 255, 255, 0) 8%, rgba(255, 255, 255, 0.075) 10%, rgba(255, 255, 255, 0.075) 14%, rgba(255, 255, 255, 0.15) 14%, rgba(255, 255, 255, 0.15) 15%, rgba(255, 255, 255, 0.075) 17%, rgba(255, 255, 255, 0) 30%, rgba(255, 255, 255, 0) 36%, rgba(255, 255, 255, 0.075) 40%, rgba(255, 255, 255, 0.15) 42%, rgba(255, 255, 255, 0) 43%, rgba(255, 255, 255, 0) 55%, rgba(255, 255, 255, 0.075) 60%, rgba(255, 255, 255, 0.075) 66%, rgba(255, 255, 255, 0.15) 66%, rgba(255, 255, 255, 0.075) 70%, rgba(255, 255, 255, 0) 75%, rgba(255, 255, 255, 0) 100%), radial-gradient(ellipse farthest-corner, transparent, rgba(0, 0, 0, 0.2) 110%);
        }

        .btn-glass:hover {
            background-position: -100vw 0, 0 0;
        }

        .btn-glass:active {
            background-position: -75vw 0, 0 0;
            border-style: solid;
        }

        .fom-gup {
            background: linear-gradient(to top, #dfdfdf, #ffffff) repeat-x center;
            background-size: 2px 2px;
            min-width: 50px;

        }

        input::placeholder {
            font-weight: lighter;
            opacity: .35;
        }

        textarea::placeholder {
            font-weight: lighter;
            opacity: .35;
        }

    </style>
</head>

<body class="bg-light">
    <div class="container mt-3" id="card2">
        <div class="row justify-content-center mb-1">
            <div class="col-md-5">
                <img src="{{asset('/uploads/sengketa_tanah.png')}}" alt="" srcset="" class="img-fluid">
            </div>
        </div>

        <div class="row justify-content-center">
            <h3>Korban Sengketa</h3>
            <hr>
            <p style="text-align: justify">Banyak korban sengketa tanah kehabisan biaya dan tenaga untuk
                memperjuangkan hak mereka. Disini, jika Anda menemui masalah tersebut, Platform Sengketa
                Tanah adalah alat yang paling tepat untuk menemukan bantuan Sponsor, Pengacara bahkan
                bantuan Pemerintah untuk membantu perjuangan Anda.</p>
            <p style="text-align: justify">Sengketa pertanahan dibagi menjadi 3 bagian, yaitu:</p>
            <ol>
                <li>Sengketa pertanahan, yaitu perselisihan tanah antara orang perseorangan, badan hukum,
                    atau lembaga yang tidak berdampak luas.</li>
                <li>Konflik pertanahan, yaitu perselisihan tanah antara orang perseorangan, kelompok,
                    golongan, organisasi, badan hukum, atau lembaga yang mempunyai kecenderungan atau sudah
                    berdampak luas.</li>
                <li>Perkara pertanahan, yaitu perselisihan tanah yang penanganan dan penyelesaiannya melalui
                    lembaga peradilan.</li>
            </ol>
            <p style="text-align: justify">Jika anda memiliki salah satu permasalahan tanah diatas dan
                membutuhkan bantuan, Anda bisa laporkan disini .</p>
            <a type="button" href="{{url('')}}/register" class="btn btn-glass btn-dark mb-3 w-100">Daftar
                Sekarang</a>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
        <script src="https://code.jquery.com/jquery-3.6.1.js"
            integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
        <!-- <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> -->

        <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/b-2.2.3/datatables.min.js">
        </script>
        <script type="text/javascript" src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.js"></script>

</body>

</html>
