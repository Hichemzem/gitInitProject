<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/structure.css">
    <title>Document</title>
</head>
<body>

    <header>

        <h1>Titre du site</h1>
        <button class="hi" id="btnNav">Menu</button>
        <button class="hi" id="btnBlock">Block</button>
        <button class="hi" id="btnGrid">Grille</button>
    </header>
    <nav id="nav">
        <ul>
            <li><a href="structure.html">Acceuil</a></li>
            <li><a href="articles.html">Articles</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
        <span id="btnNav2"></span>
    </nav>
    <div class="content">
        <div class="form_register">
            <form action="Structure.html">
                <div class="form_input">
                    <label for="nom">nom</label>
                    <input type="text" name="nom" id="nom" required >
                    <span class="error_msg">erreur</span>
                </div>
                <div class="form_input">
                    <label for="prenom">prenom</label>
                    <input type="text" name="prenom" id="prenom">
                    <span class="error_msg">erreur</span>
                </div>
                <div class="form_input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age">
                    <span class="error_msg">erreur</span>
                </div>
                <div class="form_input">
                    <label for="civilite">vous etes : </label>
                    <input type="radio" name="civilite" id="civilite1" value="h">homme
                    <input type="radio" name="civilite" id="civilite2" value="f">femme
                    <span class="error_msg">erreur</span>
                </div>
                <div class="form_input">
                    <label for="mail">Email</label>
                    <input type="email" name="mail" id="mail">
                    <span class="error_msg">erreur</span>
                </div>
                <div class="form_input">
                    <label for="tel">Telephone</label>
                    <input type="tel" name="tel" id="tel">
                    <span class="error_msg">erreur</span>
                </div>
                <div class="form_input">
                    <label for="username">Identifiant</label>
                    <input type="text" name="username" id="username">
                    <span class="error_msg">erreur</span>
                </div>
                <div class="form_input">
                    <label for="password">Mot de passe</label>
                    <input type="text" name="password" id="password">
                    <span class="error_msg">erreur</span>
                </div>

                <input type="submit" value="s'inscrire">
            </form>
        </div>
    </div>
    <footer>
        <p>developper par aec19</p>
    </footer>

</body>

<script src="public/js/dom.js"></script>
<script src="Public/js/form_validator.js"></script>
</html>
