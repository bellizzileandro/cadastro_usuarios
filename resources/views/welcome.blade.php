@extends('layouts.app')

@section('content')
    <section class="py-4 greeting">
        <p>Olá, {{$greeting}}!</p>
        <p>Bem vindo ao teste prático para a WebDec</p>
        <p>Este teste foi criado utilizando Laravel em sua versão 5.8 e MySql.</p>
    </section>
@endsection 
