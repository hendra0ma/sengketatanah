@extends('layouts.app')

@section('content')
<div class="container" style="min-height:93vh">
    <div class="screen">
        <div class="screen__content">
            <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png" class="m-4" style="width: 50px" alt="">
            <form class="login" style="padding-top: 0px" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="login__field">
                    <i class="login__icon fas fa-user"></i>
                    <input id="email" type="email" placeholder="Email"
                        class="login__input @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="login__field">
                    <i class="login__icon fas fa-lock"></i>
                    <input id="password" type="password" placeholder="Password"
                        class="login__input @error('password') is-invalid @enderror" name="password" required
                        autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="login__field">
                    <i class="login__icon fas fa-lock"></i>
                    <div class="wrap-input100 validate-input">
                        <div class="otp-input-wrapper">
                            <input type="text" maxlength="4" pattern="[0-9]*" autocomplete="off" name="otp_kode">
                            <svg viewBox="0 0 240 1" xmlns="http://www.w3.org/2000/svg">
                                <line x1="0" y1="0" x2="240" y2="0" stroke="#3e3e3e" stroke-width="2"
                                    stroke-dasharray="44,22"></line>
                            </svg>
                            <button class="badge bg-dark mt-2"type="button"id="btn-get-otp">Get Aca</button>
                        </div>
                    </div> 
                </div>
     
    <script>
        $('button#btn-get-otp').on('click',function(){
            if($('input[name=email]').val() == ""){
                alert('Masukan Email terlebih dahulu')
            }else{
                $.ajax({
                    url : `{{url('/')}}/send-email`,
                  
                    type:"get",
                    data:{
                        "_token": "{{ csrf_token() }}",
                        email : $('input[name=email]').val(),

                    },
                    dataType:'json',
                    success:function(data){
                        console.log(data);
                    }

                })
            }
        });
    </script>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                <button type="submit" class="button login__submit mt-3">
                    <span class="button__text">Log In Now</span>
                    <i class="button__icon fas fa-chevron-right"></i>
                </button>
                <a href="{{url('/register')}}" class="button register mt-3">
                    <span class="button__text">Register Here</span>
                    <i class="button__icon fas fa-chevron-right"></i>
                </a>
                @if (Route::has('password.request'))
                <a class="btn btn-link text-dark" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif

            </form>
        </div>
    </div>
</div>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

<div class="card-body">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div> --}}

<script>

</script>


@endsection
