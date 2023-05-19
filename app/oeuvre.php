<?php 
    require('oeuvres.php');  
    $oeuvre = $oeuvres[$_GET['id']]; 
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
    <?php require('header.php'); ?>
    <main>
        <?php if(array_key_exists($_GET['id'],$oeuvres)): ?>
        <div id="liste-oeuvres">
                <article id="detail-oeuvre">
                    <div id="img-oeuvre">
                        <img src="<?= $oeuvre['image'] ?>" alt="<?= $oeuvre['titre'] ?>">
                    </div>
                    <div id="contenu-oeuvre">
                        <h1><?= $oeuvre['titre'] ?></h1>
                        <p class="description"><?= $oeuvre['auteur'] ?></p>
                        <p class="description-complete"><?= $oeuvre['description'] ?></p>
                    </div>
                </article>
        </div>
        <?php else: ?>
            <p>Cette oeuvre n'existe pas</p>
        <?php endif; ?>
    </main>
    <?php require('footer.php'); ?>    
</body>
</html>
