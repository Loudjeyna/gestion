<?php
// Retrieve form data
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$usernamee = $_POST['username'];
$passwordd = $_POST['password'];
$email = $_POST['email'];
$tel = $_POST['phone'];
$role = $_POST['role'];
$service = $_POST['service'];
$specialite  = $_POST['specialite'];

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

if($role == 'Assistant') {

// Insert form data into the database
$sql = "INSERT INTO medecin (nom, prenom,nomUtilis,mdp,email,tel) VALUES ('$nom', '$prenom','$usernamee','$passwordd','$email','$tel')";

if ($conn->query($sql) === TRUE) {
  echo "Data inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else 
if($role == 'Infirmier')
{
// Insert form data into the database
$sql = "INSERT INTO infirmier (nom, prenom,nomUtilis,mdp,email,service,tel) VALUES ('$nom', '$prenom','$usernamee','$passwordd','$email','$service','$tel')";


if ($conn->query($sql) === TRUE) {
  echo "Data inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else 
if($role == 'Medecin')
{
// Insert form data into the database
$sql = "INSERT INTO medecin (nom, prenom,nomUtilis,mdp,email,tel,specialite) VALUES ('$nom', '$prenom','$usernamee','$passwordd','$email','$tel','$specialite')";

if ($conn->query($sql) === TRUE) {
  echo "Data inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}






// Close the database connection
$conn->close();
?>
