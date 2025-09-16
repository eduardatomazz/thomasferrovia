<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notificar o motorista</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
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
    
    <button class="notify-btn">ATIVAR EQUIPE DE MANUTENÇÃO</button>

   <div class="notificar-secction">
      <label for="mensagem">Descreva aqui a manutenção necessária:</label>
      <input type="text" id="mensagem" placeholder="Digite a mensagem...">
      <button onclick="enviarMensagem()" class="botao3">ENVIAR</button>
    </div>
  </div>

      <script src="../scripts/script.js"></script>
</body>
</html>


    