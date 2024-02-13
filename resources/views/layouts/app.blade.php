<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My website - @yield('title')</title>
</head>

<body>
    @include('partials.navigation')
    @yield('content')
</body>

</html>