<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movie CRUD</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="{{ asset('plugins/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/DataTables/datatables.min.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/DataTables/Buttons-1.6.1/css/buttons.dataTables.min.css') }}" rel="stylesheet">

        <script src="{{ asset('plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('plugins/jquery/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ asset('plugins/DataTables/datatables.min.js') }}"></script>
        <!-- <script src="{{ asset('plugins/DataTables/DataTables-1.10.20/js/jquery.dataTables.min.js') }}"></script> -->
        
    </head>
    <body>
        @yield('content')
    </body>
    @yield('script')
</html>
