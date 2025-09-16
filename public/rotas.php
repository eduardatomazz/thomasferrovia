<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotas</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body id="semfundo2">

    <header>
        <div id="navbar">
            <img id="icon" src="../img/logo_cabecalho.png" alt="">
        </div>
        <div class="rotas">
            <p>ROTAS</p>
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


    <img class="rotaimagem" src="../img/rotasdetrem.png" width="500" height="700" alt="" usemap="#pontosrotas">
    <map name="pontosrotas">
        <area shape="rect" coords="110, 250,140, 280" href="rota1.html" alt="">
        <area shape="rect" coords="350, 240, 390, 270" href="rota1.html" alt="">
        <area shape="rect" coords="350, 310, 330, 390" href="rota2.html" alt="">
        <area shape="rect" coords="150, 440, 190, 490" href="rota2.html" alt="">
    </map>
    </header>

    <script src="../scripts/script.js"></script>    
</body>
</html>