@extends('base')
@section('title', "Gestion des biens")
@section('content')
    <div class="d-flex align-items-center justify-content-between mb-3">
        <h1>@yield('title')</h1>
        <a class="btn btn-primary" href="{{ route('admin.property.create')}}">Ajouter</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Description</th>
                <th>Surface</th>
                <th>Ville</th>
                <th>Chambre</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($properties as $property)
                <tr>
                    <td>{{ $property->title }}</td>
                    <td>{{ $property->description }}</td>
                    <td>{{ $property->surface }}</td>
                    <td>{{ $property->city }}</td>
                    <td>{{ $property->rooms }}</td>
                    <td class="d-flex align-items-center justify-content-end gap-2">
                        <a href="{{ route('admin.property.edit', $property) }}" class="btn btn-primary" >Modifier</a>
                        <form action="{{ route("admin.property.destroy", $property) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
