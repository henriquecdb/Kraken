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

$sql = "SELECT Tipo FROM Categoria";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($categoria = $result->fetch_assoc()) {
        ?>
          <div class="col-xxl-4 mb-1">
            <div class="card" style="width: 18rem">
              <div class="card-body">
                <h5 class="card-title"> <?php echo $categoria['Tipo']; ?> </h5>
                <p class="card-text"> 
                </p>
                <a href="../views/problemset.php?categoria=<?php echo $categoria['Tipo']; ?>">
                    <?php echo $categoria['Tipo']; 
                    ?>
                </a>
              </div>
            </div>
          </div>
        <?php
    }
} else {
    echo "Nenhuma questão encontrada.";
}

$conn->close();
?>