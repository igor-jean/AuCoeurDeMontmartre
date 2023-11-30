<?php require_once "insertionPHP/_header.php" ; ?>
<main class="resa">
    <form action="reservationResultat.php" method="get">
        <h1 class="titre">Réservation</h1>
        <div class="lettre">
            <h2 class="titre">Identité</h2>
            <div>
                <div class="flex civilite">
                    <p>Civilité</p>
                    <div>
                        <input type="radio" value="Monsieur" name="genre" id="M">
                        <label for="M">Monsieur</label>
                    </div>
                    <div>
                        <input type="radio" value="Madame" name="genre" id="F">
                        <label for="F">Madame</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="flexForm">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom">
                </div>
                <div class="flexForm">
                    <label for="prenom">Prénom</label>
                    <input type="text" name="prenom" id="prenom">
                </div>
            </div>
            <h2 class="titre">Coordonnées</h2>
            <div class="form-group">
                <div class="flexForm">
                    <label for="mail">Mail</label>
                    <input type="text" name="mail" id="mail">
                </div>
                <div class="flexForm">
                    <label for="tel">Téléphone</label>
                    <input type="text" name="tel" id="tel">
                </div>
            </div>
            <div class="flexForm">
                <label for="adresse">Adresse</label>
                <input type="text" name="adresse" id="adresse">
            </div>
            <div class="form-group">
                <div class="flexForm">
                    <label for="cp">Code Postale</label>
                    <input type="text" name="cp" id="cp">
                </div>
                <div class="flexForm">
                    <label for="ville">Ville</label>
                    <input type="text" name="ville" id="ville">
                </div>
            </div>
            <h2 class="titre">Periode</h2>
            <div class="form-group">
                <div class="flexForm">
                    <label for="dateDebut">Début</label>
                    <input type="date" name="dateDebut" id="dateDebut">
                </div>
                <div class="flexForm">
                    <label for="dateFin">Fin</label>
                    <input type="date" name="dateFin" id="dateFin">
                </div>
            </div>
            <input type="submit" value="Réserver">
        </div>
    </form>
</main>
<?php require_once "insertionPHP/_footer.php" ; ?>