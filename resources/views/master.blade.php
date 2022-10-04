<html lang="be">
<head>
    <title>Next Apps Project</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    <header>
        <div class="container">
            <div class="title">
                <a href="{{ route('home') }}">Backend Job Application - Ruben Pauwels</a>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="breadcrumbs">
            @if(Request::path() !== '/')
                <a href="{{ url()->previous() }}">< Go back</a>
            @endif
        </div>
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>
</html>
