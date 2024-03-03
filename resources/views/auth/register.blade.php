@extends('layouts.app')

@section('content')
<style>
    .screen {
        height: 930px !important;
    }

    .login__field {
        padding: 10px 0px
    }

    .login__icon {
        top: 23px
    }

    .screen__background__shape1 {
        top: -5px;
        right: 100px;
        height: 745px;
        width: 605px;
        background: #fff;
        border-radius: 0 72px 0 0;
    }
</style>
<div class="container pt-5 pb-5">
    <div class="screen">
        <div class="screen__content">
            <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png" class="m-4" style="width: 50px; margin-bottom: 0px !important" alt="">
            <form class="login" style="padding-top: 0px" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="login__field">
                    <i class="login__icon fas fa-user"></i>
                    <input id="name" type="text" placeholder="Nama" class="login__input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="login__field">
                    <i class="login__icon fas fa-envelope"></i>
                    <input id="email" type="email" placeholder="Email" class="login__input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="login__field">
                    <select id="provinsi" class="form-select login__input rounded-0" style="border-right:0px; border-left:0px; border-top:0px; " aria-label="Default select example">

                    </select>
                </div>

                <div class="login__field">
                    <select id="kota" class="form-select login__input rounded-0" style="border-right:0px; border-left:0px; border-top:0px; " aria-label="Default select example">
                        <option selected disabled>Pilih Kota</option>
                    </select>
                </div>
                <div class="login__field">
                    <select id="kecamatan" class="form-select login__input rounded-0" style="border-right:0px; border-left:0px; border-top:0px; " aria-label="Default select example">
                        <option selected disabled>Pilih kecamatan</option>
                    </select>
                </div>
                <div class="login__field">
                    <select id="desa" class="form-select login__input rounded-0" style="border-right:0px; border-left:0px; border-top:0px; " aria-label="Default select example">
                        <option selected disabled>Pilih Desa</option>
                    </select>
                </div>


                <input type="hidden" name="provinsi" value="">
                <input type="hidden" name="kota" value="">
                <input type="hidden" name="kecamatan" value="">
                <input type="hidden" name="desa" value="">





                <script>
                    fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json`)
                        .then(response => response.json())
                        .then(provinces => {
                            let provinsi = document.getElementById('provinsi');
                            provinsi.innerHTML += `
                        
                            <option selected disabled>Pilih Provinsi</option>  
                            
                            `;
                            provinces.forEach(function(data) {

                                provinsi.innerHTML += `
                            
                                <option value="${data.id}">${data.name}</option>  
                                
                                `;
                            })
                        });
                    $('select#provinsi').on('change', function() {
                        let provId = $(this).val();
                        $.ajax({
                            url: "{{url('/')}}/kota-prov-id",
                            data: {
                                prov_id: $('select#provinsi').val()
                            },
                            type: "get",
                            dataType: "json",
                            success: function(datas) {
                                let kota = document.getElementById('kota');
                                kota.innerHTML += `
                                
                                    <option selected disabled>Pilih Kota</option>  
                                    
                                    `;
                                datas.forEach(function(data) {

                                    kota.innerHTML += `
                                    
                                        <option value="${data.id}">${data.name}</option>  
                                        
                                        `;
                                })
                                $('input[name=provinsi]').val($('select#provinsi option:selected').text());
                            }
                        });
                    })
                    $('select#kota').on('change', function() {
                        let provId = $(this).val();
                        $.ajax({
                            url: "{{url('/')}}/kec-kot-id",
                            data: {
                                kota_id: $('select#kota').val()
                            },
                            type: "get",
                            dataType: "json",
                            success: function(datas) {
                                let kecamatan = document.getElementById('kecamatan');
                                kecamatan.innerHTML += `
                                
                                    <option selected disabled>Pilih kecamatan</option>  
                                    
                                    `;
                                datas.forEach(function(data) {

                                    kecamatan.innerHTML += `
                                    
                                        <option value="${data.id}">${data.name}</option>  
                                        
                                        `;
                                })
                                $('input[name=kota]').val($('select#kota option:selected').text());
                            }

                        });
                    })
                    $('select#kecamatan').on('change', function() {
                        let provId = $(this).val();
                        $.ajax({
                            url: "{{url('/')}}/des-kec-id",
                            data: {
                                kec_id: $('select#kecamatan').val()
                            },
                            type: "get",
                            dataType: "json",
                            success: function(datas) {
                                let desa = document.getElementById('desa');
                                desa.innerHTML += `
                                
                                    <option selected disabled>Pilih desa</option>  
                                    
                                    `;
                                datas.forEach(function(data) {

                                    desa.innerHTML += `
                                    
                                        <option value="${data.id}">${data.name}</option>  
                                        
                                        `;
                                })
                                $('input[name=kecamatan]').val($('select#kecamatan option:selected').text());
                            }

                        });
                    })
                    $('select#desa').on('change', function() {

                        $('input[name=desa]').val($('select#desa option:selected').text());

                    })
                </script>


                <div class="login__field">
                    <i class="login__icon fas fa-envelope"></i>
                    <input id="address" type="address" placeholder="Address" class="login__input @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">
                    @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="login__field">
                    <i class="login__icon fas fa-envelope"></i>
                    <input id="phone" type="phone" placeholder="Phone" class="login__input @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="login__field">
                    <select id="piih_layanan" class="form-select login__input rounded-0" style="border-right:0px; border-left:0px; border-top:0px; " aria-label="Default select example">
                        <option selected disabled>Pilih Layanan</option>
                        <option value="st">Sengketa Tanah</option>
                        <option value="jbl">Jual Beli Lahan</option>
                        <option value="ksl">Kerja Sama lahan</option>
                        <option value="ll">Lelang Lahan</option>
                    </select>
                </div>
                <div class="login__field" id="st">
                    <select name="role" class="form-select login__input rounded-0" style="border-right:0px; border-left:0px; border-top:0px; font-weight:700" aria-label="Default select example">
                        <option disabled selected>Pilih Role</option>
                        <option value="korban">Korban Sengketa</option>
                        <option value="sponsor">Sponsor</option>
                        <option value="pengacara">Pengacara</option>
                    </select>
                </div>

                <div class="login__field" id="jbl" style="display:none">
                    <select name="role" class="form-select login__input rounded-0" style="border-right:0px; border-left:0px; border-top:0px; font-weight:700" aria-label="Default select example">
                        <option disabled selected>Pilih Role</option>
                        <option value="penjual">Penjual</option>
                        <option value="pembeli">Pembeli</option>
                    </select>
                </div>
                <div class="login__field" id="ll" style="display:none">
                    <select name="role" class="form-select login__input rounded-0" style="border-right:0px; border-left:0px; border-top:0px; font-weight:700" aria-label="Default select example">
                        <option disabled selected>Pilih Role</option>
                        <option value="pemilik_lahan">Pemilik Lahan</option>
                        <option value="pelelang_lahan">Pelelang Lahan</option>
                    </select>
                </div>
                <div class="login__field" id="ksl" style="display:none">
                    <select name="role" class="form-select login__input rounded-0" style="border-right:0px; border-left:0px; border-top:0px; font-weight:700" aria-label="Default select example">
                        <option disabled selected>Pilih Role</option>
                        <option value="pemilik_lahan">Pemilik Lahan</option>
                        <option value="pengguna_lahan">Pengguna Lahan</option>
                    </select>
                </div>
                <script>
                    $('#piih_layanan').on('change', function(e) {
                        e.preventDefault();
                        let val = $(this).find('option:selected').val();
                        let idL = ['jbl', 'ksl', 'st', 'll'];
                        idL.forEach(function(id) {
                            if (id == val) {
                                $('#' + val).show();
                                // console.log($('#'+val))
                            } else {
                                $('#' + id).hide()
                            }
                        });


                    });
                </script>

                <div class="login__field">
                    <i class="login__icon fas fa-lock"></i>
                    <input id="password" type="password" placeholder="Password" class="login__input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="login__field">
                    <i class="login__icon fas fa-lock"></i>
                    <input id="password-confirm" type="password" placeholder="Confirm Password" class="login__input" name="password_confirmation" required autocomplete="new-password">
                </div>
                <button class="button login__submit mt-2">
                    <span class="button__text">Register Now</span>
                    <i class="button__icon fas fa-chevron-right"></i>
                </button>
                <a href="{{url('/login')}}" class="button register mt-3">
                    <span class="button__text">Login Here</span>
                    <i class="button__icon fas fa-chevron-right"></i>
                </a>
            </form>
        </div>
    </div>
</div>

{{--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

<div class="card-body">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="row mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>
--}}
@include('layouts.dark_mode')
@endsection