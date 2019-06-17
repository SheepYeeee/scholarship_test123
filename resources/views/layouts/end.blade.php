<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    @section('head')
        @include('partials.endhead')
    @show
</head>
<body>
    @include('partials.oldnav')  
    @yield('content')
</body>
</html>