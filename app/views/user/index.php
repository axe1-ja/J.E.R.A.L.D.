<!-- Header of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/header.php');
?>


<!-- Content of page -->
<img src="/resources/storage/Images/ocean2.jpg" class="w-100 background-image" alt="">

<?php
include realpath(dirname(__DIR__,1) .'/user/components/user_nav.php');
?>

<div class="text-center p-3">

    <h1 class="titre">Tableau de Bord</h1>
    <div class="row pt-4" >
        <div class="capteurs col-12">
            <a href="/user/cardio">
                <img src="/resources/storage/Images/coeur.png" class="userImg coeur" alt="">
            </a>
            <h3 class="text-white">
                Rythme cardiaque 
            </h3>
        </div>

        <div class="capteurs col-12">
            <a href="/user/fall">
                <img src="/resources/storage/Images/chute.png" class="userImg chute" alt="">
            </a>
            <h3 class="text-white">
                Détection Chute
            </h3>
        </div>

        <div class="capteurs col-12">
            <a href="/user/sound">
                <img src="/resources/storage/Images/db.png" class="userImg db" alt="">
            </a>
            <h3 class="text-white">
                Niveau sonore
            </h3>
        </div>
        <div class="capteurs col-12">
            <a href="/user/temperature">
                <img src="/resources/storage/Images/temp.png" class="userImg temp" alt="">
            </a>
            <h3 class="text-white"> 
                Température corporelle
            </h3>
        </div>
        <div class="capteurs col-12">
            <a href="/user/environment">
                <img src="/resources/storage/Images/envi.png" class="userImg envi" alt="">
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

