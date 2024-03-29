<?php
require_once 'Views/Partials/header.php';
require_once 'Views/Partials/menu.php';
?>

<div class="container-fluid mt-2 d-none d-md-block d-flex align-items-center justify-content-center">
    <div class="row">
        <div class="col-md-12">
            <div style="width: 800px; height: 400px; margin: auto;">
                <video id="videoFrame" style="width: 100%; height: 100%;" src="Asset/video/video (2160p).mp4"  autoplay muted loop></video>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-2 d-block d-md-none d-flex align-items-center justify-content-center">
    <div class="row">
        <div class="col-12">
            <div style="width: 100%; height: 200px; margin: auto;">
                <video id="videoFrame" style="width: 100%; height: 100%;" src="Asset/video/video (2160p).mp4" autoplay muted loop></video>
            </div>
        </div>
    </div>
</div>

<div class="parallax">
    <h2 class="text-center"><u>Catégorie</u></h2>
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
                    </div>
                </div>
            </div>';
        }
        ?>
    </div>
<br>
<h2 class="text-center"><u>Plat</u></h2>
    <!-- Affichage des plats les plus vendus -->
    <div class="container-fluid mt-3 row">
        <?php
        $plats = PlatManager::getPlatsPlusVendus();
        foreach ($plats as $plat) {
            echo '
            <div class="col-md-4 d-flex justify-content-center mb-4">
                <div class="card zoom-image">
                    <img src="Asset/Img/food/' . $plat['image'] . '" class="card-img-top card-img" alt="Image du plat">
                    <div class="card-body">
                        <h5 class="card-title">' . $plat['libelle'] . '</h5>
                    </div>
                </div>
            </div>';
        }
        ?>
    </div>
</div>


<?php
require_once 'Views/Partials/footer.php';
?>