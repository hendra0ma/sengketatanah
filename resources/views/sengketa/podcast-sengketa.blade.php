<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulir Laporan Sengketa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<style>
    
    .center {
            padding: 70px 0;
            text-align: center;
        }
</style>
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
                        <li class="nav-item">
                            <a class="nav-link" href="{{url("/")}}/role">Role Pengguna</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Panduan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Jaminan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Bid Sengketa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Podcast Sengketa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}/tentang">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}/contact">Hubungi Kami</a>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </nav>

        <div class="row g-3">
            <div class="col-lg-6">
                @if($request->link_yt != null)
                <iframe width="100%" height="200" src="{{$request->link_yt}}"
                    title="onewsritv_Pak Menteri ATR/BPN Ditantang Mafia Tanah" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                @else
                <div class="card bg-dark rounded-0" width="100%" style="height:200px">
                    <div class="card-body center">
                        <h3 class="text-white text-uppercase text-center">
                            Belum ada Video
                        </h3>
                    </div>
                </div>
                @endif
                <table class="table">
                    <tr>
                        <td colspan="3" class="fw-bold fs-3 text-danger">Podcast Sengketa Tanah</td>
                    </tr>
                    <tr>
                        <td> Owner/Korban</td>
                        <td>:</td>
                        <td>{{$request->owner}}</td>
                    </tr>

                    <tr>
                        <td>Objek Sengketa</td>
                        <td>:</td>
                        <td>{{$request->objek}}</td>
                    </tr>
                    <tr>
                        <td>Luas Objek</td>

                        <td>:</td>
                        <td>{{$request->luas}}</td>
                    </tr>
                    <tr>
                        <td>Lokasi</td>

                        <td>:</td>
                        <td>{{$request->lokasi}}</td>
                    </tr>
                </table>
                <div class="d-grid gap-2">
                    <?php $form = $request->form; ?>
                    @if($form == 'sponsor')
                    <a href="{{url('/')}}/login?title=Bid Sponsor" class="btn btn-primary" type="button">Sengketa Pertanahan</a>
                    @elseif($form == 'pengacara')
                    <div class="d-grid gap-2">
                        <a href="{{url('/')}}/login?title=Bid Sengketa" class="btn btn-success" type="button">Bid
                            Sengketa</a>
                    </div>
                    @else
                    <button class="alert alert-warning mt-2" type="button">Keterangan: Data sengketa tanah
                        ini telah diterima oleh Platform
                        Sengketa Tanah dan akan diteruskan pada instansi
                        terkait. </button>
                    @endif
                </div>

            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="d-flex flex-column col-md-12">

                        <div class="coment-bottom bg-white p-1">
                            <div class="d-flex flex-row add-comment-section mt-4 mb-4">
                                <img class="img-fluid img-responsive rounded-circle me-2"
                                    src="https://i.imgur.com/qdiP4DB.jpg" width="38">
                                <input type="text" class="form-control me-3 rounded-0" placeholder="Tambah Komentar">
                                <button class="btn btn-primary rounded-0" type="button">Komentar</button>
                            </div>
                            <hr>

                            @if($request->komentar == "ada")
                            <div class="commented-section mt-2">
                                <div class="d-flex flex-row align-items-center commented-user">

                                    <img class="img-fluid img-responsive rounded-circle me-2"
                                        src="data:image/jpeg;base64,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"
                                        width="38">
                                    <h5 class="me-2">Budi Susanto</h5><span class="dot mb-1"></span><span
                                        class="mb-1 ms-2">4
                                        jam yang lalu</span>
                                </div>
                                <div class="comment-text-sm"><span>Pak
                                        Lurahnya harus tanggung jawab.
                                        Jangan enak nyomot tanah
                                        warga!</span>
                                </div>
                                <div class="reply-section">
                                    <div class="d-flex flex-row align-items-center voting-icons">
                                        <i class="fa fa-sort-up  mt-3 hit-voting"></i><i
                                            class="fa fa-sort-down  mb-3 hit-voting"></i><span
                                            class="ms-2">10</span><span class="dot ms-2"></span>
                                        <h6 class="ms-2 mt-1">Reply</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="commented-section mt-2">
                                <div class="d-flex flex-row align-items-center commented-user">
                                    <img class="img-fluid img-responsive rounded-circle me-2"
                                        src="https://i.pinimg.com/236x/c5/e9/d6/c5e9d60c56a92ac4f7b0efc549595370.jpg"
                                        width="38">
                                    <h5 class="me-2">Heri Kusuma</h5><span class="dot mb-1"></span><span
                                        class="mb-1 ms-2">5
                                        jam yang lalu</span>
                                </div>
                                <div class="comment-text-sm"><span>Pasti ada
                                        oknum lain yang bantuin Si
                                        Lurah.</span></div>
                                <div class="reply-section">
                                    <div class="d-flex flex-row align-items-center voting-icons">
                                        <i class="fa fa-sort-up  mt-3 hit-voting"></i><i
                                            class="fa fa-sort-down  mb-3 hit-voting"></i><span
                                            class="ms-2">15</span><span class="dot ms-2"></span>
                                        <h6 class="ms-2 mt-1">Reply</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="commented-section mt-2">
                                <div class="d-flex flex-row align-items-center commented-user">
                                    <img class="img-fluid img-responsive rounded-circle me-2"
                                        src="https://cf.shopee.co.id/file/880633155fad40ec9a995fcdb20b2fcb_tn"
                                        width="38">
                                    <h5 class="me-2">Lukas Supriadi</h5>
                                    <span class="dot mb-1"></span><span class="mb-1 ms-2">10
                                        jam yang lalu</span>
                                </div>
                                <div class="comment-text-sm">
                                    <span>Penjarakan Lurahnya orang kayak
                                        gitu jangan kasih bebas!!</span>
                                </div>
                                <div class="reply-section">
                                    <div class="d-flex flex-row align-items-center voting-icons">
                                        <i class="fa fa-sort-up  mt-3 hit-voting"></i><i
                                            class="fa fa-sort-down  mb-3 hit-voting"></i><span
                                            class="ms-2">25</span><span class="dot ms-2"></span>
                                        <h6 class="ms-2 mt-1">Reply</h6>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="card bg-white rounded-0" width="100%" style="height:200px;border:0px solid">
                                <div class="card-body center">
                                    <h3 class="text-dark text-uppercase text-center">
                                        Belum ada Komentar
                                    </h3>
                                </div>
                            </div>

                            @endif

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <hr>
        <div class="row" style="margin-top:-20px">
            <div class="col-12 p-2">

                <span class="fa-stack fa-lg float-end">
                    <i class="fa fa-circle fa-stack-2x " style="text-shadow: -3px 3px 5px #bbbbbb;"></i>
                    <i class="fa-solid fa-share fa-stack-1x fa-inverse"></i>

                </span> <span class="float-start mt-2">Bagikan Video
                    ini</span>
            </div>
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
            $('#myTable').DataTable();
        });

    </script>
       @include('layouts.dark_mode')
</body>

</html>
