
<?php 

require_once (__DIR__. '/../partials/header.php');

?>

<body>
    <header>
        <div id="navbar">
            <button id="backBtn"><</button>
            <img id="icon" src="../img/logo_cabecalho.png" alt="">
        </div>
        <div class="rotas">
            <p>ALERTAS E NOTIFICAÇÕES</p>
        </div>
    </header>
  <div class="container">
    
    <button class="notify-btn">NOTIFICAR O MOTORISTA</button>

   <div class="notificar-secction">
      <label for="mensagem">Escreva aqui a mensagem para o motorista:</label>
      <input type="text" id="mensagem" placeholder="Digite a mensagem...">
      <button onclick="enviarMensagem()" class="botao3">ENVIAR</button>
    </div>
  </div>

      <script src="../scripts/script.php"></script>    
</body>
</html>




    