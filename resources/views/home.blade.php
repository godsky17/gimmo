@extends('homeBase')
@section('content')
    <div class="bg-light p-5 mb-5 text-center">
        <div class="container">
            <h1>Agence lorem ipsum</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. At sit dignissimos iste ipsum corporis, labore officia debitis, molestias quos nam odit fugit, itaque maxime ullam voluptatum perspiciatis dicta. Molestiae, facere!</p>
        </div>

    </div>
    
    <div class="container">
        <h2>Nos derniers biens</h2>
        <div class="row">
            @foreach ($properties as $property)
                <div class="col">
                    @include('property.card')                
                </div>
            @endforeach
        </div>
    </div>
@endsection