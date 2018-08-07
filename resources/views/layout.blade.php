<html>
<head>
    {{--<link href="/css/app.css" rel="stylesheet" type="text/css" media="all">--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div id="app">
    @yield('content')
    </div>
    <script src="{{ url('js/app.js') }}"></script>
</body>
</html>