<?php
    session_start();
    include_once("../../Config/connexion.inc.php");
  
    $user = $_POST['user'];
    $mdp = $_POST['mdp'];
    $req = "SELECT * from admin where user = '$user' AND password = '$mdp'";
    $res = mysqli_query($conn,$req);
    if(mysqli_num_rows($res) == 0){
        echo("Account doesn't exist, redirecting in 3 seconds");
        header( "refresh:2;url=../../Dashbord_Admin/login.php" );
    }else{
        $row = mysqli_fetch_assoc($res);
        $_SESSION['user'] = $row['user'];
        $_SESSION['mdp'] = $row['password'];
       
        header( "refresh:2;url=../../Dashbord_Admin/Dashboard/dashbordadmin.html" );

    }
?>