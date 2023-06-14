@extends('admin.layouts.app')

@section('title', 'cadastrar novo produto')

@section('content')
    <h1> Cadastrar novo produto</h1>

    <form action="{{ route('products.store')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Nome:">
        <input type="text" name="name" placeholder="Nome:">
        <button type="submit">Enviar</button>
    </form>
@endsection

