@extends('admin.layouts.app')

@section('title', 'cadastrar novo produto')

@section('content')
    <h1> Cadastrar novo produto</h1>

    <form action="{{ route('products.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Nome:">
        <input type="text" name="name" placeholder="Descrição:">
        <input type="file" name="photo">
        <button type="submit">Enviar</button>
    </form>
@endsection

