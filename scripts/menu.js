// Validação do Menu
const menu = document.getElementById("menuLateral");
const abrirBtn = document.getElementById("abrirMenu");
const fecharBtn = document.querySelector(".fechar-btn");

if (menu && abrirBtn && fecharBtn) {
  abrirBtn.addEventListener("click", () => {
    menu.style.display = "block";
  });

  fecharBtn.addEventListener("click", () => {
    menu.style.display = "none";
  });
}
