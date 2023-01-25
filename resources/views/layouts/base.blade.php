<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <header class="position-relative">
        <div class="header-band"></div>
        <nav class="navbar navbar-expand-lg bg-light position-relative">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">Comics</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    @yield('headerContent')
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid">
            <h1>@yield('title')</h1>
            @yield('content')
        </div>
    </main>
</body>
</html>
