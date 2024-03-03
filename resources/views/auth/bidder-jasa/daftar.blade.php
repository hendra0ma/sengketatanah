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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnify/2.3.3/css/magnify.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/js-image-zoom/js-image-zoom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-image-zoom/js-image-zoom.min.js"></script>


    <style>
        body {
            width: 100%;
            margin: 0px;
            padding: 0px;
            overflow-x: hidden;
            background: #eee;
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

        .bg-brown {
            color: #fff;
            background: #61481C;
            border: 1px solid #61481C;
        }

        .text-brown {
            color: #61481C;
        }

        .text-disable {
            color: rgba(108, 117, 125, 0.5)
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

    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</head>

<body>

    @include('layouts.template-public.header')

    <div class="container mt-4 mb-5">
        <h4 class="text-center">Form Pendaftaran {{$req->title}}</h4>

        <div class="row mt-5 g-0 text-center mote">
            <div class="col">
                <span class="fa-stack fa-2x">
                    <i class="fa fa-circle fa-stack-2x text-brown" id="brownie-1"></i>
                    <i class="fa-solid fa-user fa-stack-1x text-white" id="uncheck-1"></i>
                    <i class="fa-solid fa-check fa-stack-1x text-white" id="check-1" style="display: none"></i>
                </span>
                <h6>Info Pribadi</h6>
            </div>
            <div class="col">
                <span class="fa-stack fa-2x">
                    <i class="fa fa-circle fa-stack-2x text-disable" id="brownie-2"></i>
                    <i class="fa-solid fa-location-dot fa-stack-1x text-white" id="uncheck-2"></i>
                    <i class="fa-solid fa-check fa-stack-1x text-white" id="check-2" style="display: none"></i>
                </span>
                <h6>Alamat</h6>
            </div>
            <div class="col">
                <span class="fa-stack fa-2x">
                    <i class="fa fa-circle fa-stack-2x text-disable" id="brownie-3"></i>
                    <i class="fa-solid fa-briefcase fa-stack-1x text-white" id="uncheck-3"></i>
                    <i class="fa-solid fa-check fa-stack-1x text-white" id="check-3" style="display: none"></i>
                </span>
                <h6>Pekerjaan</h6>
            </div>
            <div class="col">
                <span class="fa-stack fa-2x">
                    <i class="fa fa-circle fa-stack-2x text-disable" id="brownie-4"></i>
                    <i class="fa-solid fa-address-book fa-stack-1x text-white" id="uncheck-4"></i>
                    <i class="fa-solid fa-check fa-stack-1x text-white" id="check-4" style="display: none"></i>
                </span>
                <h6>Kontak Darurat</h6>
            </div>
            <div class="col">
                <span class="fa-stack fa-2x">
                    <i class="fa fa-circle fa-stack-2x text-disable" id="brownie-5"></i>
                    <i class="fa-solid fa-paperclip fa-stack-1x text-white" id="uncheck-5"></i>
                    <i class="fa-solid fa-check fa-stack-1x text-white" id="check-5" style="display: none"></i>
                </span>
                <h6>Upload File</h6>
            </div>
            <div class="col">
                <span class="fa-stack fa-2x">
                    <i class="fa fa-circle fa-stack-2x text-disable" id="brownie-6"></i>
                    <i class="fa-solid fa-file fa-stack-1x text-white" id="uncheck-6"></i>
                    <i class="fa-solid fa-check fa-stack-1x text-white" id="check-6" style="display: none"></i>
                </span>
                <h6>Perjanjian</h6>
            </div>
        </div>

        <div class="card mt-5" id="1">
            <div class="card-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="mb-2" style="font-weight: 600">Nama Anda Sesuai KTP</label>
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Contoh : Lewan Wan">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="email" class="mb-2" style="font-weight: 600">Email</label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Contoh : example@email.com">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="password" class="mb-2" style="font-weight: 600">Kata Sandi</label>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Kata Sandi Anda">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="password-c" class="mb-2" style="font-weight: 600">Konfirmasi Kata Sandi</label>
                            <input type="password" class="form-control" name="password-c" id="password-c"
                                placeholder="Kata Sandi Anda">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="hp" class="mb-2" style="font-weight: 600">Nomor HP</label>
                            <input type="number" class="form-control" name="hp" id="hp"
                                placeholder="Contoh : 0812-3452-3571">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="tp-lahir" class="mb-2" style="font-weight: 600">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tp-lahir" id="tp-lahir"
                                placeholder="Contoh : Jakarta">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="tg-lahir" class="mb-2" style="font-weight: 600">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tg-lahir" id="tg-lahir"
                                placeholder="Contoh : 2022-10-05">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="jk" class="mb-2" style="font-weight: 600">Jenis Kelamin</label>
                            <select id="jk" class="form-select">
                                <option>-- Pilih Jenis Kelamin --</option>
                                <option value="Laki">Laki - Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="agama" class="mb-2" style="font-weight: 600">Jenis Kelamin</label>
                            <select id="agama" class="form-select">
                                <option>-- Pilih Agama --</option>
                                <option value="Islam">Islam</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Hindhu">Hindhu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghucu">Konghucu</option>
                                <option value="Lain">Lain Lain</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="status" class="mb-2" style="font-weight: 600">Status Perkawinan</label>
                            <select id="status" class="form-select">
                                <option>-- Pilih Status Perkawinan --</option>
                                <option value="Sudah">Sudah Kawin</option>
                                <option value="Belum">Belum Kawin</option>
                            </select>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="ktp" class="mb-2" style="font-weight: 600">Nomor KTP</label>
                            <input type="number" class="form-control" name="ktp" id="ktp"
                                placeholder="Contoh : 12-34-56-78-90-11-2222">
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="text-center">
                                <img src="{{asset('')}}images/foto_ktp.jpeg" style="width: 73%;" alt="">
                            </div>
                            <div class="text-center mb-2">
                                Contoh Foto
                            </div>
                            <label for="ft-ktp" class="mb-2" style="font-weight: 600">Foto KTP</label>
                            <input class="form-control" type="file" id="ft-ktp" aria-describedby="ft-ktp">
                            <div id="ft-ktp" class="form-text text-danger">Foto e-KTP harus jelas & terang</div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="text-center">
                                <img src="{{asset('')}}images/foto_selfie.jpeg" style="width: 35.8%"
                                    alt="">
                            </div>
                            <div class="text-center mb-2">
                                Contoh Foto
                            </div>
                            <label for="ft-selfie" class="mb-2" style="font-weight: 600">Foto Selfie</label>
                            <input class="form-control" type="file" id="ft-selfie" aria-describedby="ft-selfie">
                            <div id="ft-selfie" class="form-text text-danger">Foto selfie harus jelas & terang tanpa
                                memegang foto KTP</div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="nm-npwp" class="mb-2" style="font-weight: 600">Nomor NPWP (Optional)</label>
                            <input type="text" class="form-control" name="nm-npwp" id="nm-npwp"
                                placeholder="Contoh : 12.345.678.9-123.000">
                            <div id="nm-npwp" class="form-text text-danger">Jika tidak ada, tidak perlu diisi</div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="ft-npwp" class="mb-2" style="font-weight: 600">Foto NPWP (Optional)</label>
                            <input class="form-control" type="file" id="ft-npwp" aria-describedby="ft-npwp">
                            <div id="ft-npwp" class="form-text text-danger">Jika tidak ada, tidak perlu diisi</div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="ft-kk" class="mb-2" style="font-weight: 600">Foto Kartu Keluarga
                                (Optional)</label>
                            <input class="form-control" type="file" id="ft-kk" aria-describedby="ft-kk">
                            <div id="ft-kk" class="form-text text-danger">Jika tidak ada, tidak perlu diisi</div>
                        </div>

                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <button type="button" class="w-100 btn-lg btn btn-brown lan-1 mt-2 mb-2">Lanjut</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card mt-5 d-none" id="2">
            <div class="card-body">
                <form action="">
                    <div class="row">

                        <div class="col-12 bukan-advance">

                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="alamat" class="mb-2" style="font-weight: 600">Alamat Sesuai KTP</label>
                                    <input type="alamat" class="form-control" name="alamat" id="alamat"
                                        placeholder="Contoh : Jakarta">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="provinsi" class="mb-2" style="font-weight: 600">Provinsi</label>
                                    <select id="provinsi" class="form-select theSelect">
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="kota" class="mb-2" style="font-weight: 600">Kota/Kabupaten</label>
                                    <select id="kota" class="form-select theSelect">
                                        <option selected disabled>Pilih Kota</option>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="kelurahan" class="mb-2" style="font-weight: 600">Kelurahan</label>
                                    <input type="kelurahan" class="form-control" name="kelurahan" id="kelurahan"
                                        placeholder="Contoh : Cengkareng">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="kecamatan" class="mb-2" style="font-weight: 600">Kecamatan</label>
                                    <input type="kecamatan" class="form-control" name="kecamatan" id="kecamatan"
                                        placeholder="Contoh : Cengkareng Barat">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="pos" class="mb-2" style="font-weight: 600">Kode Pos</label>
                                    <input type="pos" class="form-control" name="pos" id="pos"
                                        placeholder="Contoh : 12345">
                                </div>

                                <input type="hidden" name="provinsi" value="">
                                <input type="hidden" name="kota" value="">

                                <script>
                                    fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json`)
                                        .then(response => response.json())
                                        .then(provinces => {
                                            let provinsi = document.getElementById('provinsi');
                                            provinsi.innerHTML += `
                                    
                                        <option selected disabled>Pilih Provinsi</option>  
                                        
                                        `;
                                            provinces.forEach(function (data) {

                                                provinsi.innerHTML += `
                                        
                                            <option value="${data.id}">${data.name}</option>  
                                            
                                            `;
                                            })
                                        });
                                    $('select#provinsi').on('change', function () {
                                        let provId = $(this).val();
                                        $.ajax({
                                            url: "{{url('/')}}/kota-prov-id",
                                            data: {
                                                prov_id: $('select#provinsi').val()
                                            },
                                            type: "get",
                                            dataType: "json",
                                            success: function (datas) {
                                                let kota = document.getElementById('kota');
                                                kota.innerHTML += `
        
                                                    
        
                                                    `;
                                                datas.forEach(function (data) {

                                                    kota.innerHTML += `
        
                                                        <option value="${data.id}">${data.name}</option>  
        
                                                        `;
                                                })
                                                $('input[name=provinsi]').val($(
                                                        'select#provinsi option:selected')
                                                    .text());
                                            }
                                        });
                                    })

                                </script>

                            </div>
                        </div>

                        <div class="col-12 advance" style="display: none">

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="alamat-1" class="mb-2" style="font-weight: 600">Alamat Sesuai
                                                KTP</label>
                                            <input type="alamat-1" class="form-control" name="alamat-1" id="alamat-1"
                                                placeholder="Contoh : Jakarta">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="provinsi-1" class="mb-2"
                                                style="font-weight: 600">Provinsi</label>
                                            <select id="provinsi-1" class="form-select theSelect">
                                            </select>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="kota-1" class="mb-2"
                                                style="font-weight: 600">Kota/Kabupaten</label>
                                            <select id="kota-1" class="form-select theSelect">
                                                <option selected disabled>Pilih Kota</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="kelurahan-1" class="mb-2"
                                                style="font-weight: 600">Kelurahan</label>
                                            <input type="kelurahan-1" class="form-control" name="kelurahan-1"
                                                id="kelurahan-1" placeholder="Contoh : Cengkareng">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="kecamatan-1" class="mb-2"
                                                style="font-weight: 600">Kecamatan</label>
                                            <input type="kecamatan-1" class="form-control" name="kecamatan-1"
                                                id="kecamatan-1" placeholder="Contoh : Cengkareng Barat">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="pos-1" class="mb-2" style="font-weight: 600">Kode Pos</label>
                                            <input type="pos-1" class="form-control" name="pos-1" id="pos-1"
                                                placeholder="Contoh : 12345">
                                        </div>

                                        <input type="hidden" name="provinsi" value="">
                                        <input type="hidden" name="kota" value="">

                                        <script>
                                            fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json`)
                                                .then(response => response.json())
                                                .then(provinces => {
                                                    let provinsi = document.getElementById('provinsi-1');
                                                    provinsi.innerHTML += `
                                            
                                                <option selected disabled>Pilih Provinsi</option>  
                                                
                                                `;
                                                    provinces.forEach(function (data) {

                                                        provinsi.innerHTML += `
                                                
                                                    <option value="${data.id}">${data.name}</option>  
                                                    
                                                    `;
                                                    })
                                                });
                                            $('select#provinsi-1').on('change', function () {
                                                let provId = $(this).val();
                                                $.ajax({
                                                    url: "{{url('/')}}/kota-prov-id",
                                                    data: {
                                                        prov_id: $('select#provinsi-1').val()
                                                    },
                                                    type: "get",
                                                    dataType: "json",
                                                    success: function (datas) {
                                                        let kota = document.getElementById(
                                                            'kota-1');
                                                        kota.innerHTML += `
                
                                                            
                
                                                            `;
                                                        datas.forEach(function (data) {

                                                            kota.innerHTML += `
                
                                                                <option value="${data.id}">${data.name}</option>  
                
                                                                `;
                                                        })
                                                        $('input[name=provinsi-1]').val($(
                                                            'select#provinsi-1 option:selected'
                                                        ).text());
                                                    }
                                                });
                                            })

                                        </script>

                                    </div>

                                </div>

                                <hr class="mobile">

                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="alamat-2" class="mb-2" style="font-weight: 600">Alamat Sesuai
                                                Domisili</label>
                                            <input type="alamat-2" class="form-control" name="alamat-2" id="alamat-2"
                                                placeholder="Contoh : Jakarta">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="provinsi-2" class="mb-2" style="font-weight: 600">Provinsi
                                                Domisili</label>
                                            <select id="provinsi-2" class="form-select theSelect">
                                            </select>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="kota-2" class="mb-2" style="font-weight: 600">Kota/Kabupaten
                                                Domisili</label>
                                            <select id="kota-2" class="form-select theSelect">
                                                <option selected disabled>Pilih Kota</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="kelurahan-2" class="mb-2" style="font-weight: 600">Kelurahan
                                                Domisili</label>
                                            <input type="kelurahan-2" class="form-control" name="kelurahan-2"
                                                id="kelurahan-2" placeholder="Contoh : Cengkareng">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="kecamatan-2" class="mb-2" style="font-weight: 600">Kecamatan
                                                Domisili</label>
                                            <input type="kecamatan-2" class="form-control" name="kecamatan-2"
                                                id="kecamatan-2" placeholder="Contoh : Cengkareng Barat">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="pos-2" class="mb-2" style="font-weight: 600">Kode Pos
                                                Domisili</label>
                                            <input type="pos-2" class="form-control" name="pos-2" id="pos-2"
                                                placeholder="Contoh : 12345">
                                        </div>

                                        <input type="hidden" name="provinsi" value="">
                                        <input type="hidden" name="kota" value="">

                                        <script>
                                            fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json`)
                                                .then(response => response.json())
                                                .then(provinces => {
                                                    let provinsi = document.getElementById('provinsi-2');
                                                    provinsi.innerHTML += `
                                            
                                                <option selected disabled>Pilih Provinsi</option>  
                                                
                                                `;
                                                    provinces.forEach(function (data) {

                                                        provinsi.innerHTML += `
                                                
                                                    <option value="${data.id}">${data.name}</option>  
                                                    
                                                    `;
                                                    })
                                                });
                                            $('select#provinsi-2').on('change', function () {
                                                let provId = $(this).val();
                                                $.ajax({
                                                    url: "{{url('/')}}/kota-prov-id",
                                                    data: {
                                                        prov_id: $('select#provinsi-2').val()
                                                    },
                                                    type: "get",
                                                    dataType: "json",
                                                    success: function (datas) {
                                                        let kota = document.getElementById(
                                                            'kota-2');
                                                        kota.innerHTML += `
                
                                                            
                
                                                            `;
                                                        datas.forEach(function (data) {

                                                            kota.innerHTML += `
                
                                                                <option value="${data.id}">${data.name}</option>  
                
                                                                `;
                                                        })
                                                        $('input[name=provinsi-2]').val($(
                                                            'select#provinsi-2 option:selected'
                                                        ).text());
                                                    }
                                                });
                                            })

                                        </script>

                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <input class="form-check-input mr-1" type="checkbox" value="" id="advance">
                            <span class="form-check-label" for="flexCheckChecked">
                                Klik tombol ini jika alamat KTP dengan alamat domisili berbeda
                            </span>
                        </div>

                    </div>
                </form>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <button class="w-100 btn-lg btn btn-outline-brown kem-2 mt-2 mb-2">Kembali</button>
                    </div>
                    <div class="col-md-6">
                        <button class="w-100 btn-lg btn btn-brown lan-2 mt-2 mb-2">Lanjut</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-5 d-none" id="3">
            <div class="card-body">
                <form action="">
                    <div class="row">

                        <div class="col-12">

                            <div class="row">

                                <div class="col-md-6 mb-3">
                                    <label for="pend" class="mb-2" style="font-weight: 600">Pendidikan Terakhir</label>
                                    <select id="pend" class="form-select">
                                        <option selected disabled>-- Pilih Pendidikan Terakhir --</option>
                                        <option>SD</option>
                                        <option>SMP</option>
                                        <option>SMA/SMK</option>
                                        <option>DIPLOMA</option>
                                        <option>SARJANA</option>
                                        <option>MAGISTER</option>
                                        <option>DOKTOR</option>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="pend" class="mb-2" style="font-weight: 600">Pekerjaan</label>
                                    <select id="pend" class="form-select">
                                        <option selected disabled>-- Pilih Pekerjaan Terakhir --</option>
                                        <option value="1">PNS</option>
                                        <option value="2">TNI/ POLRI/</option>
                                        <option value="3">Karyawan BUMN</option>
                                        <option value="4">Karyawan Swasta</option>
                                        <option value="8">Konsultan Hukum</option>
                                        <option value="5">Wiraswasta</option>
                                        <option value="6">Pelajar/Mahasiswa</option>
                                        <option value="7">Pengacara</option>
                                        <option value="9">Lain-lain</option>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="bidpek" class="mb-2" style="font-weight: 600">Bidang Pekerjaan</label>
                                    <select id="bidpek" class="form-select">
                                        <option selected disabled>-- Pilih Bidang Pekerjaan --</option>
                                        <option value="e2">Pertanian, Perburuan dan Kehutanan</option>
                                        <option value="e5">Perikanan</option>
                                        <option value="e6">Pertambangan dan Penggalian</option>
                                        <option value="e12">Industri Pengolahan</option>
                                        <option value="e36">Listrik, Gas, dan Air</option>
                                        <option value="e39">Konstruksi</option>
                                        <option value="e40">Perdagangan Besar dan Eceran</option>
                                        <option value="e46">Penyediaan Akomodasi dan Penyediaan Makan Minum</option>
                                        <option value="e47">Transportasi, Pergudangan, dan Komunikasi</option>
                                        <option value="e52">Perantara Keuangan</option>
                                        <option value="e56">Real Estate, Usaha Persewaan, dan Jasa Perusahaan</option>
                                        <option value="e62">Administrasi Pemerintahan, Pertahanan, dan Jaminan Sosial Wajib</option>
                                        <option value="e64">Jasa Hukum</option>
                                        <option value="e63">Jasa Pendidikan</option>
                                        <option value="e64">Jasa Kesehatan dan Kegiatan Sosial</option>
                                        <option value="e67">Kegiatan Organisasi Yang Tidak Diklasifikasi Ditempat Lain</option>
                                        <option value="e70">Jasa Perorangan yang Melayani Rumah Tangga</option>
                                        <option value="e71">Badan Internasional dan Badan Ekstra Internasional Lainnya</option>
                                        <option value="e72">Kegiatan yang Belum Jelas Batasannya</option>
                                        <option value="e00">Pelajar/Mahasiswa</option>
                                        <option value="e01">Tidak Bekerja / Bukan Pelajar</option>
                                    </select>
                                </div>

                                 <div class="col-md-6 mb-3">
                                    <label for="penja" class="mb-2" style="font-weight: 600">Pengalaman Kerja</label>
                                    <select id="penja" class="form-select">
                                        <option selected disabled>-- Pilih Pengalaman Kerja --</option>
                                        <option value="0">Pelajar atau belum pernah bekerja</option>
                                        <option value="1">&lt; 1 Tahun</option>
                                        <option value="2">1 s.d. 2 Tahun</option>
                                        <option value="3">2 s.d. 3 Tahun</option>
                                        <option value="4">&gt; 3 Tahun</option>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="keprum" class="mb-2" style="font-weight: 600">Status Kepemilikan Rumah</label>
                                    <select id="keprum" class="form-select">
                                        <option selected disabled>-- Pilih Status Kepemilikan Rumah --</option>
                                        <option value="1">Memiliki rumah sendiri</option>
                                        <option value="2">Tidak memiliki rumah sendiri</option>
                                    </select>
                                </div>

                            </div>

                        </div>

                    </div>
                </form>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <button class="w-100 btn-lg btn btn-outline-brown kem-3 mt-2 mb-2">Kembali</button>
                    </div>
                    <div class="col-md-6">
                        <button class="w-100 btn-lg btn btn-brown lan-3 mt-2 mb-2">Lanjut</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-5 d-none" id="4">
            <div class="card-body">
                <form action="">
                    <div class="row">

                        <div class="col-12">

                            <div class="row">

                                <div class="col-md-6 mb-3">
                                    <label for="nama-dar" class="mb-2" style="font-weight: 600">Nama Lengkap Darurat</label>
                                    <input type="text" class="form-control" name="nama-dar" id="nama-dar"
                                        placeholder="Nama Lengkap Darurat">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="hp-dar" class="mb-2" style="font-weight: 600">No Handphone</label>
                                    <input type="number" class="form-control" name="hp-dar" id="hp-dar"
                                        placeholder="Nomor HP Darurat">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="alamat-dar" class="mb-2" style="font-weight: 600">Alamat</label>
                                    <input type="text" class="form-control" name="alamat-dar" id="alamat-dar"
                                        placeholder="Alamat Kontak">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="hub-dar" class="mb-2" style="font-weight: 600">Hubungan dengan kontak darurat</label>
                                    <input type="text" class="form-control" name="hub-dar" id="hub-dar"
                                        placeholder="Hubungan Kontak">
                                </div>

                            </div>

                        </div>

                    </div>
                </form>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <button class="w-100 btn-lg btn btn-outline-brown kem-4 mt-2 mb-2">Kembali</button>
                    </div>
                    <div class="col-md-6">
                        <button class="w-100 btn-lg btn btn-brown lan-4 mt-2 mb-2">Lanjut</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-5 d-none" id="5">
            <div class="card-body">
                <form action="">
                    <div class="row mb-4">
                        <div class="col-md-12 mb-3">
                            <label for="sert_peng" class="mb-2" style="font-weight: 600">Sertifikat {{$req->title}}</label>
                            <input class="form-control" type="file" id="sert_peng" aria-describedby="sert_peng">
                        </div>
                        
                        <div class="col-md-12 mb-3">
                            <input class="form-check-input mr-1" type="checkbox" value="" id="setuju">
                            <span class="form-check-label" for="setuju">
                                Saya menyatakan bahwa data-data yang telah saya isi diatas adalah valid, saya telah melakukan pengecekan atas kebenaran data-data tersebut, dan saya telah membaca ketentuan privacy dan cookies .
                            </span>
                        </div>
                    </div>
                </form>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <button class="w-100 btn-lg btn btn-outline-brown kem-5 mt-2 mb-2">Kembali</button>
                    </div>
                    <div class="col-md-6">
                        <button class="w-100 btn-lg btn btn-outline-brown lan-5 mt-2 mb-2">Lanjut</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-5 d-none" id="6">
            <div class="card-body">
                <form action="">
                    <div class="row" style="height: 500px">

                    </div>
                </form>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <button class="w-100 btn-lg btn btn-outline-brown kem-6 mt-2 mb-2">Kembali</button>
                    </div>
                    <div class="col-md-6">
                        <a class="w-100 btn-lg btn btn-brown mt-2 mb-2" href="{{url('')}}/buat-laporan">Daftar</a>
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

    <script>
        $(".theSelect").select2({
            theme: "bootstrap-5",
        });

        $("#advance").click(function () {
            if ($(this).is(':checked')) {
                $(".bukan-advance").hide()
                $(".advance").show()
            } else {
                $(".bukan-advance").show()
                $(".advance").hide()
            }
        })

        // 1
        $(".lan-1").click(function () {
            $('#1').addClass('d-none')
            $('#2').removeClass('d-none')
            $('#brownie-2').addClass('text-brown')
            $('#brownie-2').removeClass('text-disable')
            $('#uncheck-1').hide()
            $('#check-1').show()
            $("html, body").animate({scrollTop: 0}, 0);
        })

        // 2
        $(".kem-2").click(function () {
            $('#1').removeClass('d-none')
            $('#2').addClass('d-none')
            $('#brownie-2').removeClass('text-brown')
            $('#brownie-2').addClass('text-disable')
            $('#uncheck-1').show()
            $('#check-1').hide()
            $("html, body").animate({scrollTop: 0}, 0);
        })

        $(".lan-2").click(function () {
            $('#2').addClass('d-none')
            $('#3').removeClass('d-none')
            $('#brownie-3').addClass('text-brown')
            $('#brownie-3').removeClass('text-disable')
            $('#uncheck-2').hide()
            $('#check-2').show()
            $("html, body").animate({scrollTop: 0}, 0);
        })

        // 3
        $(".kem-3").click(function () {
            $('#2').removeClass('d-none')
            $('#3').addClass('d-none')
            $('#brownie-3').removeClass('text-brown')
            $('#brownie-3').addClass('text-disable')
            $('#uncheck-2').show()
            $('#check-2').hide()
            $("html, body").animate({scrollTop: 0}, 0);
        })

        $(".lan-3").click(function () {
            $('#3').addClass('d-none')
            $('#4').removeClass('d-none')
            $('#brownie-4').addClass('text-brown')
            $('#brownie-4').removeClass('text-disable')
            $('#uncheck-3').hide()
            $('#check-3').show()
            $("html, body").animate({scrollTop: 0}, 0);
        })

        // 4
        $(".kem-4").click(function () {
            $('#3').removeClass('d-none')
            $('#4').addClass('d-none')
            $('#brownie-4').removeClass('text-brown')
            $('#brownie-4').addClass('text-disable')
            $('#uncheck-3').show()
            $('#check-3').hide()
            $("html, body").animate({scrollTop: 0}, 0);
        })

        $(".lan-4").click(function () {
            $('#4').addClass('d-none')
            $('#5').removeClass('d-none')
            $('#brownie-5').addClass('text-brown')
            $('#brownie-5').removeClass('text-disable')
            $('#uncheck-4').hide()
            $('#check-4').show()
            $("html, body").animate({scrollTop: 0}, 0);
        })

        $(".kem-5").click(function () {
            $('#4').removeClass('d-none')
            $('#5').addClass('d-none')
            $('#brownie-5').removeClass('text-brown')
            $('#brownie-5').addClass('text-disable')
            $('#uncheck-4').show()
            $('#check-4').hide()
            $("html, body").animate({scrollTop: 0}, 0);
        })

        $(".lan-5").click(function () {
            $('#5').addClass('d-none')
            $('#6').removeClass('d-none')
            $('#brownie-6').addClass('text-brown')
            $('#brownie-6').removeClass('text-disable')
            $('#uncheck-5').hide()
            $('#check-5').show()
            $("html, body").animate({scrollTop: 0}, 0);
        })

        // 5
        $(".kem-6").click(function () {
            $('#5').removeClass('d-none')
            $('#6').addClass('d-none')
            $('#brownie-6').removeClass('text-brown')
            $('#brownie-6').addClass('text-disable')
            $('#uncheck-5').show()
            $('#check-5').hide()
            $("html, body").animate({scrollTop: 0}, 0);
        })
        
    </script>

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
