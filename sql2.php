<?php

$connexion = new mysqli('localhost:3306', 'root', 'root', 'php_shop')

$req = 'SELECT * FROM `products`'

$products = $connexion->query($req);

foreach($products as $product) :

?>

<h2>Nom du produit : <?= $product['name'] ?></h2>
<h2>Catégorie du produit : <?= $product['catégorie'] ?></h2>
<h2>Prix : <?= $product['price'] ?></h2>

<?php endforeach ?>
        
</body>

</html>
