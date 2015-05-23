<!--[if lt IE 9]>
<script src="{{ asset('resources/assets/js/html5shiv.js') }}"></script>
<script src="{{ asset('resources/assets/js/respond.min.js') }}"></script>
<![endif]-->

<script src="{{ asset('resources/assets/js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('resources/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('resources/assets/js/chart.min.js') }}"></script>
<script src="{{ asset('resources/assets/js/chart-data.js') }}"></script>
<script src="{{ asset('resources/assets/js/easypiechart.js') }}"></script>
<script src="{{ asset('resources/assets/js/easypiechart-data.js') }}"></script>
<script src="{{ asset('resources/assets/js/bootstrap-datepicker.js') }}"></script>
<script type="text/javascript">
    $('#calendar').datepicker({});

    !function ($) {
        $(document).on("click", "ul.nav li.parent > a > span.icon", function () {
            $(this).find('em:first').toggleClass("glyphicon-minus");
        });
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
</script>