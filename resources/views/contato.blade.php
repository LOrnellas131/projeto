<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Contato</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/contato.css') }}">
</head>
<body>
    @include('partials.header')
    <main>
        <h2>Entre em Contato</h2>
        <div class="contato-page">
            <form class="contato-form" action="{{ url('/contato') }}" method="post">
                <label for="nome">Nome completo</label>
                <input type="text" id="nome" name="nome" placeholder="Seu nome" required>

                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="seu@email.com" required>

                <label for="mensagem">Mensagem</label>
                <textarea id="mensagem" name="mensagem" rows="6" placeholder="Escreva sua mensagem aqui" required></textarea>

                <button type="submit">Enviar mensagem</button>
            </form>
        </div>
    </main>
    @include('partials.footer')
</body>
</html>