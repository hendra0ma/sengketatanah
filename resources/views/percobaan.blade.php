<!doctype html>
<html>

<head>
    <title>Pinchzoom.js Demo</title>

    <!-- <link rel="stylesheet" href="style.css" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- <script type="text/javascript" src="https://manuelstofer.github.io/pinchzoom/dist/pinch-zoom.umd.js"></script> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <style>

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>


    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->

    <div class="modal fade" id="image-modal" tabindex="-1" aria-labelledby="image-modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content border-0" style="background:transparent">
                <div class="modal-body">
                    <img src="" style="width:100%;height:auto;" class="rounded-3" />
                </div>
            </div>
        </div>
    </div>



    <script>
        $('img.image-kunam').on('click', function() {
            let dataSrc = $(this).data('src');
            let image = $($('#image-modal').find('img'))
            image.attr('src', dataSrc);
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script type="text/javascript">
        var el = document.querySelector('img');
        new PinchZoom.default(el, {});
    </script>

</body>

</html>