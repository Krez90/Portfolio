<?php
    // CONDITIONS NOM
    if ( (isset($_POST["nom"])) && (strlen(trim($_POST["nom"])) > 0) ) {
        $nom = stripslashes(strip_tags($_POST["nom"]));
    } else {
        echo "Merci d'écrire un nom <br />";
        $nom = "";
    }

//VALIDATION MAIL
if ( (isset($_POST["mail"])) && (strlen(trim($_POST["mail"])) > 0) && (filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) ) {
    $mail = stripslashes(strip_tags($_POST["mail"]));
} elseif (empty($_POST["mail"])) {
    echo "Merci d'écrire une adresse mail <br />";
    $mail = "";
} else {
    echo "mail invalide :(<br />";
    $mail = "";
}

header('Location: http://localhost/portfolio/accueil.php?success=1#contact.php');


// POUR ENVOYE UN MAIL
if(isset($_POST['message'])){
    $entete  = 'MIME-Version: 1.0' . "\r\n";
    $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $entete .= 'From: ' . $_POST['mail'] . "\r\n";

    $message = '<h1>Message envoyé depuis la page Contact du portfolio</h1>
    <p><b>Nom : </b>' . $_POST["nom"] . '<br>
    <b>Email : </b>' . $_POST["mail"] . '<br>
    <b>Message : </b>' . $_POST["message"] . '</p>';

    $retour = mail("bilel.h@codeur.online', 'Envoi depuis page contact portfolio", $message, $entete);
    if($retour) {
        echo "<p>Votre message a bien été envoyé.</p>";
    }
}

$nom = $_POST["nom"];
$mail = $_POST["mail"];
$message = $_POST["message"];

include('infosql.php');

$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass);

$add_contact = $dbh->prepare ("INSERT INTO contact_portfolio (nom, mail, message) VALUES (?,?,?)");

$add_contact->execute([$nom, $mail, $message]);

header('Location: https://bilelh.promo-24.codeur.online/portfolio/accueil.php?success=1#contact.php');
header("Cache-Control: no-cache, must-revalidate");
exit;

?>