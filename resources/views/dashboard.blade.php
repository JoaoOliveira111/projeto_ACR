@extends('layouts.loja_info')

@section('content')
    <h1>Painel de Controlo</h1>
    <div id="dashboardBox">
        <a href="{{ route('products.index') }}">
            <p>Ver produtos</p>
        </a>
        <a href="{{ route('products.create') }}">
            <p>Criar produtos</p>
        </a>
        <a href="{{ route('categories.index') }}">
            <p>Ver categorias</p>
        </a>
        <a href="{{ route('categories.create') }}">
            <p>Criar Categorias</p>
        </a>
    </div>
@endsection