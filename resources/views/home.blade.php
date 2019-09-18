@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-users icon"></i>
                    <span style="font-size: 1.2rem">{{ __('Usuários Cadastrados') }}</span>
                </div>

                <div class="card-body">
                    @forelse ($users as $user)
                        <div class="row">
                            <div class="col-md-8">
                                <p>{{$user->name}} {{$user->lastname}}</p>
                            </div>
                            <div class="col-auto">
                                <a href="{{ route('users.edit', ['id' => $user->id]) }}">
                                    <span class="d-inline-block" tabindex="0" data-placement="top" data-toggle="tooltip" title="Editar">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                </a>
                            </div>
                            @if ($user->id != Auth::user()->id)
                                <div class="col-auto">
                                    <a href="{{ route('users.destroy', ['id' => $user->id]) }}">
                                        <span class="d-inline-block" tabindex="0" data-placement="top" data-toggle="tooltip" title="Apagar">
                                            <i class="fas fa-trash-alt"></i>
                                        </span> 
                                    </a>
                                </div>
                            @endif
                            
                        </div>
                    @empty
                        <p>Nenhum usuário cadastrado!</p>
                    @endforelse
                    <div class="card-footer bg-transparent">
                        <nav aria-label="Users pagination">
                            <div class="pagination pagination-sm justify-content-end">
                                {{ $users->links() }}
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
