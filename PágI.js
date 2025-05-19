

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

//cadastro de livro
const modalLivro = document.getElementById('modal-livro');
const btnCadastrarLivro = document.getElementById('btn-cadastrar-livro');
const closeModal = document.querySelector('.close-modal');

//abre modal ao clicar no botao "addlivro"
btnCadastrarLivro.addEventListener('click', () => {
    modalLivro.style.display = 'flex';
   
});

// Fecha o modal ao clicar no "X"
closeModal.addEventListener('click', () => {
    modalLivro.style.display = 'none';
}); 

// Fecha o modal ao clicar fora dele
window.addEventListener('click', (e) => {
    if (e.target === modalLivro) {
        modalLivro.style.display = 'none';
    }

    
});

document.getElementById('form-livro').addEventListener('submit', (e) => {
    e.preventDefault();
    
    const livros = JSON.parse(localStorage.getItem('livros')) || [];
    
     const novoLivro = new Livro(
        document.getElementById('titulo').value,
        document.getElementById('autor').value,
        document.getElementById('genero').value,
        document.getElementById('resumo').value,
        document.getElementById('imagem').value,
        document.getElementById('pdf').value
    );
    
   livros.push(novoLivro);
    localStorage.setItem('livros', JSON.stringify(livros));
    
    alert('Livro cadastrado!');
    modalLivro.style.display = 'none';
    atualizarLivrosDaSemana(); // Atualiza a lista na página
});

//ver livros semana
function atualizarLivrosDaSemana() {
    const livros = JSON.parse(localStorage.getItem('livros')) || [];
    const livrosOrdenados = livros.sort((a, b) => new Date(b.dataCadastro) - new Date(a.dataCadastro));
    const secaoLivros = document.querySelector('section'); // 👈 Seleciona a <section> do HTML

    // Limpa os livros de "Teste" e adiciona os cadastrados
    secaoLivros.innerHTML = ''; // Remove tudo dentro da <section>

    // Adiciona cada livro (máximo 2, como você queria)
    livrosOrdenados.slice(0, 2).forEach(livro => {
        secaoLivros.innerHTML += `
            <article class="livro">
                <h2>${livro.titulo}</h2>
                <img src="${livro.imagem || 'img/padrao.jpg'}" alt="Capa" class="capa-livro">
                <p><strong>Autor:</strong> ${livro.autor}</p>
                ${livro.pdf ? `<a href="${livro.pdf}" target="_blank">🔗 PDF</a>` : ''}
                <p class="textocaixa">${livro.resumo || 'Sem resumo.'}</p>
            </article>
        `;
    });
}

// Carrega os livros quando a página abre
document.addEventListener('DOMContentLoaded', () => {
    atualizarLivrosDaSemana(); // 👈 Isso preenche a seção com livros reais
    // ... (seu código existente de login, etc.)
});