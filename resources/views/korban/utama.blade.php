<?php 
use App\Models\Bid_Sengketa;
?>


@extends('layouts.template-korban.main')
@section('content')

<div class="page-wrapper">
    <div class="page-content">

        <div class="container mt-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Formulir Sengketa Tanah</h4>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{route('korban.add_korban')}}" enctype="multipart/form-data">
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
                                                    aria-label="Default select example" name="objek_sengketa" required>
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
                                                    placeholder="Masukkan Luas Tanah" aria-describedby="input-luas"
                                                    name="luas" required>
                                                <div id="input-luas" class="form-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <label for="provinsi" class="form-label">Provinsi</label>
                                        <select id="provinsi" class="form-control rounded-0"
                                            aria-label="Default select example">
                                        </select>
                                    </div>

                                    <div class="mb-2">
                                        <label for="kota" class="form-label">Pilih Kota</label>
                                        <select id="kota" class="form-control rounded-0" aria-label="Default select example">
                                           <option selected disabled>Pilih Kota</option>
                                        </select>
                                    </div>
                                    <div class="mb-2">
                                        <label for="kecamatan" class="form-label">Pilih Kecamatan</label>
                                        <select id="kecamatan" class="form-control rounded-0"
                                            aria-label="Default select example">
                                            <option selected disabled>Pilih kecamatan</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="desa" class="form-label">Pilih Desa</label>
                                        <select id="desa" class="form-control rounded-0"
                                            aria-label="Default select example">
                                            <option selected disabled>Pilih Desa</option>
                                        </select>
                                    </div>


                                    <input type="hidden" name="provinsi" value="">
                                    <input type="hidden" name="kota" value="">
                                    <input type="hidden" name="kecamatan" value="">
                                    <input type="hidden" name="desa" value="">





                                    <div class="mb-2">
                                        <label for="kronologi" class="form-label">Kronologi</label>
                                        <textarea id="kronologi" class="form-control rounded-0"
                                            placeholder="Masukkan Kronologi / Unggah File Kronologi "
                                            aria-describedby="input-kronologi" name="kronologi" cols="30" rows="10"
                                            required></textarea>
                                        <div id="input-kronologi" class="form-text"></div>
                                    </div>
                                    <div class="mb-2">
                                        <label for="file_kronologi" class="form-label">Unggah File Kronologi</label>
                                        <input class="file-input rounded-0" type="file" id="file_kronologi"
                                            name="file_kronologi">
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Status Pelapor</label>
                                        <select class="form-control rounded-0" aria-label="Default select example"
                                            name="status_pelapor" required>
                                            <option selected>Pilih Status</option>
                                            <option value="Pemilik">Pemilik</option>
                                            <option value="Kuasa Pemilik">Kuasa Pemilik</option>
                                        </select>
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Pilih Jenis Pertolongan</label>
                                        <select class="form-control rounded-0" aria-label="Default select example"
                                            name="jenis_pertolongan" required>
                                            <option selected disabled>Pilih Pertolongan</option>
                                            <option value="sponsor">Sponsor</option>
                                            <option value="pengacara">Pengacara</option>
                                            <option value="pemerintah">Pemerintah</option>
                                        </select>
                                    </div>

                                    <div id="pengembalian_dana" class="alert alert-danger sponsor" role="alert">
                                        <strong>
                                            Saya membutuhkan bantuan pendanaan dari sponsor untuk
                                            menyelesaikan
                                            permasalahan sengketa tanah saya.
                                        </strong>
                                    </div>
                                    <div class="mb-2 pengacara">
                                        <label class="form-label">Pilih Tindakan Pengacara</label>
                                        <select class="form-control rounded-0" aria-label="Default select example"
                                            name="bantuan_pengacara" required>
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
                                                    id="anggaran_pengacara-s" placeholder="Anggaran mulai dari ..."
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

                                    <div id="pengembalian_dana" class="alert alert-danger pemerintah" role="alert">
                                        <strong>
                                            Saya hanya membutuhkan pertolongan agar permasalahan sengketa
                                            tanah
                                            saya diteruskan pada Pemerintah.
                                        </strong>
                                    </div>

                                    <div class="mb-2 sponsor">
                                        <label for="jumlah_dana" class="form-label">Jumlah Dana Sponsor</label>
                                        <input type="number" class="form-control rounded-0" id="jumlah_dana"
                                            placeholder="Sebutkan Jumlah Kebutuhan" aria-describedby="input-jumlah_dana"
                                            name="jumlah_dana">
                                        <div id="input-jumlah_dana" class="form-text"></div>
                                    </div>


                                    <div class="mb-2 sponsor">
                                        <label class="form-label" for="jaminan_dana">Jaminan Dana
                                            Sponsor</label>
                                        <select class="form-control rounded-0" aria-label="Default select example"
                                            name="jaminan">
                                            <option selected disabled>Pilih Jaminan</option>
                                            <option value="ada">Ada Jaminan</option>
                                            <option value="tidak">Tidak Ada Jaminan</option>
                                        </select>
                                    </div>

                                     <div class="mb-2 jaminan_berupa">
                                        <label for="jaminan_berupa" class="form-label">Jaminan Berupa</label>
                                        <select class="form-control rounded-0" id="lokasi"
                                            placeholder="Masukkan Jaminan" aria-describedby="input-jaminan"
                                            name="jaminan_berupa">
                                            <option value="Sertifikat Tanah">Sertifikat Tanah</option>
                                            <option value="Sertifikat Rumah">Sertifikat Rumah</option>
                                        </select>
                                    </div>
                                    
                                    <div class="mb-2 sponsor">
                                        <label class="form-label">Pengembalian Dana Sponsor</label>
                                        <select class="form-control rounded-0" aria-label="Default select example"
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

                                   

                                    {{-- <div class="mb-2">
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
                        </div> --}}
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

                                    <button type="submit" class="btn btn-success mt-3 ml-auto">Kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection