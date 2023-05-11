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
            <?php  $id=$_GET["oeuvre"]; ?>
            <?php  $valeur=$oeuvres[id]; ?>
            <!--<?php foreach($oeuvres as $cle => $valeur): ?>
            <?php if($cle == $id): ?>-->
                <article class="oeuvre">
                <a href="oeuvre.php?oeuvre='.cle.'">
                    <img src="<?= $valeur['image'] ?>" alt="Dodomu">
                    <h2><?= $valeur['titre'] ?></h2>
                    <p class="description"><?= $valeur['auteur'] ?></p>
                </a>
                </article>
            <!--<?php endif ; ?>
            <?php endforeach ; ?>-->

            

            <article id="detail-oeuvre">
                <div id="img-oeuvre">
                    <img src="img/clark-van-der-beken.png" alt="Dodomu">
                </div>
                <div id="contenu-oeuvre">
                    <h1>Dodomu</h1>
                    <p class="description">Mia Tozerski</p>
                    <p class="description-complete">
                    Mia Tozerski est une artiste peintre ukrainienne réfugiée de la guerre. Sur cette œuvre, Dodomu ("domicile" en ukrainien), elle nous montre la tristesse du peuple ukrainien qu'elle partage, ayant elle-même dû quitter son foyer. L'œuvre évoque le drapeau liquéfié d'une Ukraine en souffrance, pleurant la mort de ses compatriotes. Ce travail chargé d'émotion est le symbole d'un événement qui marquera l'Histoire. Cette peinture à l'acrylique rayonne grâce à son fond lisse et ses mélanges de couleurs éclatantes.
                    </p>
                </div>
    </article>



        </div>
    </main>
    <footer>
        <?php include('footer.php'); ?>    
    </footer>
</body>
</html>
