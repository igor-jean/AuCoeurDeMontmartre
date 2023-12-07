<footer>
    <div class="mapResp">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d24956.231722628017!2d2.314458165135177!3d48.89251168026842!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66faec5ad1dad%3A0xe60c4557ff702da9!2s155%20Rue%20Cardinet%2C%2075017%20Paris!5e0!3m2!1sfr!2sfr!4v1700164198907!5m2!1sfr!2sfr" width="750" height="250" style="border: 0px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
    <div class="topFooter flex container"> 
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d24956.231722628017!2d2.314458165135177!3d48.89251168026842!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66faec5ad1dad%3A0xe60c4557ff702da9!2s155%20Rue%20Cardinet%2C%2075017%20Paris!5e0!3m2!1sfr!2sfr!4v1700164198907!5m2!1sfr!2sfr" width="500" height="250" style="border: 0px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="infoFooter">
            <div class="flex">
                    <div class="widthInfo">
                        <h3>Informations</h3>
                        <h4>Adresse :</h4>
                        <p>25 rue des Maroufle<br>75018 Montmartre</p>
                    </div>
                    <div class="widthInfo">
                        <h3>Contact</h3>
                        <h4>téléphone :</h4>
                        <p>05 78 54 12 65</p>
                        <h4>e-mail :</h4>
                        <p>contact@contact.fr</p>
                    </div>
            </div>
            <div class="flex">
                <div class="widthInfo">
                    <h3>à propos</h3>
                    <ul>
                        <li><a href="">Mentions légales</a></li>
                        <li><a href="">Politique de confidentialité</a></li>
                        <li><a href="">Condition Génerale d'utilisation</a></li>
                        <li><a href="#">Paramètres des cookies</a></li>
                    </ul>
                </div>
                <div class="widthInfo">
                    <h3>navigation</h3>
                    <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="quartier.php">Présentation Quartier</a></li>
                    <li><a href="appartement.php">Présentaton Appartement</a></li>
                    <li><a href="actualite.php">Actualités</a></li>
                    <li><a href="contact.php">Réservation</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="logo"><img src="img/logo.png" alt="Logo"></div>  
    </div> 
    <p class="copyright">Copyright &#169; 2023 - Tous droits réservés. <span><a href="#">Mentions légales</a> - <a href="#">Politique de confidentialité.</a></span> Toute reproduction interdite.</p>
    <a href="#header" id="gotop"><i class="fa-solid fa-circle-up"></i></a>
    <script>
        let gotop = document.getElementById("gotop");
        window.addEventListener("scroll", (e)=>{
            let scrollPosition = window.scrollY;
            if(scrollPosition >=500) {
                gotop.style.display = "block";
            }else {
                gotop.style.display = "none";
                
            }
        })
    </script>
</footer>
</body>
</html>