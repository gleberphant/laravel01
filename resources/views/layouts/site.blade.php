
@include('layouts.head')
@include('layouts.nav')
@include('layouts.footer')

<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head>

@yield('head')

</head>



<body>

@yield('nav')

@yield('content')

@yield('footer')


</body>


<!-- Scripts -->
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>--}}

<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<script type="text/javascript" src="{{asset('lightbox/js/lightbox.js')}}"></script>

@toastr_js
@toastr_render

<script>
    $("#toggle").click(function () {
        $(this).toggleClass("on")
        $("#resize").toggleClass("active")
    })
</script>
</html>

