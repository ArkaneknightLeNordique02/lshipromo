<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'shi Promo</title>
</head>
<body>
    <h1>Bienvenue sur L'shi Promo</h1>

     <?php
        $magasin = "Top Market";
    ?>
    <p>
        <?php echo "Les offres promo de ".$magasin; ?>
    </p>

    <?php
    $magasins = ['Kin Marché', 'Rencheio', 'Top Market', 'Jambo'];
    ?>
    <p>Le premier magasin : <?php echo $magasins[0]; ?></p>
    <p>Le dernier magasin : <?php echo $magasins[3]; ?></p>

    <h1>Annuaire de tous les magasins</h1>

    <ul>
        <?php foreach($magasins as $mag) : ?>
        <li><?php echo $mag; ?></li>
        <?php endforeach; ?>
    </ul>


    <?php
    $prix = ['lait' => 22000, 'chocolat' => 55000, 'jus' => 7000];
    ?>

    <p> Le prix du lait : <?php echo $prix ['lait']; ?> Fc</p>
    <p> Le prix du chocolat : <?php echo $prix ['chocolat']; ?> Fc</p>
    <h1>Liste de tous les articles avec leurs prix</h1>
    <ul>
        <?php foreach($prix as $article => $valeur) : ?>
        <li><?php echo $article . " : " . $valeur . "Fc"; ?></li>
        <?php endforeach; ?>    
    </ul>

</body>


</html>