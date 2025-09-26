
<?php 

require_once (__DIR__. '/../partials/header.php');

?>

  <body id="inicio_menu">
  <header>
    <div id="navbar">
      <img id="icon" src="../img/logo_cabecalho.png" alt="">
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
        <li><a href="../cadastro/cadatro.php">CADASTRAR NOVOS USUÁRIOS</a></li>
        <li><a href="../index.php">SAIR</a></li>
      </ul>
    </div>
    
    <button id="abrirMenu" class="abrir-btn" onclick="abrirMenu()">☰</button>

    <div class="containerr">
      <div class="sectionn green-sectionn">
        <div class="sectionn-header">
          <i class="fas fa-train"></i> PRÓXIMO TREM
        </div>
        <div class="train-info">
          <p class="pp">O próximo trem chegará em:</pp>
          <h1 class="h11">7 <span>minutos</span></h11>
            <div class="train-details">
              <p>Número do trem: <strong>5432</strong></p>
              <p>Despacho em: <strong>Blumenau</strong></p>
            </div>
            <div class="dots green-dots">
              <span></span><span></span><span></span>
            </div>
        </div>
      </div>


      <div class="sectionn orange-sectionn">
        <div class="notice-header">
          <i class="fas fa-thumbtack"></i> AVISO: 25/03 - 11h35
        </div>
        <hr />
        <h3>MANUTENÇÃO NO ÓLEO DO TREM 571</h3>
        <ul>
          <li>
            Ficar atento ao dia <strong>(01/04/2025)</strong> e hora <strong>(10hrs)</strong><br>
            para troca de óleo na engrenagem!
          </li>
        </ul>
        <div class="dots orange-dots">
          <span></span><span></span><span></span>
        </div>
      </div>


      <div class="train-image">
        <img src="../img/tremandando.png" alt="">
      </div>
    </div>
  </header>
</body>
</html>

