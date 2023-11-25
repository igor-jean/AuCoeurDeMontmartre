<?php require_once "insertionPHP/_header.php" ; ?>
<main>
    <h1>Réservation</h1>
    <form action="reservationResultat.php" method="get">
        <h2>Identité</h2>
        <p>Civilité :</p>
        <input type="radio" value="Monsieur" name="genre" id="M">
        <label for="M">Monsieur</label>
        <br>
        <input type="radio" value="Madame" name="genre" id="F">
        <label for="F">Madame</label>

        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom">

        <label for="prenom">Prenom :</label>
        <input type="text" name="prenom" id="prenom">

        <h2>Coordonnées</h2>
        <label for="mail">Mail</label>
        <input type="text" name="mail" id="mail">

        <label for="tel">Téléphone :</label>
        <input type="text" name="tel" id="tel">

        <label for="adresse">Adresse :</label>
        <input type="text" name="adresse" id="adresse">

        <label for="cp">Code Postale :</label>
        <input type="text" name="cp" id="cp">

        <label for="ville">Ville</label>
        <input type="text" name="ville" id="ville">

        <h2>Periode</h2>

        <label for="dateDebut">Début :</label>
        <input type="date" name="dateDebut" id="dateDebut">

        <label for="dateFin">Fin :</label>
        <input type="date" name="dateFin" id="dateFin">

        <input type="submit" value="Réserver">
    </form>
</main>
<?php require_once "insertionPHP/_footer.php" ; ?>