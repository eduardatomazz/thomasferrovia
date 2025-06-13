function openLeftMenu() {
  document.getElementById("leftMenu").style.display = "block";
}

function closeLeftMenu() {
  document.getElementById("leftMenu").style.display = "none";
}

function openRightMenu() {
  document.getElementById("rightMenu").style.display = "block";
}

function closeRightMenu() {
  document.getElementById("rightMenu").style.display = "none";
}

function abrirMenu() {
  document.getElementById("menuLateral").style.left = "0";
}

function fecharMenu() {
  document.getElementById("menuLateral").style.left = "-260px";
}

//botão de voltar

  document.getElementById("backBtn").addEventListener("click", function(){
    history.back();
  });


  //monitoramento

  function mostrarDetalhes(tipo) {
    const detalhes = document.getElementById('detalhes');
    let html = '';
  
    if (tipo === 'manutencao') {
      html = `
          <section class="manutencao">
          <h2>ALERTA PARA MANUTENÇÃO!</h2>
          <img src="../img/trem.png" alt="Trem" style="width: 300px; height: 500px;">
          <h2>MANUTENÇÃO DO ÓLEO DAS ENGRENAGENS</h2>
          <h3>Modelo do trem:</h3><p>LNER Class A4 4468 Mallard</p>
          <h3>Ano:</h3><p>1938</p>
          <h3>Data da manutenção:</h3><p>01/04/2025</p>
          <h3>Horário:</h3><p>10hrs</p>
          <h3>Nome do Terceiro:</h3><p>Ícaro Botelho</p>
          <h3>Monitor do terceiro:</h3><p>João Bornelli</p>
          <h3>Renovação:</h3><p>6 meses ou 50.000 km</p>
        </section>
      `;
    } else if (tipo === 'inspecao1') {
      html = `
        <section class="inspecao">
          <h2>INSPEÇÃO!</h2>
          <img src="../img/trem.png" alt="Trem" style="width: 300px; height: 500px;">
          <h3>INSPEÇÃO NO MOTOR DO TREM</h3>
          <h2>Modelo do trem:</h2><p>LNER Class A4 4468 Mallard</p>
          <h2>Ano:</h2><p>1938</p>
          <h2>Data da manutenção:</h2><p>24/05/2025</p>
          <h2>Horário:</h2><p>15hrs</p>
          <h2>Nome do Terceiro:</h2><p>Thaynara de Assis Machado de Jesus Lima</p>
          <h2>Monitor do terceiro:</h2><p>Djeniffer Caroline Machado</p>
          <h2>Renovação:</h2><p>6 meses a 1 ano</p>
        </section>
      `;
    } 
    
    else if (tipo === 'inspecao2') {
      html = `
        <section class="inspecao">
          <h2>INSPEÇÃO!</h2>
          <h3>INSPEÇÃO NO TRILHO DE TREM - SETOR 12</h3>
          <h2>Data:</h2><p>30/05/2025</p>
          <p>Detalhes adicionais podem ser inseridos aqui.</p>
        </section>
      `;
    }
  
  detalhes.innerHTML = html;
  detalhes.classList.remove('hidden');
  }
  
  function voltar() {
    document.getElementById('detalhes').classList.add('hidden');
  }