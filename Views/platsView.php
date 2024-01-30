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


<div class="container mt-4">
    <div class="row" id="cartesPlats"></div>
    <div class="d-flex justify-content-between">
        <input type="button" id="precedentPlatsButton" class="btn btn-primary mt-2 btn-mod" value="Précédent" disabled>
        <input type="button" id="suivantPlatsButton" class="btn btn-primary mt-2 btn-mod" value="Suivant">
    </div>
</div>

<?php
require_once 'Views/Partials/footer.php';
?>