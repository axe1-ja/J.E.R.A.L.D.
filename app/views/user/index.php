<!-- Header of page -->
<?php
include '../app/views/layouts/header.php';
?>

<?php
use \models\Member;

if (! empty($_SESSION["userId"])) {
    require_once __DIR__ . './../models/Member.php';
    $member = new Member();
    $memberResult = $member->getMemberById($_SESSION["user"]);
    if(!empty($memberResult[0]["display_name"])) {
        $displayName = ucwords($memberResult[0]["display_name"]);
    } else {
        $displayName = $memberResult[0]["name"];
    }
}
?>


<!-- Content of page -->
<img src="/public/resources/storage/Images/ocean2.jpg" class="w-100 background-image" alt="">

<?php
include '../app/views/user/components/user_nav.php';
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
        <div class="col-12">
            <a href="/public/user/cardio">
                <img src="/public/resources/storage/Images/coeur.png" class="coeur" alt="">
            </a>
            <h3 class="text-white">
                Rythme cardiaque 
            </h3>
        </div>
    </div>

    <div class="row pt-4" >
        <div class="col-4">
            <a href="/public/user/cardio">
                <img src="/public/resources/storage/Images/coeur.png" class="coeur" alt="">
            </a>
            <h3 class="text-white">
                Rythme cardiaque 
            </h3>
        </div>

        <div class="col-4">
            <a href="/public/user/fall">
                <img src="/public/resources/storage/Images/chute.png" class="chute" alt="">
            </a>
            <h3 class="text-white">
                Détection Chute
            </h3>
        </div>

        <div class="col-4">
            <a href="/public/user/sound">
                <img src="/public/resources/storage/Images/db.png" class="db" alt="">
            </a>
            <h3 class="text-white">
                Niveau sonore
            </h3>
        </div>
    </div>

    <div class="row pt-3">
        <div class="col-6">
            <a href="/public/user/temperature">
                <img src="/public/resources/storage/Images/temp.png" class="temp" alt="">
            </a>
            <h3 class="text-white"> 
                Température corporelle
            </h3>
        </div>
        <div class="col-6 pt-4">
            <a href="/public/user/environment">
                <img src="/public/resources/storage/Images/envi.png" class="envi" alt="">
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

