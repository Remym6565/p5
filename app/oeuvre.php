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
    <header>
        <?php include('header.php'); ?>
    </header>
    <main>
        <div id="liste-oeuvres">
            <?php include('oeuvres.php'); ?>   
            <?php $id=$_GET['oeuvre']; ?>
            <?php $valeur=$oeuvres[$id]; ?>
                <article id="detail-oeuvre">
                    <div id="img-oeuvre">
                        <img src="<?= $valeur['image'] ?>" alt="<?= $valeur['titre'] ?>">
                    </div>
                    <div id="contenu-oeuvre">
                        <h1><?= $valeur['titre'] ?></h1>
                        <p class="description"><?= $valeur['auteur'] ?></p>
                        <p class="description-complete"><?= $valeur['description'] ?></p>
                    </div>
                </article>
        </div>
    </main>
    <footer>
        <?php include('footer.php'); ?>    
    </footer>
</body>
</html>
