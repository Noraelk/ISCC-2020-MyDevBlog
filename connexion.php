<!DOCTYPE html>

    <link rel="stylesheet" type="text/css" href="index.css" media="screen" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <head>
        <meta charset="utf-8" />
        <title>Connexion</title>
    </head>

<body>
    
    <div class="w3-bar w3-black w3-hide-small">
        <a href="connexion.php" class="w3-bar-item w3-button w3-right">Connexion</i></a>
        <a href="contact.php" class="w3-bar-item w3-button w3-right">Contact</i></a>
        <a href="articles.php" class="w3-bar-item w3-button w3-right">Articles</i></a>
        <a href="index.php" class="w3-bar-item w3-button w3-right">Accueil</i></a>
    </div>

    <?php
    session_start();
    ?>

    <div class = "contenu">
    <h2 class="txt">Connexion</h2>

    <form action="securite.php" method="post">
        <input type="text" placeholder="Login" name="login">
            <br>
        
            <input type="password" placeholder="Password" name="pwd">
            <br>
            <button type="submit" value="Envoyer">Envoyer</button>
        </form>
        </body>
    </html>
    </div>
    
    <footer>
        <div class="w3-bar w3-black w3-bottom w3-hide-small">
            <a href="https://www.instagram.com/noraelkhayati/" class="w3-bar-item w3-button"><i class="fa fa-instagram"></i></a>
            <a href="https://fr.linkedin.com/in/nora-el-khayati-912b86197" class="w3-bar-item w3-button"><i class="fa fa-linkedin"></i></a>
            <a href="contact.php" class="w3-bar-item w3-button w3-right">noraelk@outlook.com</i></a>
        </div>
    </footer>

</body>        
</html>