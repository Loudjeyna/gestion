<?php
session_start();
if(isset($_SESSION['username']) &&  isset($_SESSION['password']) ){


?>
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
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
        <title>Administrateur</title>

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

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Tableau de bord</span>
                </div>
                <div class="box1">
                    <span class="text">Le nombre total de patients dans chaque service</span>
                    <span class="number"></span>
                </div>
                <div class="boxes">                    
                    <div class="box box2">
                        <span class="text"> Total de malades de  l’Urgence</span>
                        <span class="number">04</span>
                    </div>
                    <div class="box box3">
                        <span class="text">Total de malades de  la maternité</span>
                        <span class="number">05</span>
                    </div>
                    <div class="box box4">
                        <span class="text">Total de malades de Pédiatrie</span>
                        <span class="number">01</span>
                    </div>                    
                    
                </div>
                <div class="boxes2"> 
                <div class="box box5">
                    <span class="text">Total de malades de Hemodialyse</span>
                    <span class="number">03</span>
                </div>
                <div class="box box6">
                    <span class="text">Total de malades de Médecine</span>
                    <span class="number">04</span>
                    </div>
                    
                <div class="box box7">
                    <span class="text">Total de malades du Post-opératoir</span>
                    <span class="number">03</span>
                    </div>
                </div>
            </div>           
    </div>
</div>
    </section>

     <script src="scriptDash.js"></script> 
</body>
</html>
<?php
}else{
    header("Location: index.php");
    exit(); 
}
?>

