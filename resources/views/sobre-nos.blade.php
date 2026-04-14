<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Sobre Nós</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sobre-nos.css') }}">
</head>
<body>
    @include('partials.header')
    <main>
        <h2>Sobre Nós</h2>
        <div class="sobre-nos-content">
            <div class="video-section">
                <iframe 
                    src="https://www.youtube.com/embed/KLv7TwxTicI" 
                    title="YouTube video player" 
                    width="100%" 
                    height="100%" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
            <div class="text-section">
                <p>Somos uma instituição dedicada à educação e formação profissional. Nossa missão é oferecer cursos de qualidade para preparar os alunos para o mercado de trabalho.</p>
                <p>Com anos de experiência, contamos com professores qualificados e infraestrutura moderna para garantir o melhor aprendizado.</p>
                <p>Além dos conteúdos técnicos, valorizamos o desenvolvimento humano: ética, trabalho em equipe e comunicação são habilidades que estimulamos em todas as turmas.</p>
                <p>Nossos alunos participam de projetos práticos, eventos e parcerias com empresas locais, o que aproximou a ETEC da Zona Leste das necessidades reais do mercado.</p>
                <p>Estamos comprometidos em apoiar cada estudante na construção de uma carreira sólida, oferecendo orientação vocacional, acompanhamento pedagógico e um ambiente acolhedor.</p>
            </div>
        </div>
    </main>
    @include('partials.footer')
</body>
</html>
