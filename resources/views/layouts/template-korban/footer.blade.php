<div class="overlay toggle-icon"></div>
<!--end overlay-->
<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->
<footer class="page-footer">
    <p class="mb-0">Copyright © 2021. All right reserved.</p>
</footer>
</div>
<!-- Bootstrap JS -->
<script src="{{asset('/')}}rukada/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="{{asset('/')}}rukada/js/jquery.min.js"></script>
<script src="{{asset('/')}}rukada/plugins/simplebar/js/simplebar.min.js"></script>
<script src="{{asset('/')}}rukada/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="{{asset('/')}}rukada/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="{{asset('/')}}rukada/plugins/chartjs/js/Chart.min.js"></script>
<script src="{{asset('/')}}rukada/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="{{asset('/')}}rukada/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{asset('/')}}rukada/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="{{asset('/')}}rukada/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
<script src="{{asset('/')}}rukada/plugins/jquery-knob/excanvas.js"></script>
<script src="{{asset('/')}}rukada/plugins/jquery-knob/jquery.knob.js"></script>
<script>
    $(function () {
        $(".knob").knob();
    });
</script>
<script src="{{asset('/')}}rukada/js/index.js"></script>
<!--app JS-->
<script src="{{asset('/')}}rukada/js/app.js"></script>
<script>
    $(document).ready(function () {
        $("#show").click(function () {
            $("#alert").toggle();
        });
    });
</script>

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
<script>
    fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json`)
        .then(response => response.json())
        .then(provinces => {
            let provinsi = document.getElementById('provinsi');
            provinsi.innerHTML += `
            
                <option selected disabled>Pilih Provinsi</option>  
                
                `;
            provinces.forEach(function (data) {

                provinsi.innerHTML += `
                
                    <option value="${data.id}">${data.name}</option>  
                    
                    `;
            })
        });
    $('select#provinsi').on('change', function () {
        let provId = $(this).val();
        $.ajax({
            url: "{{url('/')}}/kota-prov-id",
            data: {
                prov_id: $('select#provinsi').val()
            },
            type: "get",
            dataType: "json",
            success: function (datas) {
                let kota = document.getElementById('kota');
                kota.innerHTML += `
                    
                        <option selected disabled>Pilih Kota</option>  
                        
                        `;
                datas.forEach(function (data) {

                    kota.innerHTML += `
                        
                            <option value="${data.id}">${data.name}</option>  
                            
                            `;
                })
                $('input[name=provinsi]').val($('select#provinsi option:selected').text());
            }
        });
    })
    $('select#kota').on('change', function () {
        let provId = $(this).val();
        $.ajax({
            url: "{{url('/')}}/kec-kot-id",
            data: {
                kota_id: $('select#kota').val()
            },
            type: "get",
            dataType: "json",
            success: function (datas) {
                let kecamatan = document.getElementById('kecamatan');
                kecamatan.innerHTML += `
                    
                        <option selected disabled>Pilih kecamatan</option>  
                        
                        `;
                datas.forEach(function (data) {

                    kecamatan.innerHTML += `
                        
                            <option value="${data.id}">${data.name}</option>  
                            
                            `;
                })
                $('input[name=kota]').val($('select#kota option:selected').text());
            }

        });
    })
    $('select#kecamatan').on('change', function () {
        let provId = $(this).val();
        $.ajax({
            url: "{{url('/')}}/des-kec-id",
            data: {
                kec_id: $('select#kecamatan').val()
            },
            type: "get",
            dataType: "json",
            success: function (datas) {
                let desa = document.getElementById('desa');
                desa.innerHTML += `
                    
                        <option selected disabled>Pilih desa</option>  
                        
                        `;
                datas.forEach(function (data) {

                    desa.innerHTML += `
                        
                            <option value="${data.id}">${data.name}</option>  
                            
                            `;
                })
                $('input[name=kecamatan]').val($('select#kecamatan option:selected').text());
            }

        });
    })
    $('select#desa').on('change', function () {

        $('input[name=desa]').val($('select#desa option:selected').text());

    })
</script>
</body>

</html>