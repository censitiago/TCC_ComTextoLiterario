<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="PágI.css">
    <link rel="shortcut icon" type="imagex/png" href="imgpaginicial/imgComtexto.jpg">
    <title>ComTexto Literário</title>
</head>





<body>

<?php
session_start();

// Verifica se está logado
if (!isset($_SESSION['coordenador'])) {
    header("Location: index.php");
    exit;
}
?>

<?php
     function Recuperar(){
            $connection = require("conexao.php");
            $sql = "SELECT idlivros, titulo, autor, genero, resumo, imagem, pdf  FROM livros";

            $result = $mysqli->query($sql);
            echo "<table>";
            while ($row = $result->fetch_assoc()) {           
                echo "<div>"; 
                echo "<tr>"                          
                        . "<td hidden>".$row["idlivros"]."</td>"
                        . "<td>".$row["titulo"]."</td>"
                           . "<td>".$row["autor"]."</td>"
                         . "<td>".$row["genero"]."</td>"
                          . "<td>".$row["resumo"]."</td>"
                           . "<td>".$row["imagem"]."</td>"
                            . "<td>".$row["pdf"]."</td>"
                    ."</tr>";
        
                echo "</div>";
            }
            echo "</table>";
        }
?>

<!-- Modal de Cadastro Livro (hidden por padrão) -->
<div id="modal-livro" class="modal" style="display: none;">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <h2>Cadastrar Livro</h2>
        <form id="form-livro" method="post" action="livro.php">
            <input type="text" id="titulo" placeholder="Título" name="titulo" required>
            <input type="text" id="autor" placeholder="Autor" name="autor" required>
            <input type="text" id="genero" placeholder="Gênero" name="genero" required>
            <textarea id="resumo" placeholder="Resumo" name="resumo" required> </textarea>
            <input type="text" id="imagem" placeholder="URL da Imagem (Capa)" name="imagem" required>
            <input type="file" accept=".pdf"  id="pdf" placeholder="Link do PDF (opcional)" name="pdf" required>
            <button type="submit">Salvar</button>
        </form>
    </div>
</div>

<!-- Menu de Bolsita--> 
<div id="modal-bolsista" class="modal" style="display: none;">
<div class="modal-content">
    <span class="close-modalB">&times;</span>
    <h2>Cadastrar Bolsista</h2>
<form id="form-bolsista" method="post" action="bolsista.php">
    <input type="text" id="nome"  placeholder="Nome" name="nome">
     <input type="text" id="email" placeholder="Email" name="email">
     <input type="password" id="senha" placeholder="Senha" name="senha">
    <button type="submit">Salvar</button>
</form>
</div>
</div>

    <div class="menu-container">
        <button id="menu-toggle">
            <img src="imgpaginicial/menu-icon.png" alt="">
        </button>
        <div id="menu-opcoes" class="menu-oculto" style="display: none;">
            <a id="entrarconta" href="Telalogin.html"><img id="iconlogin" src="imgpaginicial/conta-removebg-preview.png" alt=""> <h3>  &nbsp &nbsp Coordenador</h3></a>
            <br>
            <br>
             <a id="entrarconta" href="TelaloginB.html"><img id="iconlogin" src="imgpaginicial/conta-removebg-preview.png" alt=""> <h3>  &nbsp &nbsp Bolsista</h3></a>
            <br>
            <a href="#">ComTexto</a>
        </div>

        <nav id="menu" class="menu">

        </nav>

        <a id="botao-livro" href="biblioteca.html"><img src="imgpaginicial/livro.png" alt=""></a>
        <a id="botao-calendario" href="Telacalendario.html"><img src="imgpaginicial/calendario-removebg-preview.png"
                alt=""></a>
        <div id="caixa-logoif">
            <img id="logo" src="imgpaginicial/Logo_IFC_vertical_Ibirama.png" alt="">
        </div>
    </div>

    <header id="cabecalho">

        <img id="imgComTexto" src="imgpaginicial/imgComtexto.jpg" alt="imagem">
        <div class="titulos">
            <h1 class="TituloP">ComTexto Literário</h1>
            <h2 id="subtitulo">Descolonizando Leituras</h2>
        </div>
        <a id="logout" class="logout-link" href="#" onclick="logout()" style="display:none;"> <img src="imgpaginicial/imagemmenorlogout-removebg-preview.png" alt=""></a>
    </header>

    <div class="linhahorizontal"></div>
    <div class="linhavertical"></div>
    <main>
        <div class="topicos">
            <div id="container-cad-livro" style="display: none;">

                <button itemid="toggle" id="btn-cadastrar-livro">
                    <img id="imglivroadd" src="imgpaginicial/107256-removebg-preview.png" alt="">
                </button>
                <p id="texto-cad-livro">Adicionar Livro</p>
            </div>

            <div id="livrosemana">
                <div id="fundo">
                    <h2 id="textolivro">Livros da semana</h2>
                </div>
            </div>
            <div id="container-cad-bolsista" style="display: none;">
                <button itemid="toggle" id="btn-cadastrar-bolsista" style="display: none;"><img src="imgpaginicial/107256-removebg-preview.png" alt=""></button>
<p id="texto-cad-bolsista">Adicionar Bolsista</p>
            </div>    
        </div>

        <section>
            <article class="livro">
                <h2>Teste</h2>
                <img id="imagem" src="https://m.media-amazon.com/images/I/71NYL2AbBIL.jpg" alt="">
                <p class="textocaixa">"Lorem ipsum dolor sit amet..."</p>
            </article>
            <article class="livro">
                <h2>Teste</h2>
                <img id="imagem" src="https://m.media-amazon.com/images/I/71NYL2AbBIL.jpg" alt="">
                <p class="textocaixa">"Lorem ipsum dolor sit amet..."</p>
            </article>
        </section>
    </main>


    <footer>
        <div class="infofooter">
            <h2>IFC - Campus Ibirama</h2> &nbsp; &nbsp;
            <h4> ComTextoLiterário@gmail.com</h4>
        </div>
        <h6>Todos os direitos reservados ComTexto Literário</h6>
    </footer>
    <script src="Livro.js"></script>
    <script src="PágI.js" defer></script>

    Recuperar();
</body>

</html>