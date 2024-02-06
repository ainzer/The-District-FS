<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'vendor/autoload.php';
require_once 'Model/connexion.php';

// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = ($_POST["nom"]);
    $prenom = ($_POST["prenom"]);
    $email = ($_POST["email"]);
    $adresse = ($_POST["adresse"]);
    $quantite = ($_POST["quantite"]);
    $platLibelle = ($_POST["libelle"]);
    $platPrix = ($_POST["prix"]);
    $total = $platPrix * $quantite;

    // Construction du message
    $message = "Bonjour $nom $prenom,<br><br>";
    $message .= "Voici votre commande :<br><br>";
    $message .= "Plat: $platLibelle<br>";
    $message .= "Quantité: $quantite<br>";
    $message .= "Prix unitaire: $platPrix €<br>";
    $message .= "Total: $total €<br>";

    // Envoi de l'email
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'localhost';
    $mail->SMTPAuth = false;
    $mail->Port = 1025;
    $mail->setFrom('from@thedistrict.com');
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = 'Commande';
    $mail->Body = $message;

    if ($mail) {
        try {
            $mail->send();
            header("location: commande_merci.php");
            /* echo 'Email envoyé avec succès'; */
        } catch (Exception $e) {
            header("location: commande_erreur.php");
        }
    }
}
