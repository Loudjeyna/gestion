<?php
session_start();
include "db_conn.php";
if(isset($_POST['username'])  && isset($_POST['password']) ){

    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        
    }
$username = validate($_POST['username']);
$password = validate($_POST['password']);
if (empty($username)){
    header("Location: index.php?error=Nom d'utilisatuer est requis");
    exit();
}else if(empty($password)) {
    header("Location: index.php?error=Mot de pass est requis");
    exit();
} else {
    
    $sql = " SELECT * FROM admin WHERE username  = '$username' AND password ='$password' ";
    $sql2 = " SELECT * FROM medecin WHERE nomUtilis  = '$username' AND mdp ='$password' ";
    $sql3 = " SELECT * FROM infirmier WHERE nomUtilis  = '$username' AND mdp ='$password' ";
    $sql4 = " SELECT * FROM assistant WHERE nomUtilis  = '$username' AND mdp ='$password' ";
    

    $result = mysqli_query($conn, $sql);
    $result2 = mysqli_query($conn, $sql2);
    $result3 = mysqli_query($conn, $sql3);
    $result4 = mysqli_query($conn, $sql4);

    if(mysqli_num_rows($result) === 1)
    {

$rows = mysqli_fetch_assoc($result);

if($rows['username'] === $username &&  $rows['password'] === $password )

{
$_SESSION['username'] = $rows['username'];
$_SESSION['password'] = $rows['password'];
header("Location: home.php");
exit(); 
}

else {
    header("Location: index.php?error=Incorrect nom d'utilisation ou mot de pass ");
    exit(); 
}

    } else if(mysqli_num_rows($result2) === 1){
        $rows2 = mysqli_fetch_assoc($result2);
        if($rows2['nomUtilis'] === $username &&  $rows2['mdp'] === $password )

        {
        $_SESSION['username'] = $rows2['nomUtilis'];
        $_SESSION['password'] = $rows2['mdp'];
        header("Location: medecin.php");
        exit(); 
        
    
        }


    } else if(mysqli_num_rows($result3) === 1){
        $rows3 = mysqli_fetch_assoc($result3);
        if($rows3['nomUtilis'] === $username &&  $rows3['mdp'] === $password )

        {
        $_SESSION['username'] = $rows3['nomUtilis'];
        $_SESSION['password'] = $rows3['mdp'];
        header("Location: inf.php");
        exit(); 
        
    
        }


    
    } else if(mysqli_num_rows($result4) === 1){
        $rows4 = mysqli_fetch_assoc($result4);
        if($rows4['nomUtilis'] === $username &&  $rows4['mdp'] === $password )

        {
        $_SESSION['username'] = $rows4['nomUtilis'];
        $_SESSION['password'] = $rows4['mdp'];
        header("Location: assis.html");
        exit(); 
        
    
        }


    
    }
    else {
        header("Location: index.php?error=Incorrect nom d'utilisation ou mot de pass ");
         exit(); 
    }

}
//-------------------

///---------------------

} else{
    header("Location: index.php");
    exit();
}
?>
