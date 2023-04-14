<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/css/structure.css">
    <title>Document</title>
</head>
<body>
    <?php session_start(); ?>
    <header>
        
        <img src="Public/img/280.jpg" alt="">
        <h1>Titre du site</h1>
        <?php 
        if(isset($_SESSION["username"])){
            ?>
        <span class="class_connect">
            <p>usertest</p>
            <a href="deconnexion.php">Se deconnecter</a>
        </span>

        <?php } else { ?>
        
        <span class="connect_status">
            <a href="connexion.php">Se connecter</a>
        </span>
        <?php } ?>

       <!-- <button id="btnNav">Menu</button> 
        <button id="btnGrid">Grille</button>
        <button id="btnbloc">Bloc</button> -->
        
    

    </header>
