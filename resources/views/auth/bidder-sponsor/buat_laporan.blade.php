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
        <h4 class="text-center">Formulir Sengketa Tanah</h4>

        <div class="card mt-5">
            <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="row">

                        <div class="mb-3 col-md-6">
                            <label class="mb-2" style="font-weight: 600">Objek Sengketa</label>
                            <select class="form-select rounded-3"
                                aria-label="Default select example" name="objek_sengketa" required>
                                <option value="Sengketa Pertanahan">Sengketa Pertanahan
                                </option>
                                <option value="Konflik Pertanahan">Konflik Pertanahan
                                </option>
                                <option value="Perkara Pertanahan">Perkara Pertanahan
                                </option>
                            </select>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="luas" class="mb-2" style="font-weight: 600">Luas Tanah
                                (m/ha)</label>
                            <input type="text" class="form-control rounded-3" id="luas"
                                placeholder="Masukkan Luas Tanah" aria-describedby="input-luas"
                                name="luas" required>
                            <div id="input-luas" class="form-text"></div>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="provinsi" class="mb-2" style="font-weight: 600">Provinsi</label>
                            <select id="provinsi" class="form-select rounded-3"
                                aria-label="Default select example">
                            </select>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="kota" class="mb-2" style="font-weight: 600">Pilih Kota</label>
                            <select id="kota" class="form-select rounded-3" aria-label="Default select example">
                               <option selected disabled>Pilih Kota</option>
                            </select>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="kecamatan" class="mb-2" style="font-weight: 600">Pilih Kecamatan</label>
                            <select id="kecamatan" class="form-select rounded-3"
                                aria-label="Default select example">
                                <option selected disabled>Pilih kecamatan</option>
                            </select>
                        </div>

                        <div class="col-12 mb-3 col-md-6">
                            <label for="desa" class="mb-2" style="font-weight: 600">Pilih Desa</label>
                            <select id="desa" class="form-select rounded-3"
                                aria-label="Default select example">
                                <option selected disabled>Pilih Desa</option>
                            </select>
                        </div>

                        <input type="hidden" name="provinsi" value="">
                        <input type="hidden" name="kota" value="">
                        <input type="hidden" name="kecamatan" value="">
                        <input type="hidden" name="desa" value="">

                        <div class="mb-3 col-md-12">
                            <label for="kronologi" class="mb-2" style="font-weight: 600">Kronologi</label>
                            <textarea id="kronologi" class="form-control rounded-3"
                                placeholder="Masukkan Kronologi / Unggah File Kronologi "
                                aria-describedby="input-kronologi" name="kronologi" cols="30" rows="10"
                                required></textarea>
                            <div id="input-kronologi" class="form-text"></div>
                        </div>

                        <div class="mb-3 col-md-12">
                            <label for="file_kronologi" class="mb-2" style="font-weight: 600">Unggah File Kronologi</label>
                            <input class="form-control rounded-3 " type="file" id="file_kronologi"
                                name="file_kronologi">
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="mb-2" style="font-weight: 600">Status Pelapor</label>
                            <select class="form-select rounded-3" aria-label="Default select example"
                                name="status_pelapor" required>
                                <option selected>Pilih Status</option>
                                <option value="Pemilik">Pemilik</option>
                                <option value="Kuasa Pemilik">Kuasa Pemilik</option>
                            </select>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="mb-2" style="font-weight: 600">Pilih Jenis Pertolongan</label>
                            <select class="form-select rounded-3" aria-label="Default select example"
                                name="jenis_pertolongan" required>
                                <option selected disabled>Pilih Pertolongan</option>
                                <option value="sponsor">Sponsor</option>
                                <option value="pengacara">Pengacara</option>
                                <option value="pemerintah">Pemerintah</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <div id="pengembalian_dana" class="alert alert-danger sponsor rounded-3" role="alert">
                                <strong>
                                    Saya membutuhkan bantuan pendanaan dari sponsor untuk
                                    menyelesaikan
                                    permasalahan sengketa tanah saya.
                                </strong>
                            </div>
                        </div>

                        <div class="mb-2 pengacara">
                            <label class="mb-2" style="font-weight: 600">Pilih Tindakan Pengacara</label>
                            <select class="form-select rounded-3" aria-label="Default select example"
                                name="bantuan_pengacara" required>
                                <option selected disabled>Pilih Bantuan Pengacara</option>
                                <option value="konsultasi">Konsultasi</option>
                                <option value="pendampingan">Pendampingan</option>
                                <option value="penindakan">Penindakan</option>
                                <option value="cek-dokumen">Cek Dokumen</option>
                            </select>
                        </div>

                        <div class="mb-2 pengacara">
                            <label for="anggaran_pengacara" class="mb-2" style="font-weight: 600">Anggaran
                                Pengacara</label>
                            <div class="row">
                                <div class="col">
                                    <input type="number" class="form-control rounded-3"
                                        id="anggaran_pengacara-s" placeholder="Anggaran mulai dari ..."
                                        aria-describedby="input-anggaran_pengacara-s"
                                        name="anggaran_pengacara-s">
                                </div>
                                <div class="col-1 text-center"
                                    style="width:4% !important; padding-right: 0px !important; padding-left: 0px !important">
                                    -
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control rounded-3"
                                        id="anggaran_pengacara-e" placeholder="Sampai ..."
                                        aria-describedby="input-anggaran_pengacara-e"
                                        name="anggaran_pengacara-e">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div id="pengembalian_dana" class="alert alert-danger pemerintah rounded-3" role="alert">
                                <strong>
                                    Saya hanya membutuhkan pertolongan agar permasalahan sengketa
                                    tanah
                                    saya diteruskan pada Pemerintah.
                                </strong>
                            </div>
                        </div>

                        <div class="mb-2 sponsor">
                            <label for="jumlah_dana" class="mb-2" style="font-weight: 600">Jumlah Dana Sponsor</label>
                            <input type="number" class="form-control rounded-3" id="jumlah_dana"
                                placeholder="Sebutkan Jumlah Kebutuhan" aria-describedby="input-jumlah_dana"
                                name="jumlah_dana">
                            <div id="input-jumlah_dana" class="form-text"></div>
                        </div>


                        <div class="mb-2 sponsor">
                            <label class="mb-2" style="font-weight: 600" for="jaminan_dana">Jaminan Dana
                                Sponsor</label>
                            <select class="form-select rounded-3" aria-label="Default select example"
                                name="jaminan">
                                <option selected disabled>Pilih Jaminan</option>
                                <option value="ada">Ada Jaminan</option>
                                <option value="tidak">Tidak Ada Jaminan</option>
                            </select>
                        </div>

                         <div class="mb-2 jaminan_berupa">
                            <label for="jaminan_berupa" class="mb-2" style="font-weight: 600">Jaminan Berupa</label>
                            <select class="form-select rounded-3" id="lokasi"
                                placeholder="Masukkan Jaminan" aria-describedby="input-jaminan"
                                name="jaminan_berupa">
                                <option value="Sertifikat Tanah">Sertifikat Tanah</option>
                                <option value="Sertifikat Rumah">Sertifikat Rumah</option>
                            </select>
                        </div>
                        
                        <div class="mb-2 sponsor">
                            <label class="mb-2" style="font-weight: 600">Pengembalian Dana Sponsor</label>
                            <select class="form-select rounded-3" aria-label="Default select example"
                                name="pengembalian_dana" required>
                                <option selected disabled>Pilih Jenis Pengembalian</option>
                                <option value="Bagi Hasil 70/30">Bagi Hasil 70/30*</option>
                                <option value="Bagi Hasil 60/40">Bagi Hasil 60/40*</option>
                                <option value="Bagi Hasil 50/50">Bagi Hasil 50/50*</option>
                                <option value="Fee 50% Dari Pinjaman">Fee 50% Dari Pinjaman</option>
                                <option value="Fee 75% Dari Pinjaman">Fee 75% Dari Pinjaman</option>
                                <option value="Fee 100% Dari Pinjaman">Fee 100% Dari Pinjaman</option>
                            </select>
                            <small id="pengembalian_dana" class="form-text text-muted">Bagi
                                hasil di
                                rekomendasikan untuk kasus-kasus sengketa tanah yang berat.
                                Tanda
                                bintang(*) adalah pembagian untuk sponsor. </small>
                        </div>

                        <div class="col-12">
                            <div class="mb-2 form-check">
                                <input type="checkbox" class="form-check-input" required id="exampleCheck1">
                                <label class="form-check-label" style="text-align:justify"
                                    for="exampleCheck1">Dengan
                                    mengisi form ini saya
                                    menyatakan bahwa semua data yang diberikan benar adanya dan
                                    laporan
                                    ini tidak
                                    sedang dalam penanganan hukum pihak lain. Saya bersedia
                                    melakukan
                                    wawancara mendalam di
                                    <b>PODCAST SENGKETA TANAH</b> dan bekerja sama dengan
                                    Sponsor melalui <b>PLATFORM SENGKETA TANAH</b> untuk
                                    diselesaikan.</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-brown mt-3 ml-auto rounded-3">Kirim</button>
                        </div>
                    </div>
                </form>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>



    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> -->

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/b-2.2.3/datatables.min.js">
    </script>

    <script>
        $(function () {
            var hidestuff = function () {
                $(".korban, .sponsor, .pengacara").hide();
            }

            $("select[name='role']").change(function () {
                hidestuff();

                var value = $(this).val();
                if (value == "korban") {
                    $(".korban").show();
                }
                if (value == "sponsor") {
                    $(".sponsor").show();
                }
                if (value == "pengacara") {
                    $(".pengacara").show();
                }
            });
            hidestuff();
        });

        $(function () {
            var hidestuff = function () {
                $(".jaminan_berupa").hide();
            }

            $("select[name='jaminan']").change(function () {
                hidestuff();

                var value = $(this).val();
                if (value == "ada") {
                    $(".jaminan_berupa").show();
                }
            });
            hidestuff();
        });

        $(function () {
            var hidestuff = function () {
                $(".pengelolaan-platform, .pengelolaan-sendiri").hide();
            }

            $("select[name='pengelolaan_dana']").change(function () {
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

        $(function () {
            var hidestuff = function () {
                $(".law-firm").hide();
            }

            $("select[name='mewakili']").change(function () {
                hidestuff();

                var value = $(this).val();
                if (value == "law-firm") {
                    $(".law-firm").show();
                }
            });
            hidestuff();
        });

        $(function () {
            var hidestuff = function () {
                $(".sponsor, .pengacara, .pemerintah").hide();
            }

            $("select[name='jenis_pertolongan']").change(function () {
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

                            <option selected disabled>Pilih Kota</option>  

                            `;
                    datas.forEach(function (data) {

                        kota.innerHTML += `

                                <option value="${data.id}">${data.name}</option>  

                                `;
                    })
                    $('input[name=provinsi]').val($('select#provinsi option:selected').text());
                }
            });
        })
        $('select#kota').on('change', function () {
            let provId = $(this).val();
            $.ajax({
                url: "{{url('/')}}/kec-kot-id",
                data: {
                    kota_id: $('select#kota').val()
                },
                type: "get",
                dataType: "json",
                success: function (datas) {
                    let kecamatan = document.getElementById('kecamatan');
                    kecamatan.innerHTML += `

                            <option selected disabled>Pilih kecamatan</option>  

                            `;
                    datas.forEach(function (data) {

                        kecamatan.innerHTML += `

                                <option value="${data.id}">${data.name}</option>  

                                `;
                    })
                    $('input[name=kota]').val($('select#kota option:selected').text());
                }

            });
        })
        $('select#kecamatan').on('change', function () {
            let provId = $(this).val();
            $.ajax({
                url: "{{url('/')}}/des-kec-id",
                data: {
                    kec_id: $('select#kecamatan').val()
                },
                type: "get",
                dataType: "json",
                success: function (datas) {
                    let desa = document.getElementById('desa');
                    desa.innerHTML += `

                            <option selected disabled>Pilih desa</option>  

                            `;
                    datas.forEach(function (data) {

                        desa.innerHTML += `

                                <option value="${data.id}">${data.name}</option>  

                                `;
                    })
                    $('input[name=kecamatan]').val($('select#kecamatan option:selected').text());
                }

            });
        })
        $('select#desa').on('change', function () {

            $('input[name=desa]').val($('select#desa option:selected').text());

        })
    </script>
      @include('layouts.dark_mode')
</body>

</html>
