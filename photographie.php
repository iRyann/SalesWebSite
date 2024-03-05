<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Web design</title>
    <link href="CSS/style.css" rel="stylesheet" />
    <link href="CSS/photographie.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope&family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <?php  include './PHP/header.php'; ?>

    <main>
    <section class="webdesign-introduction">
            <div>
                <h1>Photographie</h1>
                <p>
                    De l'évaluation de vos <em>besoin</em>, à la livraison d'un <em> site web complet</em> ; bénéficiez 
                    de notre expertise en création digitale.
                </p>
            </div>
            <img src="images/boutique/webdesign/webdesign.png" alt="Portrait avec effet de la photographe Robbie Lens" />
        </section>
        <section class="webdesign-sales">
            <div>
                <h2>Services</h2>
            </div>
            <table>
                <thead>
                <tr>
                    <th>Référence</th>
                    <th>Intitulé</th>
                    <th>Illustration</th>
                    <th>Tarif</th>
                </tr>
            </thead>
            <tr>
                <td>WB1</td>
                <td>Expertise</td>
                <td><img src="" alt="wb1img"></td>
                <td>€</td>
            </tr>
            <tr>
                <td>WB2</td>
                <td>Maquettage</td>
                <td><img src="" alt="maquettage"></td>
                <td>€</td>
            </tr>
            <tr>
                <td>WB3</td>
                <td>Création de site web</td>
                <td><img src="" alt="creation de site web"></td>
                <td>€</td>
            </tr>
            </table>
        </section>  
        </main>

    <?php  include './PHP/footer.php'; ?>
</body>
</html>