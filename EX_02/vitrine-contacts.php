<html>

<head>
    <title>Contact</title>
    <link rel="stylesheet" href="../style/vitrine.css">
    <meta charset="utf-8">
</head>



<body>
    <header>
    <?php
    $navigation="Contact";
       include ("header.php");
       ?>
    </header>
    <div class="contenu">
        <h2>
            Contact
        </h2>
        <form>
            <div class="champs">
                
                <input type="text" placeholder="Votre nom">
                <br>
                
                <input type="email" placeholder="Votre email">

                
                <input class="messagepart" placeholder="Comment améliorer mon site ?">
                <div class="bouton">
                    <button type="submit">Envoyer</button>
                </div>
            </div>
        </form>
    </div>
    <footer>
    <?php
        include ("footer.php");
        ?>
    </footer>
    </div>
</body>

</html>