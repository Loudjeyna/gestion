<?php
// Retrieve form data
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$service = $_POST['service'];
$medecin= $_POST['medecin'];
$date = $_POST['date'];
$mode = $_POST['mode'];



// Connect to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestion";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Insert form data into the database
$sql = "INSERT INTO hospitalisation (nom, prenom,service,medecin,dateAdmission,modeEntree) VALUES ('$nom', '$prenom','$service','$medecin','$date','$mode')";

if ($conn->query($sql) === TRUE) {
  //echo "Data inserted successfully";
  //sleep(2);
  header("Location: demend.html");
  exit();

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
