
  <body class="c-app">
    <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
      <div class="c-sidebar-brand d-lg-down-none">
        <img class="c-sidebar-brand-minimized m-3" src="{{asset('/')}}uploads/sengketa-logo.png" alt="" width="150px">
        <img class="c-sidebar-brand-full m-3" src="{{asset('/')}}uploads/sengketa_tanah.png" alt="" width="150px">
      </div>
      <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{url('/administrator')}}">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="{{url('/')}}/core-ui/vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
            </svg> Dashboard</a></li>
        <li class="c-sidebar-nav-title">News</li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{url('/administrator/add-news')}}">
            <svg class="c-sidebar-nav-icon">
            <use xlink:href="{{url('/')}}/core-ui/vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
            </svg> Add News</a></li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{url('/administrator/all-news')}}">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="{{url('/')}}/core-ui/vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
            </svg> All News</a></li>
        <li class="c-sidebar-nav-title">Sengketa Tanah</li>
       
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{url('/administrator/sengketa-tanah')}}">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="{{url('/')}}/core-ui/vendors/@coreui/icons/svg/free.svg#cil-chart-pie"></use>
            </svg> Sengketa Tanah</a></li>
            {{-- <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('administrator.hasil-bid-sengketa')}}">
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="{{url('/')}}/core-ui/vendors/@coreui/icons/svg/free.svg#cil-chart-pie"></use>
              </svg>Bid Sengketa Tanah</a></li>
          --}}
      
      </ul>
      <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
    </div>