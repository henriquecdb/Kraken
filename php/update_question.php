<?php
$servername = "108.179.253.195";
$username = "proje500_ralves";
$password = "5cYPggNpnK36";
$dbname = "proje500_G42023";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados do formulário
    $idQuestao = $_POST["id"];
    $titulo = $_POST["titulo"];
    $descricao = $_POST["descricao"];
    $pontuacao = $_POST["pontuacao"];
    $categoria = $_POST["categoria"];
    $descricao_input = $_POST["descricao_input"];
    $descricao_output = $_POST["descricao_output"];

    $sql = "UPDATE Questao 
            SET Titulo = '$titulo', Pontuacao = '$pontuacao', Descricao = '$descricao', 
                fk_Categoria_ID = '$categoria', Descricao_Input = '$descricao_input', 
                Descricao_Output = '$descricao_output' 
            WHERE ID_Questao = $idQuestao";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../pages/unic.php?id=$idQuestao");
        exit();
    } else {
        echo "Erro ao atualizar a questão: " . $conn->error;
    }
}

$conn->close();
