const toggleButton = document.getElementById('menu-toggle');
const menuOpcoes = document.getElementById('menu-opcoes')

toggleButton.addEventListener('click', () => {
    if(menuOpcoes.style.display ==='none'){
        menuOpcoes.style.display = 'block';
    } else{
        menuOpcoes.style.display = 'none';
    }
});

const tipo = localStorage.getItem("tipoUsuario")
if(tipo === "coordenador"){
    document.getElementById("btn-cadastrar-bolsista").style.display = "block";
}
if (tipo === "coordenador" || tipo === "bolsista"){
    document.getElementById("btn-cadastrar-livro").style.display = "block";
}

document.addEventListener('DOMContentLoaded', () => {
    const tipo = localStorage.getItem("tipoUsuario");
    const logoutBtn = document.querySelector(".logout-link");

    if (tipo === "coordenador") {
        document.getElementById("btn-cadastrar-bolsista").style.display = "block";
        document.getElementById("btn-cadastrar-livro").style.display = "block";
        logoutBtn.style.display = "inline-block";
    } else if (tipo === "bolsista") {
        document.getElementById("btn-cadastrar-livro").style.display = "block";
        logoutBtn.style.display = "inline-block";
    } else {
        // Se não for nenhum dos dois, esconde tudo
        document.getElementById("btn-cadastrar-livro").style.display = "none";
        document.getElementById("btn-cadastrar-bolsista").style.display = "none";
        logoutBtn.style.display = "none";
    }
});

function logout(){
    localStorage.removeItem('usuarioLogado');
    localStorage.removeItem('tipoUsuario');
    window.location.href = 'PáginaInicial.html';
}

