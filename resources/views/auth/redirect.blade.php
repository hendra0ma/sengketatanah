<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirect</title>
    <link rel="stylesheet" href="{{url('/')}}/loading/css/style.css">
</head>
<body>
    <h2>Loading ..</h2>
    <div class="bar">
        <span class="full"></span>    
    </div>
    <span class="pourcentage">
        0%
    </span>
    <h3 class="text-uppercase">Welcome {{auth()->user()->name}}</h3>
    @if(auth()->user()->role == "utama")
    <a href="{{route('utama.index')}}">Klik Disini Untuk Melanjutkan</a>
    @endif
    @if(auth()->user()->role == "korban")
    <a href="{{route('korban.index')}}">Klik Disini Untuk Melanjutkan</a>
    @endif
    @if(auth()->user()->role == "sponsor")
    <a href="{{route('sponsor.index')}}">Klik Disini Untuk Melanjutkan</a>
    @endif
    @if(auth()->user()->role == "administrator")
    <a href="{{route('administrator.index')}}">Klik Disini Untuk Melanjutkan</a>
    @endif
    <br>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
        <button type="submit">logout disini</button>
    </form>
    <script src="{{url('/')}}/loading/js/jquery-3.1.1.min.js"></script>
    <script src="{{url('/')}}/loading/js/plugins.js"></script>
</body>

</html> 