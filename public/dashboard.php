<?php require_once __DIR__. '/../partials/header.php'; ?>

<body id="semfundo">
    <header>
        <div id="navbar">
            <img id="icon" src="../img/logo_cabecalho.png" alt="">
        </div>
        <div class="rotas">
            <p>DASHBOARD</p>
        </div>
        <div id="menuLateral" class="menu-lateral">
      <button class="fechar-btn" onclick="fecharMenu()">X</button>
      <ul>
        <li><a href="../public/inicioadm.html">INÍCIO</a></li>
        <li><a href="../public/dashboard.html">DASHBOARD</a></li>
        <li><a href="../public/rotas.html">ROTAS</a></li>
        <li><a href="../public/monitoramento.html">MONITORAMENTO</a></li>
        <li><a href="../public/relatorioeanalise.html">RELATÓRIO E ANÁLISE</a></li>
        <li><a href="../public/alertaenotificacoes.html">ALERTAS E NOTIFICAÇÕES</a></li>
        <li><a href="../index.html">SAIR</a></li>
      </ul>
    </div>
    
    <button id="abrirMenu" class="abrir-btn" onclick="abrirMenu()">☰</button>
    </header>
<div class="retangulo">
    <img class="tremimagem" src="../img/t5432.png" alt="">
    <h3><img class="verde" src="../img/circuloverde.png" alt="">MOVIMENTO</h3>
    <img class="atencao" src="../img/atencao.webp" alt="">
    <a href="emmovimento.html" class="botao5">ACESSAR</a>
</div>

<div class="retangulo">
    <img class="tremimagem" src="../img/t9876.png" alt="">
    <h3><img class="verde" src="../img/circulovermelho.png" alt="">PARADO</h3>
    <a href="emmovimento2.html" class="botao5">ACESSAR</a>
</div>

<div class="retangulo">
    <img class="tremimagem" src="../img/t6754.png" alt="">
    <h3><img class="verde" src="../img/circulovermelho.png" alt="">PARADO</h3>
    <a href="emmovimento3.html" class="botao5">ACESSAR</a>
</div>

<div class="retangulo">
    <img class="tremimagem" src="../img/t2431.png" alt="">
    <h3><img class="verde" src="../img/circuloverde.png" alt="">MOVIMEMENTO</h3>
    <img class="atencao" src="../img/atencao.webp" alt="">
    <a href="emmovimento4.html" class="botao5">ACESSAR</a>
</div>

<div class="retangulo">
    <img class="tremimagem" src="../img/t7658.png" alt="">
    <h3><img class="verde" src="../img/circuloverde.png" alt="">MOVIMEMENTO</h3>
    <img class="atencao" src="../img/atencao.webp" alt="">
    <a href="emmovimento5.html" class="botao5">ACESSAR</a>
</div>

    <script src="../scripts/script.js"></script>
</body>

</html>
