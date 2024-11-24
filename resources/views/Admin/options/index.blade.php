@extends('base')
@section('title', 'Gestion des options')
@section('content')
    <div class="d-flex align-items-center justify-content-between mb-3">
        <h1>@yield('title')</h1>
        <a class="btn btn-primary" href="{{ route('admin.option.create') }}">Ajouter</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($options as $option)
                <tr>
                    <td>{{ $option->name }}</td>
                    <td class="d-flex align-items-center justify-content-end gap-2">
                        <a href="{{ route('admin.option.edit', $option) }}" class="btn btn-primary">Modifier</a>
                        <form action="{{ route('admin.option.destroy', $option) }}" method="post">
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
