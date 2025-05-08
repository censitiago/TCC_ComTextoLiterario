const toggleButton = document.getElementById('menu-toggle');
const menuOpcoes = document.getElementById('menu-opcoes')

toggleButton.addEventListener('click', () => {
    if (menuOpcoes.style.display === 'none') {
        menuOpcoes.style.display = 'block';
    } else {
        menuOpcoes.style.display = 'none';
    }
});

document.addEventListener('DOMContentLoaded', () => {
    const tipo = localStorage.getItem("tipoUsuario");


    if (tipo) {
        document.getElementById('logout').style.display = 'block';

        if (tipo === "coordenador") {
            document.getElementById("btn-cadastrar-bolsista").style.display = "block";
        }


        document.getElementById("container-cad-livro").style.display = "flex";
    }


});

function logout() {
    localStorage.removeItem('usuarioLogado');
    localStorage.removeItem('tipoUsuario');
    window.location.href = 'PáginaInicial.html';
}