<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>SIDPM</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link id="bootstrap-css" rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script> -->

    @livewireStyles
</head>

<body class="container-fluid" style="background-color: #ffffff;">
    <div class="row">
        <div class="col-sm-1 p-0">
            @include('layouts.sidebar')
        </div>
        <div class="col-sm p-0">
            @include('layouts.navbar')
            <div class="container-fluid p-0">
                @yield('content')
                {{isset($slot) ? $slot : null}}
            </div>
        </div>

    </div>
    @livewireScripts
</body>

</html>