
<?php

if (isset($_POST['submit'])) {
    if (isset($_POST['nom']) && isset($_POST['prenom']) &&
        isset($_POST['service'])   
        
        ) {
        
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $service = $_POST['service'];    

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "gestion";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT id FROM patient WHERE id = ? LIMIT 1";
            $login = "INSERT INTO patient(nom,prenom,service) values(?, ?, ?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $stmt->bind_result($resultId);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($login);
                $stmt->bind_param("sss",$nom,$prenom,$service);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers ";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>

<!DOCTYPE html>
<html lang ="fr">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="medAjout.css">
  
    <link rel="stylesheet" href="med.css">
   <link rel="website icon" type="png" href="admin.png">
     <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        
    <meta http-equiv="X-UA-Compitable" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
   
    <!--- css-->
    <!-- icons-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <title>Demend d'hospitalisation</title>

</head>
<body>

<nav>
    <div class="logo-name">
        <div class="logo-image">
            <img src="doctor-icon.png" alt="">
        </div>
       
        <span class="logo_name">Medecin</span>
    </div> 

    <div class="menu-items">
        <ul class="nav-links">
            <li> <a href="medecin.php">                     
                <i class="uil uil-user-md"></i>
                <span class="link-name">Page d'accueil</span>                    
            </a></li>
            
            
            <li> <a href="medAjout.html">                    
                <i class="uil uil-plus-circle"></i>
                <span class="link-name">Ajout un demande  </span>                    
            </a></li>
            
        </ul>
        <ul class="logout-mode">
            <li> <a href="login.php">                    
                <i class="uil uil-sign-out-alt"></i>
                <span class="link-name">Déconnection</span>                                         
             </a></li>

             <li class="mode"> 
                <a href="#">                    
                <i class="uil uil-moon"></i>
                <span class="link-name">Thème sombre</span>                                         
             </a>
           <div class="mode-toggle">
           <span class="switch"></span>
        </div>
        </li>                 
        </ul>
    </div> 
</nav>
<section class="dash">
    <div class="top">
        <i class="uil uil-bars sidebar-toggle"></i>
        <div class="search-box">

            <i class="uil uil-search"></i>
             <input type="text" placeholder="Recherche ...">
                            
        </div>
    </div>
    
</body>
</html>

</body>
</html>
