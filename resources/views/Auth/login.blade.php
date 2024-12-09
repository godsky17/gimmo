@extends('../homeBase')

@section('title', "Login")

@section('content')
    <div class="container">
        <div class="form-section mt-5">
            <form action="" method="post">
                @csrf
                @include('../shared/input',[
                    'name' => "email",
                    "type" => 'email',
                    "email" => "Email"
                ])

                @include('../shared/input',[
                    'name' => "password",
                    "type" => 'password',
                    "email" => "Mot de pass"
                ])
                <div class="mt-3">
                    <button class="btn btn-primary">Se connecter</button>
                </div>
            </form>
        </div>
    </div>
@endsection