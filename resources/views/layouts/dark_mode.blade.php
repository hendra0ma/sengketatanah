<style>
    svg>circle {
        --darkreader-inline-fill: #FFFFFF !important;
    }

    path {

        --darkreader-inline-fill: #61481c !important;
    }

    .bg-dark-mode {
        background-color: #1A1E29 !important;
        --darkreader-inline-bgcolor: #1A1E29 !important
    }
</style>


<script src="https://cdn.jsdelivr.net/npm/darkreader@4.9.58/darkreader.min.js"></script>

<script>
    $(document).ready(function() {

        if (localStorage.getItem('dark-mode') != undefined) {

            DarkReader.enable({
                brightness: 100,
                contrast: 90,
                sepia: 10
            });
            $('.bg-card-dark-mode').each(function(i, el) {
                el.classList.add('bg-dark-mode');
                // console.log(el)
            });
            setTimeout(function() {
                $('input#dark-mode').attr('checked', true);
            }, 1000);



        } else {
            DarkReader.disable()
            $('.bg-card-dark-mode').each(function(i, el) {
                el.classList.remove('bg-dark-mode');
            });
            setTimeout(function() {
                $('input#dark-mode').attr('checked', false);
            }, 1000);

        }
    });

    $('input#dark-mode').on('click', function() {
        const checkDark = $('input#dark-mode:checked').val()
        if (checkDark == "on") {
            DarkReader.enable({
                brightness: 100,
                contrast: 90,
                sepia: 10
            });
            localStorage.removeItem('dark-mode')
            setTimeout(function() {
                localStorage.setItem('dark-mode', "on");
                console.log(localStorage.getItem('dark-mode'));
                $('.bg-card-dark-mode').each(function(i, el) {
                    el.classList.add('bg-dark-mode');
                    // console.log(el)
                });
            }, 1000)
        } else {
            DarkReader.disable()

            localStorage.removeItem('dark-mode')
            setTimeout(function() {
                console.log(localStorage.getItem('dark-mode'));
                $('.bg-card-dark-mode').each(function(i, el) {
                    el.classList.remove('bg-dark-mode');
                    // console.log(el)
                });
            }, 1000)
        }
    });
    $(document).ready(function() {
        if (DarkReader.isEnabled()) {
            $('.bg-card-dark-mode').each(function(i, el) {
                el.classList.add('bg-dark-mode');
            });
            // $('.fa-solid.fa-bars').css()
        } else {
            $('.bg-card-dark-mode').each(function(i, el) {
                el.classList.remove('bg-dark-mode');
            });
        }
    });
</script>