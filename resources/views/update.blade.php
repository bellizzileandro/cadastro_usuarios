@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <i class="fas user-cog icon"></i>
                    <span style="font-size: 1.2rem">{{__('Editar dados do usuário')}}</span>
                </div>

                <div class="card-body">
                    <form action="{{ route('users.update', ['user' => $user->id]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome')}}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}" required autocomplete="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Sobrenome')}}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname', $user->lastname) }}" required autocomplete="lastname">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="birthdate" class="col-md-4 col-form-label text-md-right">{{ __('Data de nascimento')}}</label>
                            <div class="col-md-6">
                                <input id="birthdate" type="date" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ old('birthdate', $user->birthdate) }}" required autocomplete="birthdate" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{__('Sexo')}}</label>
                            <div class="col-md-6">
                                <select name="gender" id="gender" class="custom-select form-control @error('gender') is-invalid @enderror" value={{ old('gender', $user->gender) }}>
                                    @if($user->gender == 'F')
                                        <option value="F" selected>{{__('Feminino')}}</option>
                                        <option value="M">{{__('Masculino')}}</option>
                                    @elseif($user->gender == 'M')
                                        <option value="F">{{__('Feminino')}}</option>
                                        <option value="M" selected>{{__('Masculino')}}</option>
                                    @else
                                        <option value="F">{{__('Feminino')}}</option>
                                        <option value="M">{{__('Masculino')}}</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-auto offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Salvar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                        
                </div>
            </div>
        </div>
    </div>

@endsection
