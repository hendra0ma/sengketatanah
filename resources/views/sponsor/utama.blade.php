<?php 
use App\Models\Bid_Sengketa;
?>

@extends('layouts.template-sponsor.main')
@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{route('sponsor.add_sponsor')}}">
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
            </div>
        </div>
    </div>
</div>
@endsection