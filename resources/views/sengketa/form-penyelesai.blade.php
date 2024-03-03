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

                <center>
                    <img src="{{url('/')}}/images/salaman.jpeg" class="img-fluid" width="550px">
                </center>
                <div class="card mt-2">
                    <div class="card-header text-center text-white bg-success">
                        <h4>Form Penyelesai</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="#">

                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
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
                                <label for="no_hp" class="form-label">Email</label>
                                <input type="email" class="form-control" id="no_hp" aria-describedby="input-no_hp"
                                    name="no_hp" required>
                                <div id="input-no_hp" class="form-text"></div>
                            </div>



                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Dengan mengisi form ini saya
                                    menyatakan bahwa saya selaku pribadi dan atau badan usaha dan atau sebuah kelompok
                                    tertarik untuk membantu persoalan sengketa tanah sebagai penyelesai. Hal-hal lain
                                    yang timbul sebagai penyelesai, baik berupa biaya-biaya operasional termasuk biaya
                                    platform atas keberhasilan dan atau kebutuhan pengacara dan biaya proses-proses
                                    hukum lainnya siap saya tanggung.</label>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-lg btn-dark">Kirim</button>
                            </div>
                        </form>
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