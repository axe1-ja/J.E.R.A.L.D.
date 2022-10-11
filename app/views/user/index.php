<!-- Header of page -->
<?php
include '../app/views/layouts/header.php';
?>


<!-- Content of page -->
<?php
include '../app/views/user/components/user_nav.php';
?>
<img src="../public/resources/storage/Images/waves.jpg" class="w-100 background-image" alt="">

<div class="text-center p-3">
    <div class="row">
        <div class="col-3 text-start">
            <h5 class="access"  class="text-white">
                Accès clients > Santé
            </h5>
        </div>
        <div class="col-6">
            <h1 class="titre">Tableau de Bord</h1>
        </div>
    </div>
    <div>
        
    <div class="row pt-4" >
        <div class="col">
            <a href="/public/?url=user/cardio">
                <img src="../public/resources/storage/Images/coeur.png" class="coeur" alt="">
            </a>
            <h3 class="text-white">
                Rythme cardiaque 
            </h3>
        </div>

        <div class="col">
            <a href="/public/?url=user/fall">
                <img src="../public/resources/storage/Images/chute.png" class="chute" alt="">
            </a>
            <h3 class="text-white">
                Détection Chute
            </h3>
        </div>

        <div class="col">
            <a href="/public/?url=user/sound">
                <img src="../public/resources/storage/Images/db.png" class="db" alt="">
            </a>
            <h3 class="text-white">
                Niveau sonore
            </h3>
        </div>
    </div>
    <div class="row pt-3">
        <div class="col">
            <a href="/public/?url=user/temperature">
                <img src="../public/resources/storage/Images/temp.png" class="temp" alt="">
            </a>
            <h3 class="text-white"> 
                Température corporel
            </h3>
        </div>
        <div class="col pt-4">
            <a href="/public/?url=user/environment">
                <img src="../public/resources/storage/Images/envi.png" class="envi" alt="">
            </a>
            <h3 class="text-white"> 
                Données environnantes 
            </h3>
        </div>
    </div>
</div>



<!-- Footer of page -->
<?php
include '../app/views/layouts/footer.php';
?>

