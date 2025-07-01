CREATE DATABASE banco;
USE banco;

CREATE TABLE livros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100),
    autor VARCHAR(100),
    genero VARCHAR(100),
    resumo VARCHAR(100),
    imagem VARCHAR(100);
    pdf VARCHAR(100)
    datacadastro timestamp(100)
);