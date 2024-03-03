@extends('layouts.template-admin.main')
@section('content')

<div class="container-fluid mt-3">
    <div class="row justify-content-center">
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-gradient-primary">
                <div class="card-body justify-content-between align-items-start">
                    <div>
                        <div class="text-value-lg text-center">{{$jumlah_sengketa}}</div>
                        <div class="text-center">Data Sengketa Menunggu Verifikasi</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-gradient-dark">
                <div class="card-body justify-content-between align-items-start">
                    <div>
                        <div class="text-value-lg text-center">{{$jumlah_terverifikasi}}</div>
                        <div class="text-center">Data Sengketa Terverifikasi</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-gradient-warning">
                <div class="card-body justify-content-between align-items-start">
                    <div>
                        <div class="text-value-lg text-center">{{$jumlah_proses}}</div>
                        <div class="text-center">Data Sengketa Diproses</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-gradient-success">
                <div class="card-body justify-content-between align-items-start">
                    <div>
                        <div class="text-value-lg text-center">{{$jumlah_selesai}}</div>
                        <div class="text-center">Data Sengketa Selesai</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
