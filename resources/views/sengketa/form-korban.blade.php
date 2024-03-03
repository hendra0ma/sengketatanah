<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Laporan Sengketa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        
    <style>
        @media (min-width: 1400px){
            .container {
                max-width: 1000px;
            }
        }

        @media (min-width: 1200px){
            .container {
                max-width: 1000px;
            }
        }
    </style>
</head>

<body>
    <div class="container mt-3 mb-5" id="card2">

        <div class="row justify-content-center">
            
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center text-white bg-dark">
                        <h4>Form Laporan Sengketa Tanah</h4>
                    </div>
                    <div class="card-body bg-light">
                        <!-- <center>
        
                            <b class="text-center fw-bold fs-1">Keterangan Objek Sengketa</b>
        
                        </center> -->
                        <hr>
                        <div class="container">



                        </div>

                        <div class="row">
                            <form method="post" action="{{url('sengketa/send')}}" enctype="multipart/form-data">
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
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Pelapor</label>
                                    <input type="text" class="form-control" id="nama" aria-describedby="input-nama"
                                        name="nama" required>
                                    <div id="input-nama" class="form-text"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="Alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="Alamat" aria-describedby="input-Alamat"
                                        name="alamat" required>
                                    <div id="input-Alamat" class="form-text"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="no_hp" class="form-label">Nomor Hp</label>
                                    <input type="number" class="form-control" id="no_hp" aria-describedby="input-no_hp"
                                        name="no_hp" required>
                                    <div id="input-no_hp" class="form-text"></div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Objek Sengketa</label>
                                    <select class="form-select" aria-label="Default select example"
                                        name="objek_sengketa" required>
                                        <option value="Sengketa Pertanahan">Sengketa Pertanahan</option>
                                        <option value="Konflik Pertanahan">Konflik Pertanahan</option>
                                        <option value="Perkara Pertanahan">Perkara Pertanahan</option>
                                    </select>
                                </div>


                                <div class="mb-3">
                                    <label for="luas" class="form-label">Luas Tanah (meter/ha)</label>
                                    <input type="text" class="form-control" id="luas" aria-describedby="input-luas"
                                        name="luas" required>
                                    <div id="input-luas" class="form-text"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="lokasi" class="form-label">Lokasi</label>
                                    <input type="text" class="form-control" id="lokasi" aria-describedby="input-lokasi"
                                        name="lokasi" required>
                                    <div id="input-lokasi" class="form-text"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="kronologi" class="form-label">Kronologi</label>
                                    <textarea id="kronologi" class="form-control" aria-describedby="input-kronologi"
                                        name="kronologi" cols="30" rows="10" required></textarea>
                                    <div id="input-kronologi" class="form-text"></div>
                                </div>



                                <div class="mb-3">
                                    <label class="form-label">Status Pelapor</label>
                                    <select class="form-select" aria-label="Default select example"
                                        name="status_pelapor" required>
                                        <option value="Pemilik">Pemilik</option>
                                        <option value="Kuasa Pemilik">Kuasa Pemilik</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="ktp" class="form-label">Foto KTP</label>
                                    <input class="form-control" type="file" id="ktp" name="foto_ktp" required>
                                </div>
                                <div class="mb-3">
                                    <label for="foto_lokasi" class="form-label">Foto Lokasi</label>
                                    <input class="form-control" type="file" id="foto_lokasi" name="foto_lokasi"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="dokumenTanah" class="form-label">Foto Dokumen Hak Tanah</label>
                                    <input class="form-control" type="file" id="dokumenTanah" name="dokumen_tanah"
                                        required>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Dengan mengisi form ini saya
                                        menyatakan bahwa semua data yang diberikan benar adanya dan laporan ini tidak
                                        sedang dalam penanganan hukum pihak lain. Saya bersedia bekerja sama dengan
                                        penyelesai melalui platform SENGKETA TANAH untuk diselesaikan</label>
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-lg btn-dark">Kirim</button>
                                </div>
                            </form>
                            <div class="mb-3">
                                <h4 class="mt-3">Keterangan Sengketa</h4>

                                <ol>

                                    <li>
                                        <b>
                                            Sengketa pertanahan
                                        </b> , yaitu perselisihan tanah antara orang perseorangan, badan hukum, atau
                                        lembaga
                                        yang
                                        tidak berdampak luas.

                                    </li>
                                    <li>

                                        <b> Konflik pertanahan</b>, yaitu perselisihan tanah antara orang perseorangan,
                                        kelompok,
                                        golongan, organisasi, badan hukum, atau lembaga yang mempunyai kecenderungan
                                        atau sudah
                                        berdampak luas.

                                    </li>
                                    <li>
                                        <b> Perkara pertanahan</b>, yaitu perselisihan tanah yang penanganan dan
                                        penyelesaiannya
                                        melalui lembaga peradilan
                                    </li>

                                </ol>
                            </div>

                            <div class="card">
                                <div class="card-header text-center text-white bg-dark">
                                    <h4>Laporan Sengketa Masuk</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table" id="myTable">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Objek</th>
                                                    <th>Luas</th>
                                                    <th>Lokasi</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                @foreach($sengketa as $data)
                                                <tr>
                                                    <td>{{$i++}}</td>
                                                    <td>{{$data->nama}}</td>
                                                    <td>{{$data->objek_sengketa}}</td>
                                                    <td>{{$data->luas}} meter</td>
                                                    <td>{{$data->lokasi}}</td>
                                                    <td>
                                                        @if($data->status_laporan == 1)
                                                        <span class="badge bg-primary">Menunggu Verifikasi</span>
                                                        @elseif($data->status_laporan == 2)
                                                        <span class="badge bg-dark">Terverifikasi</span>
                                                        @elseif($data->status_laporan == 3)
                                                        <span class="badge bg-warning">Diproses</span>
                                                        @elseif($data->status_laporan == 4)
                                                        <span class="badge bg-success">Selesai</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
           @include('layouts.dark_mode')
</body>

</html>