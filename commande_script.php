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

    if (isset($_GET['plat_id'])) {
        $plat_id = $_GET['plat_id'];
    } else {
        exit("ID du plat non spécifié dans l'URL");
    }

    $bdd = dbconnect();

    $query = "SELECT libelle, prix FROM plats WHERE id = :id";
    $statement = $bdd->prepare($query);
    $statement->bindParam(':id', $plat_id, PDO::PARAM_INT);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    $plat = $result['nom_plat'];
    $prix = $result['prix'];
    $total = $prix * $quantite;

    $message = "Bonjour $nom,\n\n";
    $message .= "Voici le votre commande :\n\n";
    $message .= "Plat: $plat\n";
    $message .= "Quantité: $quantite\n";
    $message .= "Prix unitaire: $prix\n";
    $message .= "Total: $total\n\n";

    $mail = new PHPMailer(true);
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
        } catch (Exception $e) {
            header("location: erreur.php");
        }
    }
}
