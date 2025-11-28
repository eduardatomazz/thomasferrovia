
<?php 

require_once (__DIR__. '/../partials/header.php');

?>

<body>
    <header>
        <div id="navbar">
            <button type="submit" class="seta_sair">
             <a href="alertaenotificacoes.php" ><</a>
            </button>
            <img id="icon" src="../img/logo_cabecalho.png" alt="">
        </div>
        <div class="cor">
        </div>
    </header>
    
  <div class="containeer">
    <div class="cardalerta">
      <img class="atencao" src="../img/atencao.webp" alt="">
      <div class="texto">
        <h3>Alerta extremo</h3>
        <p>Defesa Civil: alerta de fortes chuvas na região sul de Santa Catarina com risco de alagamento e deslizamento.</p>
      </div>
    </div>

    <div class="cardalerta">
      <img class="atencao" src="../img/atencao.webp" alt="">
      <div class="texto">
        <h3>Alerta extremo</h3>
        <p>Defesa Civil: alerta de árvores caídas em certos pontos de trilhos.</p>
      </div>
    </div>

    <div class="cardalerta">
      <img class="atencao" src="../img/atencao.webp" alt="">
      <div class="texto">
        <h3>Alerta extremo</h3>
        <p>Defesa Civil: acidente nos trilhos de trem.</p>
      </div>
    </div>

    <div class="card notificacao">
       <img class="atencao" src="../img/notificacao.png" alt="">
      <div class="texto">
        <h3>Notificações</h3>
        <p>Irá ocorrer um atraso nas entregas, por conta das fortes chuvas.</p>
      </div>
    </div>

    <div class="card notificacao">
      <img class="atencao" src="../img/notificacao.png" alt="">
      <div class="texto">
        <h3>Notificações</h3>
        <p>Lembrete: verificar se o trem não precisa de manutenção antes da viagem.</p>
      </div>
    </div>
  </div>
  
      <script src="../scripts/script.php"></script>  
</body>
</html>