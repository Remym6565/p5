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
            <?php foreach($oeuvres as $cle => $valeur): ?>
                <article class="oeuvre">
                <a href="oeuvre.php?oeuvre=<?= $cle; ?>">
                    <img src="<?= $valeur['image'] ?>" alt="Dodomu">
                    <h2><?= $valeur['titre'] ?></h2>
                    <p class="description"><?= $valeur['auteur'] ?></p>
                </a>
            </article>
            <?php endforeach ; ?>    
        </div>
    </main>
    <footer>
        <?php include('footer.php'); ?>    
    </footer>
</body>
</html>
