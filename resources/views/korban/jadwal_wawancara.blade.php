
@extends('layouts.template-korban.main')
@section('content')

<div class="page-wrapper">
    <div class="page-content">
       
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h6 class="mt-2">  Pilih Jadwal Wawancara Yang Anda Sukai</h6>
                </div>
                <div class="card-body ">
                     <div class="row justify-content-center">
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                    <img src="{{asset('/')}}images/icon/podcast.png" class="img-fluid" alt="">
                                </div>
                                <div class="card-footer">
                                    <center> OFFLINE</center>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                    <img src="{{asset('/')}}images/icon/zoom.png" class="img-fluid" alt="">
                                </div>
                                <div class="card-footer">
                                    <center> ONLINE ZOOM</center>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection