<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Página de Teste</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
</head>
<body>
    @include('partials.header')

    <main>

        <section class="home-feature">
            <div class="home-feature-image"></div>
            <div class="home-feature-text">
                <h3>Editais de concursos abertos</h3>
                <p>Inscrições abertas para novos editais da Etec Zona Leste e oportunidades de formação.</p>
                
                <a href="https://vestibulinho.etec.sp.gov.br/home/" class="feature-button">Saiba mais</a>
            </div>
        </section>

        <section class="home-highlights-section">
            <div class="section-title">
                <h2>Destaques</h2>
            </div>
            <div class="highlights-row">
                <article class="highlight-card">
                    <img src="{{ asset('images/imposto.webp') }}" alt="Concurso aberto">
                    <h3>Imposto de Renda 2026</h3>
                    <p>Declare seu imposto de renda gratuitamente na Etec Zona Leste. Traga 1 kg de alimento não perecível e participe de uma ação social com orientação especializada.</p>
                </article>
                <article class="highlight-card">
                    <img src="{{ asset('images/tecnologica.jpg') }}" alt="Feira tecnológica">
                    <h3>Feira Tecnológica 2026</h3>
                    <p>Evento com apresentações, projetos dos alunos e parcerias com empresas do setor tecnológico. Esteja presente nesse evento cheio de inovações para o futuro.</p>
                </article>
                <article class="highlight-card">
                    <img src="{{ asset('images/gremio.webp') }}" alt="Premiação">
                    <h3>Gremio Estudantil</h3>
                    <p>Votações acontecendo agora para decidir o próximo grêmio estudantil. Faça parte dessa democracia.</p>
                </article>
            </div>
        </section>
    </main>

    @include('partials.footer')
</body>
</html>
