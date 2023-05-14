
<?php
$sname = "localhost";
$uname = "root";
$password ="";
$db_name = "gestion";
$conn = mysqli_connect($sname,$uname,$password,$db_name);
if(!$conn){
echo "connection failed ";

} 

$query = "SELECT nom, prenom ,date_naissance,modeEntree,num_addm,genre FROM patient";  
$result = mysqli_query($conn, $query);
$rows = mysqli_fetch_assoc($result);
  



    
?>
<!DOCTYPE html>
<html lang ="fr">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="assis.css">
    <link rel="stylesheet" href="inf.css">
    
    
     <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        
    <meta http-equiv="X-UA-Compitable" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
   
    <!--- css-->
    <!-- icons-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
        <title>Tableau de bord </title>


<body>
<title>Medicamemt</title>
    <style>
        .container1 {
                
        background-color: #c6e2ff;
        width: 1000px;
        margin-top: 50px;

        padding-top: 20px;
        padding-right: 20px;
        padding-bottom: 20px;
        padding-left: 25px;
font-size: 18px;
        margin-left: -250px;
        margin-top: 140px;
            }
            .button {
              
      padding: 10px 10px;
      margin: 10px;
      font-size: 12px;
      margin-top: 10px;
      background-color: #4090f1;
      border: none;
      border-radius: 25px;
      cursor: pointer;
      transition: background-color 0.3s;
      width: 70px;


                    }
                    .button:hover {
      background-color: #2459ed;
    }
    .sortie {
    
    padding: 10px 10px;
    margin: 10px;
    font-size: 12px;
    margin-top: 10px;
    background-color: red;
    border: none;
    border-radius: 15px;
   
    width: 70px;
    transition: background-color 0.3s;
    

}


        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            border-spacing: 0;
        }

        th, td {
            padding: 5px 5px;
            text-align: left;
            border: 1px solid #000;

        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
            min-width: 120px;
            min-height: 140px;
        }
    </style>

<nav>
  <div class="logo-name">
      <div class="logo-image">
          <img src="assis.jpg" alt="">
      </div>
     
      <span class="logo_name">Assistant Medecale</span>
  </div> 
  <div class="menu-items">
      <ul class="nav-links">
          <li> <a href="assis.html">                    
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
     </div>
     <body>
     <div class="container1">
        <h1> </h1>
        <table>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Genre</th>
                <th>date naissance</th>
                <th>Mode entree</th>
                <th>N° d'admission</th>
                <th>Modifier</th>
                <th>Sortie</th>

            </tr>
            <?php foreach ($result as $row) : ?>
            <tr>
                <td><?php echo $row['nom']; ?></td>
                <td><?php echo $row['prenom']; ?></td>
                <td><?php echo $row['genre']; ?></td>
                
                <td><?php echo $row['date_naissance']; ?></td>
                <td><?php echo $row['modeEntree']; ?></td>
                <td><?php echo $row['num_addm']; ?></td>
                <td><button class="button" type="submit">  Modifier  </td>
                <td><button class="sortie" type="sortie" disabled> Sorite</td>

            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

  
     
    <script src="add.js"></script>
    <script src="add.js"></script>
    
<script src="assis.js"></script>
</body>
</html>
