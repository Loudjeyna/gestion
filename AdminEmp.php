<?php
$sname = "localhost";
$uname = "root";
$password ="";
$db_name = "gestion";
$conn = mysqli_connect($sname,$uname,$password,$db_name);
if(!$conn){
echo "connection failed ";

} 
    $query = "SELECT nom, prenom,email,tel,specialite,adress  FROM medecin";  
    $result = mysqli_query($conn, $query);
    $rows = mysqli_fetch_assoc($result);

    $query1 = "SELECT nom, prenom ,adress,email,service,adress,tel FROM infirmier";  
    $result1 = mysqli_query($conn, $query1);
    $rows1 = mysqli_fetch_assoc($result1);
    
    
    $query2 = "SELECT nom, prenom ,adress,email,tel FROM assistant";  
    $result2 = mysqli_query($conn, $query2);
    $rows2 = mysqli_fetch_assoc($result2);
    
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang ="fr">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="dash.css">
    <link rel="website icon" type="png" href="admin.png">
    
     <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        
    <meta http-equiv="X-UA-Compitable" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
   
    <!--- css-->
    <!-- icons-->
    
<head>
    <title>Utilisature</title>
    <style>
        .container {
        background-color: #4da3f3;
        width: 870px;
        margin-top: 50px;
        margin-left: 150px;
        padding-right: 270px;
        padding-bottom: 15px;
        padding-left: 25px;
        border-radius: 15px;
            }
            .button {
              
      padding: 10px 10px;
      margin: 10px;
      font-size: 14px;
      margin-top: 10px;
      background-color: #4090f1;
      border: none;
      border-radius: 25px;
      cursor: pointer;
      transition: background-color 0.3s;

                    }
                    .button:hover {
      background-color: #2459ed;
    }
    .h1{
        padding-top: 20px;
        
        margin-bottom: 20px;
    }
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            border-spacing: 0;
            font-weight: 20px;
        }

        th, td {
            padding: 11px 15px;
            text-align: left;
            border: 1px solid #000;

        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
            min-width: 120px;
        }
    </style>
</head>
<body>

<nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="admin.png" alt="">
            </div>
           
            <span class="logo_name">Administrateur</span>
        </div> 
        <div class="menu-items">
            <ul class="nav-links">
                <li> <a href="home.php">                    
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Page d'accueil</span>                    
                </a></li>
              
                
                <li> <a href="AdminEmp.php">                    
                    <i class="uil uil-user-circle"></i>
                    <span class="link-name">liste des utilisateurs </span>                    
                </a></li>

              

                <li> <a href="emp2.html">                    
                    <i class="uil uil-user-circle"></i>
                    <span class="link-name">Ajout empolyee </span>                    
                </a></li>

            </ul>
            <ul class="logout-mode">
                <li> <a href="index.php">                    
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
<div class="container">
        <h1 class="h1" >Liste du Medecin</h1>
        <table>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Specialite</th>
            <th>Adress</th>
            <th>tell</th>
            <th>Email</th>
        </tr>
        <?php foreach ($result as $row) : ?>
            <tr>
                <td><?php echo $row['nom']; ?></td>
                <td><?php echo $row['prenom']; ?></td>
                <td><?php echo $row['specialite']; ?></td>
                <td><?php echo $row['adress']; ?></td>
                <td><?php echo $row['tel']; ?></td>
                <td><?php echo $row['email']; ?></td>    

            </tr>
        <?php endforeach; ?>
         </table>
    </div>

    
<div class="container">
        <h1 class="h1" >Liste du infirmier</h1>
        <table>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Service</th>
            <th>Adress</th>
            <th>Num telephone</th>
            
            <th>Email</th>
        </tr>
        <?php foreach ($result1 as $row1) : ?>
            <tr>
                <td><?php echo $row1['nom']; ?></td>
                <td><?php echo $row1['prenom']; ?></td>
                <td><?php echo $row1['service']; ?></td>
                <td><?php echo $row1['adress']; ?></td>
                <td><?php echo $row1['tel']; ?></td>                
                <td><?php echo $row1['email']; ?></td>    

            </tr>
        <?php endforeach; ?>
         </table>
    </div>

    
<div class="container">
        <h1 class="h1" >Liste du Assistant</h1>
        <table>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Adress</th>
            <th>Num telephone</th>
            <th>Email</th>
        </tr>
        <?php foreach ($result2 as $row2) : ?>
            <tr>
                <td><?php echo $row2['nom']; ?></td>
                <td><?php echo $row2['prenom']; ?></td>
                <td><?php echo $row2['adress']; ?></td>
                <td><?php echo $row2['tel']; ?></td>   
                <td><?php echo $row2['email']; ?></td>    

            </tr>
        <?php endforeach; ?>
         </table>
    </div>

</body>
</html>
