
<?php 

require_once (__DIR__. '/../partials/header.php');

?>

<body>
    <header>
        <div id="navbar">
            <img id="icon" src="../img/logo_cabecalho.png" alt="">
        </div>
        <div class="cor">
        </div>
        <div class="rotas">
            <p>MONITORAMENTO</p>
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
    <main id="monitoramento">
        
        <button class="alerta manutencao" onclick="mostrarDetalhes('manutencao');" target="_blank" type="button">
        <h2>ALERTA PARA MANUTENÇÃO!</h2>  
        <p>Manutenção no óleo do trem 571</p>
        </button>
    
        <div class="card notificacao">
      <div class="texto">
        <h2>INSPEÇÃO</h2>
        <h1>Inspeção no motor do trem 571 <br>
Data: 24/05/2025</p>
      </div>
    </div>
<br>
    <div class="card notificacao">
      <div class="texto">
        <h2>INSPEÇÃO</h2>
        <h1>Inspensão no trilho de trem setor 12 <br>
Data: 30/05/2025</h1>
      </div>
    </div>
  </div>
    
      <div id="detalhes" class="hidden"></div>

    <script src="../scripts/script.php"></script>  
</body>
</html>
