@extends('../base')
@section('title', "Gestionnaire de bien")
@section('desc', "Creer sur cette page votre bien.")
@section('content')
   @if ($property->exists())
        <h1>Modifier un bien</h1>
   @else       
        <h1>Creer un bien</h1>
   @endif

   <form action="{{ $property->exists() ? route('admin.property.update', $property) : route('admin.property.store')}}" method="post">
    @csrf
    @if ($property->exists())
        @method('put')
    @endif
        <div class="row">
            @include('../shared/input', ['name' => 'title', 'label' => "Titre", 'value' => $property->title, 'class' => "col-md-4"])
            @include('../shared/input', ['name' => 'surface', 'label' => "Surface", 'value' => $property->surface, 'class' => "col-md-4"])
            @include('../shared/input', ['name' => 'price', 'label' => "Prix", 'value' => $property->price, 'class' => "col-md-4"])
        </div>
        <div class="row">
            @include("../shared/input", ['name' => "description", 'type' => "textarea", 'label' => "Description", 'value' => $property->description, 'class' => "col-md-12"])
        </div>
        <div class="row">
            @include('../shared/input', ['name' => "rooms", 'label' => "Pieces", 'value' => $property->rooms, 'class' => "col-md-d"])
            @include('../shared/input', ['name' => "bedrooms", 'label' => "Chambres", 'value' => $property->bedrooms, 'class' => "col-md-d"])
            @include('../shared/input', ['name' => "floor", 'label' => "Etage", 'value' => $property->floor, 'class' => "col-md-d"])
        </div>
        <div class="row">~
            @include('../shared/input', ['name' => "address", 'label' => "Adresse", 'value' => $property->address, 'class' => "col-md-d"])
            @include('../shared/input', ['name' => "city", 'label' => "Ville", 'value' => $property->city, 'class' => "col-md-d"])
            @include('../shared/input', ['name' => "postal_code", 'label' => "Code postale", 'value' => $property->postal_code,'class' => "col-md-d"])
        </div>
        @if ($property->exists())
            <button class="btn btn-primary">Modifier</button>
        @else
            <button class="btn btn-primary">Creer</button>
        @endif
   </form>
@endsection
