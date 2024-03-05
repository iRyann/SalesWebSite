<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Accueil - Robbie Lens Graphiste</title>
    <link href="CSS/style.css" rel="stylesheet" />
    <link href="CSS/index.css" rel="stylesheet" />
    <link href="CSS/aside.css" rel="stylesheet" />
    <script src="JS/sidenav.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope&family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>   
    <?php
    include './PHP/header.php';
    include './PHP/aside.php';
    ?>
    
    <main id="main">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
        <section class="accueil-introduction">
            <div>
                <h1>Heliapo </h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga repudiandae id a molestias vitae expedita rerum excepturi inventore eligendi harum, dicta explicabo veritatis commodi tempora cupiditate. Voluptates dolore atque provident!
                </p>
                <a href="#contact" class="cta">UN PROJET ? ÉCRIVEZ-MOI</a>
            </div>
            <img src="images/robbie-lens.png" alt="Portrait" />
        </section>
        <section class="accueil-photos">
            <h2>Mon dernier projet</h2>
            <div>
                <img src="images/accueil/element-1.png" alt="Twelve apostles - Australie" />
                <img src="images/accueil/element-2.png" alt="Wai-O-Tapu - Nouvelle-Zélande" />
                <img src="images/accueil/element-3.png" alt="Parc National d’Abel Tasman - Nouvelle-Zélande" />
            </div>
            <div>
                <img src="images/accueil/element-4.png" alt="Lac Rotorua - Nouvelle-Zélande" />
                <img src="images/accueil/element-5.png" alt="Milford Sound - Nouvelle-Zélande" />
                <img src="images/accueil/element-6.png" alt="Lac Wanaka - Nouvelle-Zélande" />
            </div>
        </section>
        <section id="contact" class="section-contact">
            <h2>Parlons de votre projet</h2>
            <form method="get" action="">
                <fieldset>
                    <legend>Informations personnelles</legend>
                    <div class="form-nom-email">
                        <div class="form-column">
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" id="nom" required />
                            <label for="date">Date de naissance</label>
                            <input type="date" name="date" id="date" required />
                            <label for="fonction">Fonction</label>
                            <select name="fonction" id="fonction" required>
                                <option value="etudiant">Etudiant</option>
                                <option value="salarié">Salarié</option>
                                <option value="chef_entreprise">Chef d'entreprise</option>
                                <option value="autre">Autre</option>
                            </select>
                        </div>
                        <div class="form-column">
                            <label for="nom">Prénom</label>
                            <input type="text" name="prenom" id="prenom" required />
                            <label for="email">Email</label>
                            <input type="e-mail" name="email" id="email" required/>
                            <label for="genre">Genre</label>
                            <div class="genre">
                                <label>
                                    <input type="radio" name="genre" value="homme"> Homme
                                </label>
                                <label>
                                    <input type="radio" name="genre" value="femme"> Femme
                                </label>
                                <label>
                                    <input type="radio" name="genre" value="non_precise"> Non précisé
                                </label>
                            </div>
                        </div>
                    
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Votre projet</legend>
                    <div class="form-column">
                        <label for="subject">Sujet</label>
                        <input type="text" name="subject" id="subject" required />
                        <label for="message">Message</label>
                        <textarea name="message" id="message" rows="10" required></textarea>
                    </div>
                </fieldset>
                <input type="submit" value="ENVOYER" class="cta" />
            </form>
        </section>
    
    </main>
    
    <?php require_once(__DIR__ . '/PHP/footer.php'); ?>
</body>

</html>
