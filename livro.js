class Livro{
    constructor(titulo, autor, genero, resumo, imagem, pdf){
        this.titulo = titulo;
        this.autor = autor;
        this.genero = genero;
        this.resumo = resumo;
        this.imagem = imagem; //url
        this.pdf = pdf; //link
        this.dataCadastro = new Date();

    }

    toHTML() {
        return `
            <article class="livro">
                <h2>${this.titulo}</h2>
                <img src="${this.imagem || 'img/padrao.jpg'}" alt="Capa do livro" class="capa-livro">
                <p><strong>Autor:</strong> ${this.autor}</p>
                ${this.pdf ? `<a href="${this.pdf}" target="_blank">🔗 Ler PDF</a>` : ''}
                <p class="textocaixa">${this.resumo || 'Sem resumo disponível.'}</p>
            </article>
        `;
    }
}