@extends('admin.layouts.app')

@section('title', 'cadastrar novo produto')

@section('content')
    <h1> Cadastrar novo produto</h1>

    @include("admin.includes.alerts")

    <form action="{{ route('products.store')}}" method="post" enctype="multipart/form-data" class="form">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Nome:" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <input type="text"  class="form-control" name="description" placeholder="Descrição:" value="{{ old('description') }}">
        </div>
        <div class="form-group">
            <input type="text"  class="form-control" name="price" placeholder="Preço:" value="{{ old('price') }}">
        </div>
        <div class="form-group">
            <input type="file" class="form-control" name="image">
        </div>
        <button type="submit" class="btn btn-success">Enviar</button>
    </form>
@endsection

