<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Inclua a configuração da conexão aqui
    require('sql_connection.php');
    $conn = connect_db();

    // Receba os dados do formulário
    $nomeCompeticao = $_POST['nomeCompeticao'];
    $dataInicio = $_POST['dataInicio'];
    $dataFim = $_POST['dataFim'];

    // Faça as validações necessárias antes de inserir no banco de dados

    // Exemplo de validação de data (pode ser aprimorado conforme necessário)
    if (strtotime($dataInicio) === false || strtotime($dataFim) === false) {
        echo "Erro: Formato de data inválido.";
    } else {
        // Utilize prepared statements para prevenir SQL injection
        $stmt = $conn->prepare("INSERT INTO Competicao (Nome_Competicao, Data_Inicio, Data_Fim) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nomeCompeticao, $dataInicio, $dataFim);

        if ($stmt->execute()) {
            echo "Competição cadastrada com sucesso!";
        } else {
            echo "Erro ao cadastrar a competição: " . $stmt->error;
        }

        $stmt->close();
    }

    $conn->close();
}
?>
