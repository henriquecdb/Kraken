<?php
$servername = "108.179.253.195";
$username = "proje500_ralves";
$password = "5cYPggNpnK36";
$dbname = "proje500_G42023";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idQuestao = $_POST['id_questao'];
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $pontuacao = $_POST['pontuacao'];
    $categoria = $_POST['categoria'];
    $descricaoInput = $_POST['descricao_input'];
    $descricaoOutput = $_POST['descricao_output'];

    $sql = "INSERT INTO Questao (ID_Questao, Titulo, Descricao, Pontuacao, fk_Categoria_ID, Descricao_Input, Descricao_Output)
            VALUES ($idQuestao, '$titulo', '$descricao', $pontuacao, $categoria, '$descricaoInput', '$descricaoOutput')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../pages/problemset.php");
        exit(); 
    } else {
        echo "Erro ao cadastrar a questão: " . $conn->error;
    }
}

$conn->close();
