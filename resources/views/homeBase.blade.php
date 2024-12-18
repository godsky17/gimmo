<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('desc')">
    <title>@yield('title')</title>
    {{-- CSS LINK --}}
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}">
</head>

<body>

    @php
        $route = request()->route()->getName();
    @endphp
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <h1 class="h1">gimmo</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a @class(['nav-link', 'active' => str_contains($route, 'property.')]) aria-current="page"
                            href="{{ route('property.index') }}">Biens</a>
                    </li>
                </ul>
                
                <a href="{{ route('login') }}" class="btn btn-outline-light" type="submit">Se connecter</a>
            </div>
        </div>
    </nav>

     @yield('content')

</body>
</html>
