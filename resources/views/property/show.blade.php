@extends('../homeBase')

@section('title', $property->title)

@section('content')
    <div class="container mt-5">
        <h1>{{ $property->title }}</h1>
        <h2>{{ $property->rooms }} pieces - {{ $property->surface }} m2</h2>

        <div class="text-primary fw-bold" style="font-size: 5rem">
            {{ number_format($property->price, thousands_separator: ' ') }} Fcfa
        </div>

        <hr>

        <div class="row mt-4">
            <h2>Interesse par ce bien</h2>
            <form action="" class="vstack">
                @csrf
                <div class="row" class="vstack gap-3">
                    @include('../shared/input', [
                        'class' => 'col-md-6',
                        'name' => 'firstName',
                        'label' => 'Prenom',
                    ])

                    @include('../shared/input', [
                        'class' => 'col-md-6',
                        'name' => 'lastName',
                        'label' => 'Nom',
                    ])
                </div>

                <div class="row" class="vstack gap-3">
                    @include('../shared/input', [
                        'class' => 'col-md-6',
                        'name' => 'phone',
                        'label' => 'Telephone',
                    ])

                    @include('../shared/input', [
                        'class' => 'col-md-6',
                        'name' => 'email',
                        'label' => 'Email',
                    ])
                </div>

                @include('../shared/input', [
                    'class' => 'col-md-12',
                    'name' => 'message',
                    'label' => 'Votre message',
                    'type' => 'textarea',
                ])

                <div class="">
                    <button class="btn btn-primary mt-3">Nous contacter</button>
                </div>
            </form>
        </div>
        <div class="mt-4">
            <p>{!! nl2br($property->description) !!}</p>
            <div class="row">
                <div class="col-8">
                    <h2>Caracteristique</h2>
                    <table class="table table-striped">
                        <tr>
                            <td>Surface habitable</td>
                            <td> {{ $property->surface }}</td>
                        </tr>
                        <tr>
                            <td>Pieces</td>
                            <td> {{ $property->rooms }}</td>
                        </tr>
                        <tr>
                            <td>Chambres</td>
                            <td> {{ $property->bedrooms }}</td>
                        </tr>
                        <tr>
                            <td>Etage</td>
                            <td> {{ $property->floor ?: "Rez de chaussee" }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-4">
                    <h2>Specificites</h2>
                    <ul class="list-group">
                        @foreach ($property->options as $option)
                            <li class="list-group-item">{{ $option->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
