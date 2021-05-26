<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Todo - Basic</title>

    <!-- Fonts -->

    @yield('css')
    
</head>
<body id="app-layout">
<div>
    @include('layouts.header')
</div>
<div>
    @yield('content')
</div>
<div>
    @include('layouts.footer')
</div>
<!-- JavaScripts -->

@yield('script')


</body>
</html>