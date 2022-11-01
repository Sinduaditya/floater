<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ url('frontend/styles/main.scss') }}" />
    <link rel="stylesheet" href="{{ url('frontend/libraries/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/styles/main.css') }}" />


</head>

<body>
    @yield('content')

    @include('includes.script')
</body>

</html>
