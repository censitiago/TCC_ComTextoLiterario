
CREATE DATABASE banco;
USE banco;

CREATE TABLE coordenadores (
    idcoordenador INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100)  UNIQUE NOT NULL,
    senha VARCHAR(100) NOT NULL
);

CREATE TABLE bolsistas (
    idbolsista INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100)  UNIQUE NOT NULL,
    senha VARCHAR(100) NOT NULL,
    id_coordenador INT,
    FOREIGN KEY (id_coordenador) REFERENCES coordenadores(idcoordenador)
);

CREATE TABLE livros (
    idlivro INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100),
    autor VARCHAR(100),
    genero VARCHAR(100),
    resumo TEXT,
    imagem VARCHAR(255),
    pdf VARCHAR(255),
    datacadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    id_bolsista INT,
    id_coordenador INT,
    FOREIGN KEY (id_bolsista) REFERENCES bolsistas(idbolsista),
    FOREIGN KEY (id_coordenador) REFERENCES coordenadores(idcoordenador)
);

