@extends('layouts.loja_info')

@section('content')
    @isset($produto)
        <h1>Editar Produto {{ $produto->Name }}</h1>
    @else
        <h1>Criar Produto</h1>
    @endisset
    <div id="createProductBox">
        <form id="createProductForm" method="POST"
              @isset($produto)
                action="{{ route('products.update', $produto->id) }}"
              @else
                action="{{ route('products.store') }}"
              @endisset
              enctype="multipart/form-data">
            @csrf
            @isset($produto)
                @method('PUT')
            @endisset

            <h1>Nome do Produto</h1>
            <input id="name" name="name" type="text" placeholder="Nome do Produto"
                   value="{{ old('name', $produto->Name ?? '') }}">
            @error('name')
                <p>{{ $message }}</p>
            @enderror

            <h1>Descrição</h1>
            <input id="desc" name="desc" type="text" placeholder="Descrição do Produto"
                   value="{{ old('desc', $produto->Description ?? '') }}">
            @error('desc')
                <p>{{ $message }}</p>
            @enderror

            <h1>Categoria</h1>
            <select name="cat" id="cat">
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}"
                            @selected(old('cat', $produto->category_id ?? '') == $categoria->id)>
                        {{ $categoria->Name }}
                    </option>
                @endforeach
            </select>
            @error('cat')
                <p>{{ $message }}</p>
            @enderror

            <h1>Valor</h1>
            <input id="cost" name="cost" type="number" placeholder="Valor do Produto"
                   value="{{ old('cost', $produto->Cost ?? '') }}">
            @error('cost')
                <p>{{ $message }}</p>
            @enderror

            <h1>Imagem</h1>
            <input id="img" name="img" type="file">
            @error('img')
                <p>{{ $message }}</p>
            @enderror
        </form>

        @isset($produto)
            <div id="editProductImage">
                <img src="{{ asset($produto->img) }}" alt="Imagem do Produto">
                <p>Selecione uma nova imagem para substituir a atual</p>
            </div>
        @endisset

        <div class="createProductButton">
            <a href="{{ route('products.index') }}">
                <div class="button">Voltar</div>
            </a>
            <div class="button" onclick="document.getElementById('createProductForm').submit()">
                Gravar
            </div>

            @if (count($errors) > 0)
                <div class="errors">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endsection

