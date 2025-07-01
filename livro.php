<?php 
// Conexão
$conn = new mysqli("localhost", "root", "", "banco.mwb");
if ($conn->connect_error) die("Erro: " . $conn->connect_error);

// Inserção
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $genero = $_POST['genero'];
    $resumo = $_POST['resumo'];
    $imagem = $_POST['imagem'];
    $pdf = $_POST['pdf'];
    $sql = "INSERT INTO livros (titulo, autor, genero, resumo, imagem, pdf)
     VALUES ('$titulo', '$autor', '$genero', '$resumo', '$imagem', '$pdf')";
    if ($conn->query($sql) === TRUE) {
        echo "Livro cadastrado com sucesso!<br><a href='listar.php'>Ver lista</a>";
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>

<?php
//Listar 
// Conexão
$conn = new mysqli("localhost", "root", "", "banco.mwb");
if ($conn->connect_error) die("Erro: " . $conn->connect_error);

// Consulta
$resultado = $conn->query("SELECT * FROM livros");

echo "<h2>Lista de Livros</h2>";
echo "<a href='livros.php'>Cadastrar novo</a><br><br>";

if ($resultado->num_rows > 0) {
    echo "<ul>";
    while ($linha = $resultado->fetch_assoc()) {
        echo "<li>{$linha['titulo']} ({$linha['autor']}) {$linha['genero']} {$linha['resumo']} {$linha['imagen']} {$linha['pdf']}</li>";
    }
    echo "</ul>";
} else {
    echo "Nenhum livro cadastrado.";
}
?>










<?php
$titulo = $_POST["titulo"];
echo ("Bem vindo. $titulo")
?>

