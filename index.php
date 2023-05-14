<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <title>identifier</title>
    <link rel="stylesheet" href="style.css">
    
    </title>

</head>

<body>
    <section>
        <div class="login-box">
            <form action="login.php" method="post">
                <h2>Identifier</h2>
                <?php if(isset($_GET['error'])) { ?>

<p class="error">  <?php echo $_GET['error'] ; ?> </p>
                
<?php }?>
                <div class="input-box">
                    
                        <input type="username" placeholder="username" name="username" >
                   
                </div>
    
                <div class="input-box">

                    <input type="password" placeholder="mot de pass" name="password">
                </div>
                
    
                <button><a href="Admin.html">Connecté</a></button>
                
            </form>
        </div>
    </section></body>

</html>



