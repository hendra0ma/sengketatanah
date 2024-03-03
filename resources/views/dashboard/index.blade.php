@extends('layouts.template-user.main')
@section('content')

<div class="container-fluid mt-3">
    
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    <div class="row g-0 p-2" id="tab">
                        <div class="col">
                            <button type="button"
                                class="tab btn btn-outline-primary btn-sm w-100 border-end-0 rounded-5 active"
                                data-id="1"
                                style="border-bottom-right-radius:0px! important;border-top-right-radius:0px! important">Korban</button>
                        </div>
                        <div class="col">
                            <button type="button"
                                class="tab btn btn-outline-primary rounded-0 btn-sm w-100"
                                data-id="2">Sponsor</button>
                        </div>
                        <div class="col">
                            <button type="button"
                                class="tab btn btn-outline-primary btn-sm w-100 border-start-0 rounded-5"
                                data-id="3"
                                style="border-bottom-left-radius:0px! important;border-top-left-radius:0px! important">Pengacara</button>
                        </div>
                    </div>
                </div>
                
                <div class="card-body">

                    <div class="tab-content active" data-content='1'>
                        <h3>Form Korban</h3>
                        <p>Masukan data sengketa Anda di sini dan pilih pertolongan yang anda butuhkan</p>
                        <hr>
                        <form method="post" action="{{route('utama.add_korban')}}"
                            enctype="multipart/form-data">
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
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <label class="form-label">Objek Sengketa</label>
                                            <select class="form-control rounded-0"
                                                aria-label="Default select example"
                                                name="objek_sengketa" required>
                                                <option value="Sengketa Pertanahan">Sengketa Pertanahan
                                                </option>
                                                <option value="Konflik Pertanahan">Konflik Pertanahan
                                                </option>
                                                <option value="Perkara Pertanahan">Perkara Pertanahan
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="mb-2">
                                            <label for="luas" class="form-label">Luas Tanah
                                                (m/ha)</label>
                                            <input type="text" class="form-control rounded-0" id="luas"
                                                placeholder="Masukkan Luas Tanah"
                                                aria-describedby="input-luas" name="luas" required>
                                            <div id="input-luas" class="form-text"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-2">
                                    <label for="lokasi" class="form-label">Lokasi</label>
                                    <input type="text" class="form-control rounded-0" id="lokasi"
                                        placeholder="Masukkan Lokasi" aria-describedby="input-lokasi"
                                        name="lokasi" required>
                                    <div id="input-lokasi" class="form-text"></div>
                                </div>
                                <div class="mb-2">
                                    <label for="kronologi" class="form-label">Kronologi</label>
                                    <textarea id="kronologi" class="form-control rounded-0"
                                        placeholder="Masukkan Kronologi / Unggah File"
                                        aria-describedby="input-kronologi" name="kronologi" cols="30"
                                        rows="10" required></textarea>
                                    <div id="input-kronologi" class="form-text"></div>
                                </div>
                                <div class="mb-2">
                                    <label for="file_kronologi" class="form-label">Unggah File Kronologi</label>
                                    <input class="file-input rounded-0" type="file" id="file_kronologi"
                                        name="file_kronologi" required>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Status Pelapor</label>
                                    <select class="form-control rounded-0"
                                        aria-label="Default select example" name="status_pelapor"
                                        required>
                                        <option value="Pemilik">Pemilik</option>
                                        <option value="Kuasa Pemilik">Kuasa Pemilik</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Pilih Jenis Pertolongan</label>
                                    <select class="form-control rounded-0"
                                        aria-label="Default select example" name="jenis_pertolongan"
                                        required>
                                        <option selected disabled>Pilih Pertolongan</option>
                                        <option value="sponsor">Sponsor</option>
                                        <option value="pengacara">Pengacara</option>
                                        <option value="pemerintah">Pemerintah</option>
                                    </select>
                                </div>

                                <div id="pengembalian_dana" class="alert alert-danger sponsor"
                                    role="alert">
                                    <strong>
                                        Saya membutuhkan bantuan pendanaan dari sponsor untuk
                                        menyelesaikan
                                        permasalahan sengketa tanah saya.
                                    </strong>
                                </div>
                                <div class="mb-2 pengacara">
                                    <label class="form-label">Pilih Tindakan Pengacara</label>
                                    <select class="form-control rounded-0"
                                        aria-label="Default select example" name="bantuan_pengacara"
                                        required>
                                        <option selected disabled>Pilih Bantuan Pengacara</option>
                                        <option value="konsultasi">Konsultasi</option>
                                        <option value="pendampingan">Pendampingan</option>
                                        <option value="penindakan">Penindakan</option>
                                        <option value="cek-dokumen">Cek Dokumen</option>
                                    </select>
                                </div>

                                <div class="mb-2 pengacara">
                                    <label for="anggaran_pengacara" class="form-label">Anggaran
                                        Pengacara</label>
                                    <div class="row">
                                        <div class="col">
                                            <input type="number" class="form-control rounded-0"
                                                id="anggaran_pengacara-s"
                                                placeholder="Anggaran mulai dari ..."
                                                aria-describedby="input-anggaran_pengacara-s"
                                                name="anggaran_pengacara-s">
                                        </div>
                                        <div class="col-1 text-center"
                                            style="width:4% !important; padding-right: 0px !important; padding-left: 0px !important">
                                            -
                                        </div>
                                        <div class="col">
                                            <input type="number" class="form-control rounded-0"
                                                id="anggaran_pengacara-e" placeholder="Sampai ..."
                                                aria-describedby="input-anggaran_pengacara-e"
                                                name="anggaran_pengacara-e">
                                        </div>
                                    </div>
                                </div>

                                <div id="pengembalian_dana" class="alert alert-danger pemerintah"
                                    role="alert">
                                    <strong>
                                        Saya hanya membutuhkan pertolongan agar permasalahan sengketa
                                        tanah
                                        saya diteruskan pada Pemerintah.
                                    </strong>
                                </div>

                                <div class="mb-2 sponsor">
                                    <label for="jumlah_dana" class="form-label">Jumlah Dana Sponsor</label>
                                    <input type="number" class="form-control rounded-0" id="jumlah_dana"
                                        placeholder="Sebutkan Jumlah Kebutuhan"
                                        aria-describedby="input-jumlah_dana" name="jumlah_dana">
                                    <div id="input-jumlah_dana" class="form-text"></div>
                                </div>

                                <div class="mb-2 sponsor">
                                    <label class="form-label">Pengembalian Dana Sponsor</label>
                                    <select class="form-control rounded-0"
                                        aria-label="Default select example"
                                        name="pengembalian_dana" required>
                                        <option selected disabled>Pilih Jenis Pengembalian</option>
                                        <option value="Bagi Hasil 70/30">Bagi Hasil 70/30*</option>
                                        <option value="Bagi Hasil 60/40">Bagi Hasil 60/40*</option>
                                        <option value="Bagi Hasil 50/50">Bagi Hasil 50/50*</option>
                                        <option value="Fee 50% Dari Pinjaman">Fee 50% Dari Pinjaman</option>
                                        <option value="Fee 75% Dari Pinjaman">Fee 75% Dari Pinjaman</option>
                                        <option value="Fee 100% Dari Pinjaman">Fee 100% Dari Pinjaman</option>
                                    </select>
                                    <small id="pengembalian_dana"
                                        class="form-text text-muted">Bagi
                                        hasil di
                                        rekomendasikan untuk kasus-kasus sengketa tanah yang berat.
                                        Tanda
                                        bintang(*) adalah pembagian untuk sponsor. </small>
                                </div>

                                <div class="mb-2 sponsor">
                                    <label class="form-label" for="jaminan_dana">Jaminan Dana
                                        Sponsor</label>
                                    <select class="form-control rounded-0"
                                        aria-label="Default select example" name="jaminan">
                                        <option selected disabled>Pilih Jaminan</option>
                                        <option value="ada">Ada Jaminan</option>
                                        <option value="tidak">Tidak Ada Jaminan</option>
                                    </select>
                                </div>

                                <div class="mb-2 jaminan_berupa">
                                    <label for="jaminan_berupa" class="form-label">Jaminan
                                        Berupa</label>

                                    <select class="form-control rounded-0" id="lokasi"
                                        placeholder="Masukkan Jaminan" aria-describedby="input-jaminan"
                                        name="jaminan_berupa">
                                        <option value="Sertifikat Tanah">Sertifikat Tanah</option>
                                        <option value="Sertifikat Rumah">Sertifikat Rumah</option>

                                    </select>
                                </div>

                                <div class="mb-2">
                                    <label for="ktp" class="form-label">Foto KTP</label>
                                    <input class="file-input rounded-0" type="file" id="ktp"
                                        name="foto_ktp" required>
                                </div>
                                <div class="mb-2">
                                    <label for="foto_lokasi" class="form-label">Foto Lokasi</label>
                                    <input class="file-input rounded-0" type="file" id="foto_lokasi"
                                        name="foto_lokasi" required>
                                </div>
                                <div class="mb-2">
                                    <label for="dokumenTanah" class="form-label">Foto Dokumen Hak
                                        Tanah</label>
                                    <input class="file-input rounded-0" type="file" id="dokumenTanah"
                                        name="dokumen_tanah" required>
                                </div>
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

                                <button type="submit"
                                    class="btn btn-success mt-3 ml-auto">Kirim</button>
                            </div>
                        </form>
                    </div>

                    <div class="tab-content" data-content='2'  style="display: none">
                        <h3>Form Sponsor</h3>
                        <p>Masukan data pembiayaan Anda </p>
                        <hr>
                        <form method="post" action="{{route('utama.add_sponsor')}}">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-2">
                                    <label class="form-label">Sumber Dana</label>
                                    <select class="form-control rounded-0"
                                        aria-label="Default select example" name="sumber_dana"
                                        required>
                                        <option selected disabled>Pilih Sumber Dana</option>
                                        <option value="sendiri">Pribadi</option>
                                        <option value="platform">Perusahaan</option>
                                        <option value="">Investor</option>
                                        <option value="">Lainnya</option>
                                </select>
                                </div>
                                <div class="mb-2">
                                    <label for="total" class="form-label">Total Pendanaan</label>
                                    <input type="total" class="form-control rounded-0" id="total"
                                        placeholder="Masukkan total pendanaan " aria-describedby="input-total"
                                        name="total_dana" required>
                                    <div id="input-total" class="form-text"></div>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Pengelolaan Dana</label>
                                    <select class="form-control rounded-0"
                                        aria-label="Default select example" name="pengelolaan_dana"
                                        required>
                                        <option selected disabled>Pilih Pengelolaan</option>
                                        <option value="sendiri">Dikelola Sendiri</option>
                                        <option value="platform">Dikelola Platform</option>
                                    </select>
                                </div>
                                <div id="pengembalian_dana"
                                    class="alert alert-danger pengelolaan-sendiri" role="alert">
                                    <strong>
                                        Anda akan mengelola dana Anda sendiri dan bebas memilih sengketa
                                        pertanahan yang paling baik untuk Anda selesaikan.
                                    </strong>
                                </div>
                                <div id="pengembalian_dana"
                                    class="alert alert-danger pengelolaan-platform" role="alert">
                                    <strong>
                                        Dikelola platform
                                        adalah pengelolaan sumber dana sponsor yang dijalankan oleh
                                        platform
                                        SENGKETA TANAH.
                                        Platform akan memberikan analisa seputar persengketaan tanah
                                        yang
                                        bisa diselesaikan dan
                                        menguntungkan. Semua persetujuan penggunaan dana tetap merupakan
                                        keputusan
                                        sponsor.
                                    </strong>
                                </div>
                                <div class="mb-2 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" style="text-align:justify"
                                        for="exampleCheck1">Dengan
                                        mengisi form ini saya
                                        menyatakan bahwa saya selaku pribadi dan atau badan usaha dan
                                        atau
                                        sebuah kelompok
                                        tertarik untuk membantu persoalan sengketa tanah sebagai
                                        Sponsor. Sumber pendanaan yang saya miliki bukan dari hasil kejahatan, korupsi atau pencucian uang. 
                                        Hal-hal lain
                                        yang timbul sebagai Sponsor, baik berupa biaya-biaya operasional
                                        korban, biaya pengacara dan biaya proses-proses
                                        hukum lainnya siap saya tanggung termasuk biaya fee platform
                                        atas
                                        keberhasilan persengketaan.</label>
                                </div>
                                <button type="submit"
                                    class="btn btn-success mt-3 ml-auto">Kirim</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-content" data-content='3' style="display: none">
                        <h3>Form Pengacara</h3>
                        <p>Masukan data Sertifikasi anda  </p>
                        
                        <hr>
                        <form method="post" action="#">
                            <div class="modal-body">
                    

                                <div class="mb-2">
                                    <label class="form-label">Anda Mewakili sebagai</label>
                                    <select class="form-control rounded-0"
                                        aria-label="Default select example" name="mewakili" required>
                                        <option value="pribadi">Pribadi</option>
                                        <option value="law-firm">Law Firm</option>
                                    </select>
                                </div>

                                <div class="mb-2 law-firm">
                                    <label for="nama-law" class="form-label">Nama Law Firm</label>
                                    <input type="text" placeholder="Masukkan Nama Law Firm Anda"
                                        class="form-control rounded-0" id="nama-law"
                                        aria-describedby="input-nama-law" name="nama-law">
                                    <div id="input-nama" class="form-text"></div>
                                </div>
                              
                            
                                <div class="mb-2">
                                    <label for="logo_lawfirm" class="form-label">Logo Law Firm/Foto
                                        Pribadi</label>
                                    <input class="file-input rounded-0" type="file" id="logo_lawfirm"
                                        name="logo_lawfirm" required>
                                </div>
                                <div class="mb-2">
                                    <label for="sertifikasi" class="form-label">Sertifikasi
                                        Pengacara</label>
                                    <input class="file-input rounded-0" type="file" id="sertifikasi"
                                        name="sertifikasi" required>
                                </div>
                                <div class="mb-2">
                                    <label for="tentang" class="form-label">Tentang Anda/Law Firm
                                        Anda</label>
                                    <textarea id="tentang" class="form-control rounded-0"
                                        placeholder="Ceritakan Profil Law Firm Anda"
                                        aria-describedby="input-tentang" name="tentang" cols="30" rows="10"
                                        required></textarea>
                                    <div id="input-tentang" class="form-text"></div>
                                </div>

                                <div class="mb-2 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" style="text-align:justify"
                                        for="exampleCheck1">Dengan
                                        mengisi form ini saya
                                        menyatakan bahwa saya mewakili pribadi/firma hukum tersebut
                                        menyatakan minat dan tertarik
                                        untuk membantu persoalan sengketa tanah sebagai kuasa hukum pada
                                        platform SENGKETA
                                        TANAH dan siap dikenakan biaya fee platform atas sebuah transaski
                                        jasa hukum yang terjadi di dalam platform.</label>
                                </div>
                                <button type="submit" class="btn btn-success mt-3 ml-auto">Kirim</button>
                            </div>
                        </form>
                    </div>

                    

                </div>

            </div>
        </div>
    </div>
</div>
@endsection