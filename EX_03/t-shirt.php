<html>

<body>
<h3>   
    <?php 
$nom_produit = "T-shirt simple";
$couleur = "Blanc";
$prix = "10.50";
$disponible = "true";
$quantite = "10";

    echo "Le nom du produit est " .$nom_produit. ". ";
    echo "Il reste " .$quantite. " en stock. ";
    echo "Le produit " .$nom_produit. " est de couleur " .$couleur. ". ";
 ?>
 </h3>
<h4> 
    <?php 
    $p1 = $prix*3; 
    $p2 = $quantite*$prix;

    echo "Acheter 3 produits coûterait " .$p1. "€. ";
    echo "Acheter la totalité des produits disponibles coûterait " .$p2."€. ";
    echo "Si les 3 produits sont vendus";
?>
    </h4>
<p>
    <?php
if($disponible = true){
    echo "Le produit " .$nom_produit. " est disponible en ligne. ";}
    
if($disponible = false){
    echo "Le produit " .$nom_produit. " est malheureusement plus disponible.";}
    

if($quantite>5){
    echo "Il reste " .$quantite. " produits en magasin. ";}

elseif($quantite<5){
    echo "Il ne reste plus que " .$quantite. " produits en magasin. ";}

elseif($quantite=1){
    echo "Il ne reste plus qu'un produit en magasin.";}

elseif($quantite=0){
    echo "Il ne reste plus de produit en magasin. ";}

?>
</p>
</body>
</html>