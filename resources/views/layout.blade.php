<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <link rel="stylesheet" href="{{ asset('css/foundation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('pickadate/lib/themes/default.css') }}">
    <link rel="stylesheet" href="{{ asset('pickadate/lib/themes/default.date.css') }}">
    <meta class="foundation-mq">
</head>
<body>
    @include('partials/navigation')

    @yield('content')

    @include('partials/footer')


    <script src="{{ asset('js/vendor/jquery.js') }}"></script>
    <script>
        $(document).foundation();
    </script>
    <script src="{{ asset('js/vendor/what-input.js') }}"></script>
    <script src="{{ asset('js/vendor/foundation.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('pickadate/lib/picker.js') }}"></script>
    <script src="{{ asset('pickadate/lib/picker.date.js') }}"></script>
    <script>
        $('.datepicker').pickadate(
        { 
            format: 'dd-mm-yyyy',
            formatSubmit: 'yyyy-mm-dd' 
        }
        );
    </script>
</body>
</html>