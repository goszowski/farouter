<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} | Farouter Admin</title>

    <link rel="stylesheet" href="{{ asset('vendor/farouter/tabler/css/tabler.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/farouter/tabler/css/dashboard.css') }}">
</head>
<body class="antialiased">
    <div class="page">
        <aside class="navbar navbar-vertical navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <h1 class="navbar-brand navbar-brand-autodark">Farouter</h1>
                dsas
            </div>
        </aside>
        <div class="content">
            <div class="container-xl">

                @yield('app')
            </div>
            
        </div>
        

    </div>
    
</body>
</html>
