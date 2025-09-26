
<?php 

require_once (__DIR__. '/../partials/header.php');

?>
<body id="comfundo">
    <header>
        <div id="navbar">
            <img id="icon" src="../img/logo_cabecalho.png" alt="">
        </div>
        <div class="rotas">
            <p>ALERTAS E NOTIFICAÇÕES</p>
        </div>
        <div id="menuLateral" class="menu-lateral">
      <button class="fechar-btn" onclick="fecharMenu()">X</button>
      <ul>
        <li><a href="../public/inicioadm.php">INÍCIO</a></li>
        <li><a href="../public/dashboard.php">DASHBOARD</a></li>
        <li><a href="../public/rotas.php">ROTAS</a></li>
        <li><a href="../public/monitoramento.php">MONITORAMENTO</a></li>
        <li><a href="../public/relatorioeanalise.php">RELATÓRIO E ANÁLISE</a></li>
        <li><a href="../public/alertaenotificacoes.php">ALERTAS E NOTIFICAÇÕES</a></li>
        <li><a href="../index.php">SAIR</a></li>
      </ul>
    </div>
    
    <button id="abrirMenu" class="abrir-btn" onclick="abrirMenu()">☰</button>
    </header>
                <section>
                    <a href="../public/principais.php" class="botao22">PRINCIPAIS</a>
                </section>
                
                <section>
                    <a href="../public/acaoimediata.php" class="botao23">AÇÃO IMEDIATA</a>
                </section>
           
        <script src="../scripts/script.php"></script>
    </body>
</body>
</html>

