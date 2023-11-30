<?php
    $pageActuelle = $_SERVER["PHP_SELF"];
    $actu = strpos($pageActuelle, "actualite.php" );
    $appart = strpos($pageActuelle, "appartement.php");
    $index = stristr($pageActuelle, "index.php" );
    $quartier = strpos($pageActuelle, "quartier.php");
    $resa = strpos($pageActuelle, "reservation.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
    <title>Au coeur de Montmartre</title>
</head>
<body>
    <header id="header">
        <div class="navDeroulant">
            <ul>
                <li><a href="index.php" <?php if($index){ echo "class='bold'";}?>>Accueil</a></li>  
                <li><a href="quartier.php"<?php if($quartier){ echo "class='bold'";}?>>Quartier</a></li>
                <li><a href="appartement.php" <?php if($appart){ echo "class='bold'";}?>>Appartement</a></li>
                <li><a href="actualite.php" <?php if($actu){ echo "class='bold'";}?>>Actualités</a></li>
                <li><a href="reservation.php" <?php if($resa){ echo "class='bold'";}?>>Réservation</a></li>
            </ul>
        </div>
        <div class="headerTop">
            <div class="flex container">
                <a id="logo" href="index.php"><img src="img/logo.png" alt="Logo"></a>
                <nav>
                    <ul>
                        <li><a href="index.php" <?php if($index){ echo "class='bold under'";}?>>Accueil</a></li>
                        <li><span <?php if($quartier||$appart){ echo "class='bold'";}?>>Présentation</span>
                            <ul>
                                <li><a href="quartier.php"<?php if($quartier){ echo "class='bold'";}?>>Quartier</a></li>
                                <li><a href="appartement.php" <?php if($appart){ echo "class='bold'";}?>>Appartement</a></li>
                            </ul>
                        </li>
                        <li class="navResp"><a href="quartier.php"<?php if($quartier){ echo "class='bold'";}?>>Quartier</a></li>
                        <li class="navResp"><a href="appartement.php" <?php if($appart){ echo "class='bold'";}?>>Appartement</a></li>
                        <li><a href="actualite.php" <?php if($actu){ echo "class='bold under'";}?>>Actualités</a></li>
                        <li><a href="reservation.php" <?php if($resa){ echo "class='bold under'";}?>>Réservation</a></li>
                    </ul>
                </nav>
                <div>
                    <input type="text" id="trainer" onkeypress="checkEnter(event)">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <div>
                    <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-square-x-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
            <div id="easterEggContainer">
                <img src="img/TlypONy.gif" alt="gif">
            </div>
            <script>
                function checkEnter(event) {
                    if (event.key === 'Enter') {
                        easterEggContainer.style.display = 'block';
                    } else {
                        easterEggContainer.style.display = 'none';
                    }
                }
            </script>
        </div>
        <div class="burgerPos">
            <div class="menuBurger" onclick="menuBurger()">
                <div class="bar pos1"></div>
                <div class="bar pos2"></div>
                <div class="bar pos3"></div>
            </div>
        </div>
        <script>
            var navBar = document.querySelector("nav");

            function menuBurger() {
                var navDeroulant = document.querySelector(".navDeroulant");
                var burger = document.querySelector(".menuBurger");
                var bar1 = document.querySelector(".pos1");
                var bar2 = document.querySelector(".pos2");
                var bar3 = document.querySelector(".pos3");

                bar1.classList.toggle("bar1");
                bar2.classList.toggle("bar2");
                bar3.classList.toggle("bar3");
                burger.classList.toggle("menuBurgertoggle");
                navDeroulant.classList.toggle("navBlock");
            }
        </script>

    </header>
