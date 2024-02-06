<?php
require_once 'Views/Partials/header.php';
require_once 'Views/Partials/menu.php';
?>
<div class="container-fluid mt-2 mod-video">
    <div class="row">
        <div class="col-md-12">
            <div class="embed-responsive embed-responsive-16by9 text-center">
                <img src="Asset/Img/the_district_brand/facebook_cover_photo_2.png" alt="Description de l'image" height="200">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt-3 row">
    <?php
    foreach ($plats as $plat){
        echo '
            <div class="col-md-4 d-flex justify-content-center mb-4">
                <div class="card">
                    <img src="Asset/Img/food/' . $plat['image'] . '" class="card-img-top card-img" alt="Image du plat">
                    <div class="card-body">
                        <h5 class="card-title">' . $plat['libelle'] . '</h5>
                        <p class="card-text">' . $plat['description'] . '</p>
                        <p class="card-text">Prix: ' . $plat['prix'] . ' €</p>
                        <a href="commande.php?plat_id=' . $plat['id'] . '" class="btn btn-primary btn-mod">Passer une commande</a>
                    </div>
                </div>
            </div>';
    }
    ?>
</div>
<?php
require_once 'Views/Partials/footer.php';
?>