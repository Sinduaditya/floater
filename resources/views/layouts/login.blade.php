<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>

    @include('includes.admin.style')


</head>

<body style="background-color: #071C4D;>
    @yield('content')

    @include('includes.admin.script')
</body>

</html>
