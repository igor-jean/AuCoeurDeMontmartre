<?php
require_once "insertionPHP/_header.php";
$genre = isset($_GET["genre"])?$_GET["genre"]:"";
$nom = isset($_GET["nom"])?$_GET["nom"]:"";
$prenom = isset($_GET["prenom"])?$_GET["prenom"]:"";
$mail = isset($_GET["mail"])?$_GET["mail"]:"";
$tel = isset($_GET["tel"])?$_GET["tel"]:"";
$adresse = isset($_GET["adresse"])?$_GET["adresse"]:"";
$cp = isset($_GET["cp"])?$_GET["cp"]:"";
$ville = isset($_GET["ville"])?$_GET["ville"]:"";
$dateDebut = isset($_GET["dateDebut"])?$_GET["dateDebut"]:"";
$dateFin = isset($_GET["dateFin"])?$_GET["dateFin"]:"";
$error = false;

if(empty($genre)){
    $error = true;
    echo "Veuillez remplir le genre.<br>";
}
if(empty($nom)){
    $error = true;
    echo "Veuillez remplir le nom.<br>";
}
if(empty($prenom)){
    $error = true;
    echo "Veuillez remplir le prenom.<br>";
}
if(empty($mail)){
    $error = true;
    echo "Veuillez remplir l'adresse mail.<br>";
}
if(empty($tel)){
    $error = true;
    echo "Veuillez remplir un numero de téléphone.<br>";
}
if(empty($adresse)){
    $error = true;
    echo "Veullez remplir une adresse.<br>";
}
if(empty($cp)){
    $error = true;
    echo "Veuillez remplir un code postale.<br>";
}
if(empty($ville)){
    $error = true;
    echo "Veuillez remplir une ville.<br>";
}
if(empty($dateDebut)){
    $error = true;
    echo "Veuillez remplir une date de début.<br>";
}
if(empty($dateFin)){
    $error = true;
    echo "Veuillez remplir une date de fin.<br>";
}

?>
<main>
    <?php
    if(!$error)
{
    echo "Félicitations ".$genre." ".$nom." ".$prenom." ! Votre inscription a bien été prise en compte. Vous allez recevoir un email de confirmation à l'adresse ".$mail." . Vous avez résérvé pour la periode du ".$dateDebut." au ".$dateFin.".<br><a href='index.php'>Accueil</a>";
   
}
?>
</main>
<?php require_once "insertionPHP/_footer.php" ; ?>

