<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cursos</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cursos.css') }}">
    <style>
    </style>
</head>
<body>
    @include('partials.header')
    <main>
        <h2>Nossos Cursos</h2>
        <div class="cursos-grid">
            <div class="curso-box">
                <img src="{{ asset('images/ds.webp') }}" alt="Desenvolvimento de Sistemas">
                <h3>Desenvolvimento de Sistemas</h3>
                <p>Curso focado em programação e desenvolvimento de software.</p>
                <a href="https://eteczonaleste.cps.sp.gov.br/cursos-etec/desenvolvimento-de-sistemas/" class="btn-mais">Mais</a>
            </div>
            <div class="curso-box">
                <img src="{{ asset('images/adm.jpg') }}" alt="Administração">
                <h3>Administração</h3>
                <p>Curso de gestão e administração de empresas.</p>
                <a href="https://eteczonaleste.cps.sp.gov.br/cursos-etec/administracao/" class="btn-mais">Mais</a>
            </div>
            <div class="curso-box">
                <img src="{{ asset('images/rh.webp') }}" alt="Recursos Humanos">
                <h3>Recursos Humanos</h3>
                <p>Curso sobre gestão de pessoas e recursos humanos.</p>
                <a href="https://eteczonaleste.cps.sp.gov.br/cursos-etec/recursos-humanos/" class="btn-mais">Mais</a>
            </div>
            <div class="curso-box">
                <img src="{{ asset('images/log.webp') }}" alt="Logística">
                <h3>Logística</h3>
                <p>Curso de logística e cadeia de suprimentos.</p>
                <a href="https://eteczonaleste.cps.sp.gov.br/cursos-etec/logistica/" class="btn-mais">Mais</a>
            </div>
            <div class="curso-box">
                <img src="{{ asset('images/sj.jpg') }}" alt="Serviços Jurídicos">
                <h3>Serviços Jurídicos</h3>
                <p>Formação em direito, legislação e práticas jurídicas.</p>
                <a href="https://eteczonaleste.cps.sp.gov.br/cursos-etec/servicos-juridicos/" class="btn-mais">Mais</a>
            </div>
            <div class="curso-box">
                <img src="{{ asset('images/c.jpg') }}" alt="Contabilidade">
                <h3>Contabilidade</h3>
                <p>Contabilidade, auditoria e gestão contábil-fiscal.</p>
                <a href="https://eteczonaleste.cps.sp.gov.br/cursos-etec/contabilidade/" class="btn-mais">Mais</a>
            </div>
            <div class="curso-box">
                <img src="{{ asset('images/f.jpg') }}" alt="Finanças">
                <h3>Finanças</h3>
                <p>Gestão de investimentos, crédito e mercado financeiro.</p>
                <a href="https://eteczonaleste.cps.sp.gov.br/cursos-etec/financas/" class="btn-mais">Mais</a>
            </div>
        </div>
    </main>
    @include('partials.footer')
</body>
</html>