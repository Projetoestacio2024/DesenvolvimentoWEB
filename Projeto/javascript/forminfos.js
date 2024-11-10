// Pegando os elementos do modal e os botões
const modal = document.getElementById("myModal");
const openModalBtn = document.getElementById("openModalBtn");
const closeModalBtn = document.getElementById("closeModalBtn");

// Quando o usuário clicar no link "Abrir Formulário", o modal abre
openModalBtn.onclick = function() {
    modal.style.display = "block";
}

// Quando o usuário clicar no "x", o modal fecha
closeModalBtn.onclick = function() {
    modal.style.display = "none";
}

// Quando o usuário clicar fora do modal, ele também fecha
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}