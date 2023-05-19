<?php require('oeuvres.php'); ?>
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
        <div id="liste-oeuvres">
            <?php foreach($oeuvres as $cle => $oeuvre): ?>
                <article class="oeuvre">
                    <a href="oeuvre.php?id=<?= $cle; ?>">
                        <img src="<?= $oeuvre['image'] ?>" alt="<?= $oeuvre['titre'] ?>">
                        <h2><?= $oeuvre['titre'] ?></h2>
                        <p class="description"><?= $oeuvre['auteur'] ?></p>
                    </a>
                </article>
            <?php endforeach ; ?>    
        </div>
    </main>
    <?php require('footer.php'); ?>    
</body>
</html>
