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
    <!-- Nouveau conteneur avec une grille de 3x3 -->
    <div class="container-fluid mt-3 row">
        <div class="col-md-4 d-flex justify-content-center justify-content-md-end mb-4">
            <div class="card zoom-image">
                <img src="../image/category/burger_cat.jpg" class="card-img-top card-img" alt="Image de la carte">
                <div class="card-body">
                    <h5 class="card-title">Burger</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center justify-content-md-center mb-4">
            <div class="card zoom-image">
                <img src="../image/category/pizza_cat.jpg" class="card-img-top card-img" alt="Image de la carte">
                <div class="card-body">
                    <h5 class="card-title">Pizza</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center justify-content-md-start mb-4">
            <div class="card zoom-image">
                <img src="../image/category/asian_food_cat.jpg" class="card-img-top card-img" alt="Image de la carte">
                <div class="card-body">
                    <h5 class="card-title">Asian</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center justify-content-md-end mb-4">
            <div class="card zoom-image">
                <img src="../image/category/pasta_cat.jpg" class="card-img-top card-img" alt="Image de la carte">
                <div class="card-body">
                    <h5 class="card-title">Pasta</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center justify-content-md-center mb-4">
            <div class="card zoom-image">
                <img src="../image/category/salade_cat.jpg" class="card-img-top card-img" alt="Image de la carte">
                <div class="card-body">
                    <h5 class="card-title">Salade</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center justify-content-md-start mb-4">
            <div class="card zoom-image">
                <img src="../image/category/wrap_cat.jpg" class="card-img-top card-img" alt="Image de la carte">
                <div class="card-body">
                    <h5 class="card-title">Wrap</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center justify-content-md-end mb-4">
            <div class="card zoom-image">
                <img src="../image/food/cheesburger.jpg" class="card-img-top card-img" alt="Image de la carte">
                <div class="card-body">
                    <h5 class="card-title">CheesBurger</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center justify-content-md-center mb-4">
            <div class="card zoom-image">
                <img src="../image/food/cesar_salad.jpg" class="card-img-top card-img" alt="Image de la carte">
                <div class="card-body">
                    <h5 class="card-title">Salade Cesar</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center justify-content-md-start mb-5">
            <div class="card zoom-image">
                <img src="../image/food/pizza-margherita.jpg" class="card-img-top card-img" alt="Image de la carte">
                <div class="card-body">
                    <h5 class="card-title">Margherita</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once 'Views/Partials/footer.php';
?>