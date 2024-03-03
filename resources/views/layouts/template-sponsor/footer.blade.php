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
           <script>
            $(function () {
              var hidestuff = function () {
                  $(".korban, .sponsor, .pengacara").hide();
              }
      
              $("select[name='role']").change(function () {
                  hidestuff();
      
                  var value = $(this).val();
                  if (value == "korban") {
                      $(".korban").show();
                  }
                  if (value == "sponsor") {
                      $(".sponsor").show();
                  }
                  if (value == "pengacara") {
                      $(".pengacara").show();
                  }
              });
              hidestuff();
          });
      
          $(function () {
              var hidestuff = function () {
                  $(".jaminan_berupa").hide();
              }
      
              $("select[name='jaminan']").change(function () {
                  hidestuff();
      
                  var value = $(this).val();
                  if (value == "ada") {
                      $(".jaminan_berupa").show();
                  }
              });
              hidestuff();
          });
      
          $(function () {
              var hidestuff = function () {
                  $(".pengelolaan-platform, .pengelolaan-sendiri").hide();
              }
      
              $("select[name='pengelolaan_dana']").change(function () {
                  hidestuff();
      
                  var value = $(this).val();
                  if (value == "platform") {
                      $(".pengelolaan-platform").show();
                  }
                  if (value == "sendiri") {
                      $(".pengelolaan-sendiri").show();
                  }
              });
              hidestuff();
          });
      
          $(function () {
              var hidestuff = function () {
                  $(".law-firm").hide();
              }
      
              $("select[name='mewakili']").change(function () {
                  hidestuff();
      
                  var value = $(this).val();
                  if (value == "law-firm") {
                      $(".law-firm").show();
                  }
              });
              hidestuff();
          });
      
          $(function () {
              var hidestuff = function () {
                  $(".sponsor, .pengacara, .pemerintah").hide();
              }
      
              $("select[name='jenis_pertolongan']").change(function () {
                  hidestuff();
      
                  var value = $(this).val();
                  if (value == "sponsor") {
                      $(".sponsor").show();
                  }
                  if (value == "pengacara") {
                      $(".pengacara").show();
                  }
                  if (value == "pemerintah") {
                      $(".pemerintah").show();
                  }
              });
              hidestuff();
          });
      
          $(document).ready(function () {
              $(".tab").click(function () {
                  $(".tab").removeClass("active");
                  // $(".tab").addClass("active"); // instead of this do the below 
                  $(this).addClass("active");
              });
          });
      
          $("#tab .col button").click(function () {
              const id = $(this).data('id');
              if (!$(this).hasClass('active')) {
                  $("#tab .col button").removeClass('active');
                  $(this).addClass('active');
      
                  $('.tab-content').hide();
                  $(`[data-content=${id}]`).fadeIn();
              }
          });
          </script>
  </body>
</html>