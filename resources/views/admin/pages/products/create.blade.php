@extends('admin.layouts.app')

@section('title', 'cadastrar novo produto')

@section('content')
    <h1> Cadastrar novo produto</h1>



    <form action="{{ route('products.store')}}" method="post" enctype="multipart/form-data" class="form">
        @include('admin.pages.products._partials.form');
    </form>
@endsection

