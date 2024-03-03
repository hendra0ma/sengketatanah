  <!-- CoreUI and necessary plugins-->
</div>
  <script src="{{url('/')}}/core-ui/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <!--[if IE]><!-->
    <script src="{{url('/')}}/core-ui/vendors/@coreui/icons/js/svgxuse.min.js"></script>
    <!--<![endif]-->
    <!-- Plugins and scripts required by this view-->
    <script src="{{url('/')}}/core-ui/vendors/@coreui/chartjs/js/coreui-chartjs.bundle.js"></script>
    <script src="{{url('/')}}/core-ui/vendors/@coreui/utils/js/coreui-utils.js"></script>
    <script src="{{url('/')}}/core-ui/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> -->

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/b-2.2.3/datatables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });

    </script>
  </body>
</html>