<?php
require_once 'Views/Partials/header.php';
require_once 'Views/Partials/menu.php';
?>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <?php
            /*$plats = PlatManager::getPlatsDetails();
    foreach ($plats as $plat) {*/
            echo '
            <div class="d-flex justify-content-center mb-4">
                <div class="card">
                    <img src="Asset/Img/food/' . $plat['image'] . '" class="card-img-top card-img" alt="Image du plat">
                    <div class="card-body">
                        <h5 class="card-title">' . $plat['libelle'] . '</h5>
                        <p class="card-text">' . $plat['description'] . '</p>
                        <p class="card-text">Prix: ' . $plat['prix'] . ' €</p>
                    </div>
                </div>
            </div>';
            //}
            ?>
        </div>
        <div class="col-md-6">
            <form id="commandeForm" action="commande_script.php" method="post" enctype="multipart/form-data">
                <h3>Formulaire de Commande</h3>
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom :</label>
                    <input type="text" class="form-control" id="nom" name="nom" required>
                </div>
                <div class="mb-3">
                    <label for="prenom" class="form-label">Prénom :</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email :</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="adresse" class="form-label">Adresse de livraison :</label>
                    <input type="text" class="form-control" id="adresse" name="adresse" required>
                </div>
                <div class="mb-3">
                    <label for="quantite" class="form-label">Quantité :</label>
                    <input type="number" class="form-control" id="quantite" name="quantite" min="1">
                </div>
                <input type="submit" class="btn btn-primary btn-mod" value="Commander">
                <a href="index.php" class="btn btn-secondary btn-mod">Annuler</a>
            </form>
        </div>
    </div>
</div>

<?php
require_once 'Views/Partials/footer.php';
?>