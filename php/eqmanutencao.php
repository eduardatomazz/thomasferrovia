<?php
function enviarMensagem() {
    $mensagem = trim($_POST['mensagem'] ?? '');

    if ($mensagem === "") {
        echo "<script>alert('Por favor, escreva uma mensagem antes de enviar.');</script>";
    } else {
        echo "<script>alert('Mensagem enviada ao motorista:\\n\\n" . addslashes($mensagem) . "');</script>";
        echo "<script>document.getElementById('mensagem').value = '';</script>";
    }
}
?>

