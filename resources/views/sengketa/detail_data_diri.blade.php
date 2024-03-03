<div class="container mt-5">
    <div class="card text-center border-0 shadow-sm bg-light">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-6">
                    <h4 class="mb-0" style="font-size: 18px">Kurang dari setahun</h4>
                    <p class="mb-0" style="font-size: 14px">Dengan TanahMerdeka.id</p>
                </div>
                <div class="col-6">
                    <h4 class="mb-0">3</h4>
                    <p class="mb-0">Portofolio Data Pengukuran</p>
                </div>

            </div>
        </div>
    </div>
    
    @if($req->jenis_petugas == "Appraisal")
    <div class="card text-left mt-3 border-0 shadow-sm bg-light">
        <div class="card-body">
            <div class="row">

                <div class="col">
                    <div class="row">
                        <div class="col-12">
                            <h5>Appraisal Oleh {{$req->name}}</h5>
                        </div>
                        <div class="col-12 mt-3">
                            <p style="font-size: 16px" class="mb-0">Portofolio Appraisal</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row" style="max-height: 200px; overflow-x: auto;">
                        <div class="col-lg-12 mb-4">

                            Appraisal di Surur-Sukodomo

                            <p class="mb-0">Appraisal Lahan Milik Bapak Santoso</p>
                        </div>
                        <div class="col-lg-12 mb-4">

                            Appraisal di GEMCity-AKR LAND

                            <p class="mb-0">Appraisal Lahan Milik Ibu Sukatini</p>
                        </div>
                        <div class="col-lg-12 mb-4">

                            Appraisal di Gembong-surabaya

                            <p class="mb-0">Appraisal Lahan Milik Bapak Robert</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    @endif

    @if($req->jenis_petugas == "Lawyer")
    <div class="card text-left mt-3 border-0 shadow-sm bg-light">
        <div class="card-body">
            <div class="row">

                <div class="col">
                    <div class="row">
                        <div class="col-12">
                            <h5>History Pengacara Oleh {{$req->name}}</h5>
                        </div>
                        <div class="col-12 mt-3">
                            <p style="font-size: 16px" class="mb-0">Portofolio Pengacara</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row" style="max-height: 200px; overflow-x: auto;">
                        <div class="col-lg-12 mb-4">

                            Kuasa Hukum Walhi (Eknas)

                            <p class="mb-0">Menggugat Lumpur Lapindo</p>
                        </div>
                        <div class="col-lg-12 mb-4">

                            Kuasa Hukum Jack Walker 

                            <p class="mb-0">Kasus Narkotika 5 Kg</p>
                        </div>
                        <div class="col-lg-12 mb-4">

                            Kuasa Hukum Venti

                            <p class="mb-0">Kasus Sengketa Tanah</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    @endif

    @if($req->jenis_petugas == "PPAT")
    <div class="card text-left mt-3 border-0 shadow-sm bg-light">
        <div class="card-body">
            <div class="row">

                <div class="col">
                    <div class="row">
                        <div class="col-12">
                            <h5>PPAT Oleh {{$req->name}}</h5>
                        </div>
                        <div class="col-12 mt-3">
                            <p style="font-size: 16px" class="mb-0">Portofolio PPAT</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row" style="max-height: 200px; overflow-x: auto;">
                        <div class="col-lg-12 mb-4">
                    
                            Pembuatan Surat Tanah di Surur-Sukodomo
                    
                            <p class="mb-0">Surat Tanah Milik Bapak Santoso</p>
                        </div>
                        <div class="col-lg-12 mb-4">
                    
                            Pembuatan Surat Tanah di GEMCity-AKR LAND
                    
                            <p class="mb-0">Surat Tanah Milik Ibu Sukatini</p>
                        </div>
                        <div class="col-lg-12 mb-4">
                    
                            Pembuatan Surat Tanah di Gembong-surabaya
                    
                            <p class="mb-0">Surat Tanah Milik Bapak Robert</p>
                        </div>
                    
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endif

    @if($req->jenis_petugas == "Notaris")
    <div class="card text-left mt-3 border-0 shadow-sm bg-light">
        <div class="card-body">
            <div class="row">

                <div class="col">
                    <div class="row">
                        <div class="col-12">
                            <h5>Notaris Oleh {{$req->name}}</h5>
                        </div>
                        <div class="col-12 mt-3">
                            <p style="font-size: 16px" class="mb-0">Portofolio Notaris</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row" style="max-height: 200px; overflow-x: auto;">
                        <div class="col-lg-12 mb-4">
                    
                            Pembuatan AKta di Surur-Sukodomo
                    
                            <p class="mb-0">Pembuatan akta Milik Bapak Santoso</p>
                        </div>
                        <div class="col-lg-12 mb-4">
                    
                            Pembuatan AKta di GEMCity-AKR LAND
                    
                            <p class="mb-0">Pembuatan akta Milik Ibu Sukatini</p>
                        </div>
                        <div class="col-lg-12 mb-4">
                    
                            Pembuatan AKta di Gembong-surabaya
                    
                            <p class="mb-0">Pembuatan akta Milik Bapak Robert</p>
                        </div>
                    
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endif

    @if($req->jenis_petugas == "Petugas Ukur")
    <div class="card text-left mt-3 border-0 shadow-sm bg-light">
        <div class="card-body">
            <div class="row">

                <div class="col">
                    <div class="row">
                        <div class="col-12">
                            <h5>Lokasi Pengukuran Oleh {{$req->name}}</h5>
                        </div>
                        <div class="col-12 mt-3">
                            <p style="font-size: 16px" class="mb-0">Portofolio Pengukuran</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row" style="max-height: 200px; overflow-x: auto;">
                        <div class="col-lg-12 mb-4">

                            Pengukuran di Surur-Sukodomo

                            <p class="mb-0">Luas Lahan 2.5Ha</p>
                        </div>
                        <div class="col-lg-12 mb-4">

                            Pengukuran di GEMCity-AKR LAND

                            <p class="mb-0">Luas Lahan 800Ha</p>
                        </div>
                        <div class="col-lg-12 mb-4">

                            Pengukuran di Gembong-surabaya

                            <p class="mb-0">Luas Lahan 3.1Ha</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    @endif

    <div class="card mt-4">
        <div class="card-body">
            <div id="map" style="height: 400px;width:100%"></div>
        </div>
    </div>
</div>

<script>
    var map = L.map('map').setView([-7.87699, 112.53426], 12);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
</script>