<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} | Farouter Admin</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin="">

    <link rel="stylesheet" href="{{ asset('vendor/farouter/tabler/css/tabler.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/farouter/nprogress/nprogress.css') }}">
</head>
<body class="antialiased">

    @yield('app')

    <script src="{{ asset('vendor/farouter/tabler/js/vendors/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('vendor/farouter/nprogress/nprogress.js') }}"></script>
    <script src="{{ asset('vendor/farouter/jquery.pjax.min.js') }}"></script>

    <script>
        $(function() {
            $(document).pjax('[data-pjax] a, a[data-pjax]', '#pjax-container', {
                timeout: 3000,
            });

            NProgress.configure({ showSpinner: false });

            $(document).on('pjax:send', function() {
                NProgress.start();
            });

            $(document).on('pjax:complete', function() {
                NProgress.done();
            });
        });
    </script>
</body>
</html>
