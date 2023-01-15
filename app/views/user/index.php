<!-- Header of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/header.php');
?>


<!-- Content of page -->
<img src="/public/resources/storage/Images/ocean2.jpg" class="w-100 background-image" alt="">

<?php
include realpath(dirname(__DIR__,1) .'/user/components/user_nav.php');
?>

<div class="text-center p-3">
    <div class="row">
        <div class="col-3 text-left">
            <a class="access"  class="text-white" style="color: white; font-size: 18px" href="/public/home">
                Accueil >
            </a>
            <a class="access"  class="text-white" style="color: white; font-size: 18px" href="/public/user/"> 
                Santé
            </a>
        </div>
        <div class="col-6">
            <h1 class="titre">Tableau de Bord</h1>
        </div>
    </div>

    <div class="row pt-4" >
        <div class="capteurs col-12">
            <a href="/public/user/cardio">
                <img src="/public/resources/storage/Images/coeur.png" class="userImg coeur" alt="">
            </a>
            <h3 class="text-white">
                Rythme cardiaque 
            </h3>
        </div>

        <div class="capteurs col-12">
            <a href="/public/user/fall">
                <img src="/public/resources/storage/Images/chute.png" class="userImg chute" alt="">
            </a>
            <h3 class="text-white">
                Détection Chute
            </h3>
        </div>

        <div class="capteurs col-12">
            <a href="/public/user/sound">
                <img src="/public/resources/storage/Images/db.png" class="userImg db" alt="">
            </a>
            <h3 class="text-white">
                Niveau sonore
            </h3>
        </div>
        <div class="capteurs col-12">
            <a href="/public/user/temperature">
                <img src="/public/resources/storage/Images/temp.png" class="userImg temp" alt="">
            </a>
            <h3 class="text-white"> 
                Température corporelle
            </h3>
        </div>
        <div class="capteurs col-12">
            <a href="/public/user/environment">
                <img src="/public/resources/storage/Images/envi.png" class="userImg envi" alt="">
            </a>
            <h3 class="text-white"> 
                Données environnantes 
            </h3>
        </div>
    </div>


</div>



<!-- Footer of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/footer.php');
?>

