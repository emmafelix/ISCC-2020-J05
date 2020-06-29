<nav>
<?php if($navigation=="Accueil"):?>
                <strong><a style="color:#17c1ff" href="vitrine-acceuil.php">Acceuil</a></strong>
<?php else:?>
    <a href="vitrine-acceuil.php">Acceuil</a>
<?php endif;?>

<?php if($navigation=="Contact"):?>
                <strong><a style="color:#17c1ff" href="vitrine-contacts.php">Contact</a><strong>
<?php else:?>   
                <a href="vitrine-contacts.php">Contact</a>
<?php endif;?>

<?php if($navigation=="Programme"):?>
    <strong><a style="color:#17c1ff" href="vitrine-programme.php">Programme</a><strong>
    <?php else:?> 
                <a href="vitrine-programme.php">Programme</a>
                <?php endif;?>   
            </nav>