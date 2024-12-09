@extends('../homeBase')
@section('title', "Tous nos biens")
@section('content')
    <div class="bg-light p-5 mb-5 text-center">
        <form action="" method="get" class="container d-flex gap-2">
            <input type="number" name="surface" id="" placeholder="Surface minimal" value="{{ $input['surface'] ?? '' }}"  class="form-control">
            <input type="number" name="rooms" id="" placeholder="Nombre de piece minimal" value="{{ $input['rooms'] ?? '' }}"  class="form-control">
            <input type="number" name="price" id="" placeholder="Budget max" value="{{ $input['price'] ?? '' }}"  class="form-control">
            <input type="text" name="title" id="" placeholder="Mot clef" value="{{ $input['title'] ?? '' }}"  class="form-control">
            <button class="btn btn-primary btn-sm flex-grow-0">Rechercher</button>
        </form>
    </div>
    <div class="container">
        <div class="row">
            @forelse ($properties as $property)
                <div class="col">
                    @include('property.card')
                </div>
            @empty
                <div class="row">
                    <h1 class="text-center">Aucun bien n'a ete trouver !</h1>
                </div>
            @endforelse
        </div>
        <div class="mt-3">
            {{ $properties->links() }}
        </div>
    </div>
@endsection