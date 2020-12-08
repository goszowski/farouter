<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} | Farouter Admin</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin="">

    <link rel="stylesheet" href="{{ asset('vendor/farouter/tabler/css/tabler.css') }}">
</head>
<body class="antialiased">

    @yield('app')

</body>
</html>
