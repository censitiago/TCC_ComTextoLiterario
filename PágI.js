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




