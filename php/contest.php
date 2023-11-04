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

$sql = "SELECT Nome_Competicao, ID_Competicao, Data_Inicio, Data_Fim FROM Competicao;";
$result = $conn->query($sql);

$position = 1; // Initialize the position

if ($result->num_rows > 0) {
    while ($competicao = $result->fetch_assoc()) {
        $start_date = new DateTime($competicao['Data_Inicio']);
        $end_date = new DateTime($competicao['Data_Fim']);
        
        $duration = $start_date->diff($end_date);

        ?>
        <tr>
            <td><?php echo $competicao['ID_Competicao']; ?></td>
            <td><?php echo $competicao['Nome_Competicao']; ?></td>
            <td><?php echo $competicao['Data_Inicio']; ?></td>
            <td><?php echo $duration->format('%a dias %H horas'); ?></td>
            <td>Oktoplus</td>
        </tr>
        <?php
        $position++; // Increment the position for the next row
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>