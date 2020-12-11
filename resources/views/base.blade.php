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

    <script src="{{ asset('vendor/farouter/tabler/js/vendors/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('vendor/farouter/jquery.pjax.min.js') }}"></script>

    <script>
        $(function() {
            $(document).pjax('[data-pjax] a, a[data-pjax]', '#pjax-container', {
                timeout: 3000,
            });
        });
    </script>
</body>
</html>
