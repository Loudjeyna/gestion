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
    <link rel="stylesheet" href="inf.css">
    
    <meta http-equiv="X-UA-Compitable" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
   
    <!--- css-->
    <!-- icons-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
        <title>Tableau de bord </title>


<style>
        .container1 {
    
            background-color: #c6e2ff;
            width: 950px;
            padding-top: 20px;
            padding-bottom: 20px;
            margin-top: 20px;
            padding-left: -10px;
             margin-left: -200px;
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
    
        .edit {
    
    padding: 10px 10px;
    margin: 10px;
    font-size: 14px;
    margin-top: 10px;
    background-color:#53e4aa;
    border: none;
    border-radius: 15px;
    cursor: pointer;
    transition: background-color 0.3s;

}

.edit:hover {
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
          <img src="assis.jpg" alt="">
      </div>
     
      <span class="logo_name">Assistant Medecale</span>
  </div> 
  <div class="menu-items">
      <ul class="nav-links">
          <li> <a href="assis.php">                    
              <i class="uil uil-user-md"></i>
              <span class="link-name">Page d'accueil</span>                    
          </a></li>
          
          <li> <a href="add.html">             
              <i class="uil uil-plus-circle"></i>
              <span class="link-name">Cree Dossier Medical </span>                    
          </a></li>

          <li> <a href="gerer.php">                   
            <i class="uil uil-setting"></i>
             <span class="link-name">Gerer les dossiers</span>                    
         </a></li>


          <li> <a href="">                   
             <i class="uil uil-setting"></i>
              <span class="link-name">information </span>                    
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

<div class="container1">
<h1> </h1>
<table>
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>date naissance</th>
        <th>Mode entree</th>
        <th>N° d'admission</th>
        <th>Medicamemt</th>
        <th>Modifier</th>

    </tr>
    <?php foreach ($result as $row) : ?>
    <tr>
        <td><?php echo $row['nom']; ?></td>
        <td><?php echo $row['prenom']; ?></td>
        <td><?php echo $row['date_naissance']; ?></td>
        <td><?php echo $row['modeEntree']; ?></td>
        <td><?php echo $row['num_addm']; ?></td>
        <td><button class="button" type="submit" method="post"> Medicamemt</td>
        <td><button class="edit" type="">Modifier</td>

    </tr>

    <?php endforeach; ?>
    
</table>
</div>

     </div>

    <script src="add.js"></script>
    <script src="add.js"></script>
    
<script src="assis.js"></script>

</body>