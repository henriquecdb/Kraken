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

$sql = "SELECT Aluno.Ranking as Ranking, Aluno.Nome_Aluno as Competidor FROM Aluno ORDER BY RANKING DESC LIMIT 30;";
$result = $conn->query($sql);

$position = 1; // Initialize the position

if ($result->num_rows > 0) {
    while($aluno = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $position; ?></td>
            <td><?php echo $aluno['Competidor']; ?></td>
            <td><?php echo $aluno['Ranking']; ?> </td>
        </tr>
        <?php
        $position++; // Increment the position for the next row
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>






