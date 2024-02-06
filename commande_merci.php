<?php
// Attendez 5 secondes avant de rediriger
header("Refresh: 5; URL=index.php");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merci</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            /* Utilise 100% de la hauteur de la vue (viewport height) */
        }

        .dark-theme {
            background-color: #1a1a1a;
            /* Couleur de fond sombre */
            color: #ffffff;
            /* Couleur du texte */
        }

        h1,
        p {
            text-align: center;
            color: #FEF4E8;
        }
    </style>
</head>

<body class="dark-theme">
    <h1>Email envoyé avec succès!</h1>
    <p>Vous serez redirigé vers la page d'accueil dans 5 secondes.</p>
</body>

</html>