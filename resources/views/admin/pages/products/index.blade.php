@extends('admin.layouts.app')


@section('content')

    <h1>Exibindo os produtos</h1>
    <a href="{{ route('products.create')}}">Cadastrar</a>
    <hr>

    @component('admin.components.card')
        @slot('title')
            <h1> titulo card </h1>
        @endslot
        Um card de exemplo
    @endcomponent

    @include('admin.includes.alerts')

    <hr>

    @if ($teste === '123')
        <p>é igual<p>
    @endif

@endsection
