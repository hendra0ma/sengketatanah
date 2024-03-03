@extends('layouts.template-admin.main')
@section('content')
{{-- tst --}}
<div class="container-fluid mt-3 ">
    <div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card">
           <div class="card-header">
              Meeting Online
           </div>
           <div class="card-body">
              <table>
                <tr>
                    <td>Topic</td>
                    <td>:</td>
                    <td>{{$zoomlink->topic}}</td>
                </tr>
                <tr>
                    <td>Password </td>
                    <td>:</td>
                    <td>{{$zoomlink->Password}}</td>
                </tr>
                <tr>
                    <td>Start_Time </td>
                    <td>:</td>
                    <td>{{$zoomlink->start_time}}</td>
                </tr>
                <tr>
                    <td>Time Zone </td>
                    <td>:</td>
                    <td>{{$zoomlink->timezone}}</td>
                </tr>
                <tr>
                    <td>Duration </td>
                    <td>:</td>
                    <td>{{$zoomlink->duration}}</td>
                </tr>
              </table>
              <form class="form-group" data-copy=true>
                <div class="input-group col-m-12 mb-3">
                  <label class="col-sm-1 col-form-label">Join Urls</label>
                  <input type="text" class="form-control" readonly value="{{$zoomlink->start_url}}">
                  <div class="input-group-append">
                    <span class="input-group-text buttons2"><button type="submit" class="button2 ">Copy</button></span>
                  </div>
                </div>
              </form>
           </div>
        </div>
    </div>
    </div>
</div>

<script>
    // Select on pressing COPY
var copybutton = document.querySelectorAll("[data-copy]");
for (var i = 0; i < copybutton.length; i++) {
  var el = copybutton[i];
  el.addEventListener("submit", function(e) {
    e.preventDefault();
    var text = e.target.querySelector('input[type="text"]').select();
    document.execCommand("copy");
  });
}

// Select all text when pressing inside text field
var els_selectAll = document.querySelectorAll("[data-click-select-all]");
for (var i = 0; i < els_selectAll.length; i++) {
  var el = els_selectAll[i];
  el.addEventListener("click", function(e) {
    e.target.select();
  });
}

</script>
@endsection