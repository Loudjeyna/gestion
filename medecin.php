<?php
$sname = "localhost";
$uname = "root";
$password ="";
$db_name = "gestion";
$conn = mysqli_connect($sname,$uname,$password,$db_name);
if(!$conn){
echo "connection failed ";

} 
    $query = "SELECT nom, prenom ,date_naissance,modeEntree,num_addm FROM patient";  
    $result = mysqli_query($conn, $query);
    $rows = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>

<html lang ="fr">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="med.css">
    <link rel="website icon" type="png" href="doctor-icon.png">
     <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
     
        <title>Tableau de bord </title>


    <style>
        .container {
    
            background-color: #c6e2ff;
            width: 950px;
            margin-top: 1.3px;
            margin-left: 80px;
            padding-bottom: 20px;
            padding-top: 20px;
            padding-left: 1px;
            padding-right: 1px;
            border-radius: 15px;
        }
    
        .button {
    
            padding: 10px 10px;
            margin: 10px;
            font-size: 14px;
            margin-top: 10px;
            background-color: #4090f1;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            transition: background-color 0.3s;
    
        }
    
        .button:hover {
            background-color: #2459ed;
        }
    
        .sortie {
    
    padding: 10px 10px;
    margin: 10px;
    font-size: 14px;
    margin-top: 10px;
    background-color: red;
    border: none;
    border-radius: 15px;
    cursor: pointer;
    transition: background-color 0.3s;

}

.sortie:hover {
    background-color: #2459ed;
}

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            border-spacing: 0;
        }
    
        th,
        td {
            padding: 11px 18.5px;
            text-align: left;
            border: 1px solid #000;
        }
    
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        </style>
    
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
                
                <li> <a href="demend.html">             
                    <i class="uil uil-plus-circle"></i>
                    <span class="link-name">Ajout un demande </span>                    
                </a></li>
                
                <li> <a href="">             
                    <i class="uil uil-plus-circle"></i>
                    <span class="link-name">Planinication traitements </span>                    
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
    
        <div class="dash-content">
    
            <div class="box1"  style = "margin-top: 60px;">
                <span class="text" >La liste de  patients   </span>
                
            </div>
        
    <div class="container">
        <h1> </h1>
        <table>
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
                <th>date naissance</th>
                <th>Mode entree</th>
                <th>N° d'admission</th>
                <th>Medicamemt</th>
                <th>Sortie</th>
</tr>
    <?php
    $indexes = [0, 1, 2,3,4,5,6,7,8]; // Array of indexes
    foreach ($result as $index => $row) :
    ?>
    <tr>
        
        <td><?php echo $row['nom']; ?></td>
                <td><?php echo $row['prenom']; ?></td>
                <td><?php echo $row['date_naissance']; ?></td>
                <td><?php echo $row['modeEntree']; ?></td>
                <td><?php echo $row['num_addm']; ?></td>
             
        <td><button class="button" type="submit" onclick="buttonClicked(<?php echo $indexes[$index]; ?>)">Medicamemt</button></td>
        <td><button class="sortie" type=""> Sorite</td>

    </tr>
    <?php endforeach; ?>
</table>
<script>
    function buttonClicked(index) {
        index = index +1 ;
        console.log("Button clicked with index: " + index);
        // Perform additional operations based on the button index
      
    }
</script>

    </div>
</body>
<script src="sortie.js"></script>
</html>

