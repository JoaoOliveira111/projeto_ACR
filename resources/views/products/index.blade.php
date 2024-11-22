@extends('layouts.loja_info')

@section('content')
    <h1>Produtos</h1>

    <div id="contentBox">

        @foreach ($produtos as $produto)
            <div class="productBox">
                <div class = "productImage">
                    <img src="{{ $produto->img }}">
                </div>
                <div class = "productName">
                    <h2>{{ $produto->Name }}"</h2>
                </div>
                <div class = "productCost">
                    <h2>{{ $produto->Cost }}"</h2>
                </div>

                <div class = "productButtons">
                    <a href="{{ route('products.show', $produto->id) }}">
                        <div class="button">
                            Detalhes
                        </div>
                    </a>

                    <div class="button">
                        Comprar
                    </div>
                </div>
                @auth
                    @if (Auth::user()->is_admin)
                        <div class="deleteButton" onclick="submitForm('destroy_{{ $produto->id }}')"
                            title="Eliminar{{ $produto->Name }}">
                            <img src="/img/delete.svg">
                            <form id="destroy_{{ $produto->id }}" action="{{ route('products.destroy', $produto->id) }}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                            </form>
                        </div>
                        <a href="{{ route('products.edit', $produto->id) }}">
                            <div class = "editButton" title="Editar {{ $produto->Name }}">
                                <img src="/img/edit.svg">
                            </div>
                        </a>
                    @endif
                @endauth
            </div>
        @endforeach
    </div>
@endsection
