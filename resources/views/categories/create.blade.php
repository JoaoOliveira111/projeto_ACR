@extends('layouts.loja_info')


@section('content')
    @isset($categoria)
        <h1>Editar {{ $categoria->nome }}</h1>
    @else
        <h1>Criar Categorias</h1>
    @endisset


    <div id="createCategoryBox">
        <form id="createCategoryForm" method="POST" action="{{ route('categories.store') }}">
            @isset($categoria)
                action ="{{ route('categories.update', $categoria->id) }}"
            @else
                action="{{ route('categories.store') }}"
            @endisset>

            @csrf
            @isset($categoria)
                @method('PUT')
            @endisset
            <h1>Nome de Categoria</h1>
            <input id="name" name="name" type="text" placeholder="Nome da Categoria"
                value="{{ old('name')== null && isset($categoria)?$categoria->Name :old('name') }}">
        </form>
        <div class="createCategoryButtons">
            <a href ="{{ route('dashboard') }}">
                <div class="button">
                    <p>Voltar</p>
                </div>
            </a>
            <div class= "button" onclick="submitForm('createCategoryForm')">
                Gravar
            </div>
        </div>
        @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        @endif
    </div>
@endsection
