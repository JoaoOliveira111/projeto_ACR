@extends('layouts.loja_info')

@section('content')
<div class="contact-body">
    <div class="contact-container">
        <h2>Entre em Contato</h2>
        <form action="{{ route('contact.send') }}" method="POST" class="contact-form">
            @csrf
            <div class="contact-form-group">
                <label for="name">Nome</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="contact-form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required>
            </div>
            

            <div class="contact-form-group">
                <label for="message">Mensagem</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>

            <div class="contact-buttons">
                <button type="submit" class="contact-button">Enviar</button>
            </div>
        </form>
    </div>
</div>
@endsection
