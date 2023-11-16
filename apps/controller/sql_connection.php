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

$sql = "SELECT * FROM Aluno";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "Nome: " . $row["Nome_Aluno"]. " - Email: " . $row["Email"]. " - Data de Nascimento: " . $row["Data_Nascimento"]. " - ID Aluno: " . $row["ID_Aluno"] . " - Ranking: " . $row["Ranking"] . "<br>";
    }
  } else {
    echo "0 results";
  }

$conn->close();
?>