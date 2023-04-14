<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="Public/css/structure.css">
    </head>

    <body>

        <header>
        
            <img src="Public/img/Logo-Final.jpg" alt="">
            <h1>Taalok-Time</h1>
        
    
        </header>
        <nav>
            <ul>
                <li><a href="index.html">Acceuil</a></li>
                <li><a href="Liste_articles.html">Articles</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="">Déconnexion</a></li>
    
            </ul>
        </nav>
        <form action="contact_traitement.php" method="post">
            <label for="">Nom</label>
            <input type="text" name="nom">

            <label for="">Prenom</label>
            <input type="text" name="prenom">

            <label for="">Telephone</label>
            <input type="tel" name="tel">

            <label for="">Email</label>
            <input type="email" name="mail">

            <input type="submit">


        </form>

       
    </body>

    <footer>
        <p>Copyright @ Taalok-Time</p>
    </footer>


</html>