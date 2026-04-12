<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Página de Teste</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
</head>
<body>
    @include('partials.header')

    <main>
        <div class="eteczl">
        </div>
        <div class="card">
            <h2>Seção de Teste</h2>
            <p>Este é um exemplo de página com CSS integrado.</p>
        </div>
        <div class="card">
            <h2>Outra Seção</h2>
            <p>Você pode adicionar mais conteúdo aqui.</p>
        </div>
    </main>

    @include('partials.footer')
</body>
</html>
