<?php
include ('model/database.php');
include ('model/user.php');

$db = db_connect();
// //simulation d'un compte utilisateur :
// $usertest = [
//     "username" => "usertest",
//     "password" => "password"
// ];

//Recuperation des données saisies
$user = $_POST["username"];
$password = $_POST["password"];


//verification du compte utilisateur
if (checkUser($db,$user,$password))
{
    //creation d'une session utilisateur
    session_start();
    $_SESSION['username'] = $user;

    header("location:profile.php");
} 
else {
    header("location:connexion.php");
}


var_dump($_SESSION);

$_SESSION['username']= $user;
?>