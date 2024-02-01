<?php
require_once 'Views/Partials/header.php';
require_once 'Views/Partials/menu.php';
?>

<div class="container mt-5">
<form id="contactForm" action="contact_script.php" method="post" enctype='multipart/form-data'>
        <div class="form-group col-md-6">
            <label for="nom">Nom :</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div><br>

        <div class="form-group col-md-6">
            <label for="prenom">Prénom :</label>
            <input type="text" class="form-control" id="prenom" name="prenom" required>
        </div><br>

        <div class="form-group col-md-6">
            <label for="email">Email :</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="toto.toto@gmail.com" required>
        </div><br>

        <div class="form-group col-md-6">
            <label for="telephone">Téléphone :</label>
            <input type="tel" class="form-control" id="telephone" name="telephone" required>
        </div><br>

        <div class="form-group">
            <label for="demande">Votre demande :</label>
            <textarea class="form-control" id="demande" name="demande" rows="4" placeholder="Expliquez votre demande ici"></textarea>
        </div><br>

        <input type="submit" class="btn btn-primary mt-2 btn-mod" value="Envoyer">
        <a href="index.php" class="btn btn-secondary mt-2 btn-mod">Annuler</a>
    </form>
</div>






<?php
require_once 'Views/Partials/footer.php';
?>