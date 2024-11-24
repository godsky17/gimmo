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