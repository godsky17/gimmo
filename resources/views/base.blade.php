<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('desc')">
    <title>@yield('title')</title>
    {{-- CSS LINK --}}
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css')}}">
</head>
<body>

    @php
        $route = request()->route()->getName();
    @endphp
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <h1 class="h1">gimmo</h1>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent2">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a @class(['nav-link', 'active' => str_contains($route, 'property.')]) aria-current="page" href="{{ route('admin.property.index') }}">Gestion des biens</a>
              </li>
              <li class="nav-item">
                <a @class(['nav-link', 'active' => str_contains($route, 'option.')]) aria-current="page" href="{{ route('admin.option.index' )}}">Gestion des options</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

   <div class="container my-5">

    @if (session('success'))
        <div class="alert alert-success">
            {{ session("success") }}
        </div>
    @endif

    @if ($errors->any())

    <div class="alert alert-danger">
        <ul  class="mb-0">
        @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
                @endforeach
            </ul>
    </div>
        
    @endif
    
    @yield('content')
   </div>
</body>
</html>