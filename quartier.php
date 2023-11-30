<?php require_once "insertionPHP/_header.php" ; ?>
<main>
    <div class="container">
        <section class="quartier">
            <h1 class="titre"> L'Âme Bohème de Paris</h1>
            <p>
                Situé dans le 18e arrondissement de Paris, Montmartre se dresse tel un joyau artistique au sommet de la ville lumière. Ce quartier emblématique, chargé d'histoire et d'inspiration, invite chaque visiteur à plonger dans une atmosphère bohème unique qui a captivé des générations d'artistes.
            </p>
            <article>
                <div>
                    <h2 class="titre">L'Histoire en Toiles et en Pavés</h2>
                    <p>
                        Montmartre tire son nom du latin "Mons Martis" (la colline du Mars) et a connu une histoire riche et complexe. Jusqu'en 1860, Montmartre était une commune indépendante, abritant des vignobles, des moulins à vent, et une vie villageoise paisible. L'annexion à Paris n'a pas altéré son charme unique ; au contraire, elle a donné naissance à une fusion fascinante entre l'histoire villageoise et l'énergie cosmopolite de la métropole.
                    </p>
                </div>
                <div>
                    <h2 class="titre">Un Repaire d'Artistes</h2>
                    <p>
                        Le quartier est surtout célèbre pour avoir été le refuge de nombreux artistes renommés au cours du xixe et xxe siècle. Des noms tels que Picasso, Modigliani, et Van Gogh ont arpenté les rues étroites et les escaliers escarpés, trouvant dans les cafés pittoresques et les ateliers l'inspiration qui a donné naissance à certaines des œuvres les plus emblématiques de l'histoire de l'art.
                    </p>
                </div>
                
            </article>
            <article>
                <div>
                    <h2 class="titre">Charme Architectural et Points d'Intérêt</h2>
                    <p>
                        Montmartre est également réputé pour son architecture pittoresque, avec la basilique du Sacré-Cœur qui domine la butte. La place du Tertre, où les artistes exposent leurs œuvres en plein air, est un incontournable. Flâner dans les rues du quartier, c'est découvrir des façades colorées, des boutiques d'artisans, et des recoins pleins de charme.
                    </p>
                </div>
                <div>
                    <h2 class="titre">Ambiance Bohémienne et Culture Locale</h2>
                    <p>
                        Aujourd'hui, Montmartre conserve son ambiance bohème et sa vie artistique vibrante. Les visiteurs peuvent déambuler dans le quartier, s'arrêtant dans les cafés emblématiques comme Le Moulin de la Galette ou Le Lapin Agile. Les ruelles regorgent de galeries d'art contemporain, de boutiques vintage, et de petits bistros où l'on peut savourer la cuisine française dans une ambiance conviviale.
                    </p>
                </div>
            </article>
            <p>
                Montmartre, avec son passé coloré et son présent dynamique, continue de séduire les amateurs d'art, les rêveurs, et les curieux. Entre ses rues pavées, ses vues panoramiques, et son esprit bohème, ce quartier demeure une invitation à s'immerger dans l'essence même de Paris, une expérience intemporelle où l'histoire et la créativité se mêlent pour créer une atmosphère unique au monde.
            </p>
        </section>
    </div>
    <section class="slider flex">
    <div class="photo img1 shrink"></div>
    <div class="photo img2"></div>
    <div class="photo img3"></div>
    <div class="photo img4"></div>
    <div class="photo img5"></div>
</section>
<script>
    const img1 = document.querySelector(".img1");
    const img2 = document.querySelector(".img2");
    const img3 = document.querySelector(".img3");
    const img4 = document.querySelector(".img4");
    const img5 = document.querySelector(".img5");

    const images = [img1, img2, img3, img4, img5];
    let currentIndex = 0;

    function toggleShrink() {
        images.forEach(img => img.classList.remove("shrink"));
        images[currentIndex].classList.add("shrink");
        currentIndex = (currentIndex + 1) % images.length;
    }

    setInterval(toggleShrink, 2000);
</script>


</main>
<?php require_once "insertionPHP/_footer.php" ; ?>