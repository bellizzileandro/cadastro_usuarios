@extends('layouts.app')

@section('content')
<section class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Usuários Cadastrados</div>

                <div class="card-body">
                    @forelse ($users as $user)
                        <div class="row">
                            <div class="col-md-8">
                                <p>{{$user->name}} {{$user->lastname}}</p>
                            </div>
                            <div class="col-auto">
                                <a href="{{ route('users.edit', ['id' => $user->id]) }}">Editar</a>
                            </div>
                            @if ($user->id != Auth::user()->id)
                                <div class="col-auto">
                                    <a href="{{ route('users.destroy', ['id' => $user->id]) }}">Apagar</a>
                                </div>
                            @endif
                            
                        </div>
                    @empty
                        <p>Nenhum usuário cadastrado!</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
