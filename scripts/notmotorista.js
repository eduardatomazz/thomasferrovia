function enviarMensagem() {
  const mensagem = document.getElementById("mensagem").value.trim();

  if (mensagem === "") {
    alert("Por favor, escreva uma mensagem antes de enviar.");
  } else {
    alert("Mensagem enviada ao motorista:\n\n" + mensagem);
    document.getElementById("mensagem").value = "";
  }
}
