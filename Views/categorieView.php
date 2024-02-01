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
        <!-- Affichage des catégories les plus populaires -->
        <?php
        foreach ($categories as $categorie) {
            echo '
            <div class="col-md-4 d-flex justify-content-center  mb-4">
                <div class="card zoom-image">
                    <img src="Asset/Img/category/' . $categorie['image'] . '" class="card-img-top card-img" alt="Image de la carte">
                    <div class="card-body">
                        <h5 class="card-title">' . $categorie['libelle'] . '</h5>
                        <a href="platCategorie.php?categorie_id=' . $categorie['id'] . '" class="btn btn-primary btn-mod">Tous les Plats</a>
                    </div>
                </div>
            </div>';
        }
        ?>
    </div>

<?php
require_once 'Views/Partials/footer.php';
?>