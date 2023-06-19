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

    <div class="row w-100">
        <div class="col-6 text-right">
            <p class='p-1'>Rythme Cardiaque: </p>
            <p class='p-1'>Co2: </p>
            <p class='p-1'>Isobutylene: </p>
            <p class='p-1'>Niveau Sonore: </p>
            <p class='p-1'>Humidité: </p>
            <p class='p-1'>Température: </p>
        </div>
        <div class="col-6 text-left">
            <p class='p-1'> <span id="userCardioValCurrent">0</span> Bpm</p>
            <p class='p-1'> <span id="co2ValCurrent">0</span> ppm</p>
            <p class='p-1'> <span id="isoValCurrent">0</span> ppb</p>
            <p class='p-1'> <span id="sonoValCurrent">0</span> mW</p>
            <p class='p-1'> <span id="humValCurrent">0</span> %</p>
            <p class='p-1'> <span id="tempValCurrent">0</span> °C</p>
        </div>
        <div class="col-12 text-center">
            <button class="btn btn-primary" id="getData">Get data</button>
        </div>
    </div>


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

