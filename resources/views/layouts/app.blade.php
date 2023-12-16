<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Microposts</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"> -->
        @vite('resources/css/app.css')
    </head>

    <body class="bg-slate-100">
        <div class="grid grid-cols-12 grid-rows-[100px_calc(100vh-100px)] sm:grid-rows-[72px_calc(100vh-72px)] h-screen">
            <header class="col-span-12 px-4 mb-4 flex items-center bg-slate-300 text-slate-900 shadow">
                @include('commons.navbar')
            </header>
            <div class="col-span-12 bg-slate-100 text-slate-700">
                @include('commons.error_messages')
                @yield('content')
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script> -->
        <script defer src="https://use.fontawesome.com/releases/v6.5.1/js/all.js"></script>
    </body>
</html>