@extends('../base')
@section('title', "Gestionnaire d'option")
@section('desc', "Creer sur cette page vos options.")
@section('content')
   @if ($option->exists)
        <h1>Modifier une option</h1>
   @else       
        <h1>Creer une option</h1>
   @endif

   <form action="{{ $option->exists ? route('admin.option.update', $option) : route('admin.option.store')}}" method="post">
    @csrf
    @if ($option->exists)
        @method('put')
    @endif

       @include('../shared/input', ['name' => "name", 'class' => "col-md-12 mb-2", 'value' => $option->name])

    @if ($option->exists)
       <button class="btn btn-primary">Modifier</button>
    @else
        <button class="btn btn-primary">Creer</button>
    @endif
   </form>
@endsection
