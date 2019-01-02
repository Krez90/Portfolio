<?php
$recupNom = $_POST['nom'];
$recupEmail = $_POST['mail'];
$recupMessage = $_POST['message'];

if($recupNom != "" && $recupEmail != ""){
    echo "Votre message a bien été envoyer";
}
else{
    echo "Certain champ son vide";
}