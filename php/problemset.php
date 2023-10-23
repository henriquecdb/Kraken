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

$sql = "SELECT Questao.ID_Questao, Questao.Titulo, Categoria.Tipo FROM Questao INNER JOIN Categoria ON Questao.fk_Categoria_ID = Categoria.ID_Categoria ORDER BY Questao.ID_Questao";
$result = $conn->query($sql);



if ($result->num_rows > 0) {

    while($questao = $result->fetch_assoc()) { 
        ?><tr>
            <td><?php echo $questao['ID_Questao']; ?></td>
            <td><?php echo $questao['Titulo']; ?> </td>
            <td><?php echo $questao['Tipo']; ?> </td>
            <td>0</td>
            <td>Fácil</td>
        </tr>
        <?php
    }
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

