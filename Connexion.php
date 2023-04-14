<?php include("layout/header.php") ?>
<?php include("layout/nav.php")?>


<form action="connexion_traitement.php" method="post">
    <input type="text" name="username">
    <input type="password" name="password">
    <input type="submit" value="se connecter">
</form>

<?php include ("layout/footer.php")?>