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
<?php
include '../app/views/user/components/user_nav.php';
?>
<img src="/public/resources/storage/Images/dechaine.jpg" class="w-100 background-image" alt="">

<div class="text-center p-3">
    <div class="row">
        <div class="col-3 text-start">
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
    <div>
        
    <div class="row pt-4" >
        <div class="col">
            <a href="/public/user/cardio">
                <img src="/public/resources/storage/Images/coeur.png" class="coeur" alt="">
            </a>
            <h3 class="text-white">
                Rythme cardiaque 
            </h3>
        </div>
    </div>

    
    <p><br></p>


    <div class="row my-3">

        <!-- Card avec les infos de l'utilisateur connecté -->
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-2">
                            <h4 class="card-title"><i class="bi bi-person-square"></i></h4>
                        </div>
                        <div class="col text-center">
                            <h4 class="card-title">User</h4>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col text-start">
                            <p class="card-text">Nom: ...</p>
                            <p class="card-text">Addresse: 75 rue ..., ..., France</p>
                            <p class="card-text">Date de naissance: ../../....</p>
                            <p class="card-text">email: ...@gmail.com</p>
                            <p class="card-text">Téléphone: +33 .. .. .. .. ..</p>
                            <p class="card-text">Contacts d'urgence: ... et ...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card avec un resumé de la santé de la peronne connectée -->
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-2">
                            <h4 class="card-title"><i class="bi bi-clipboard2-pulse"></i></h4>
                        </div>
                        <div class="col text-center">
                            <h4 class="card-title">Santé</h4>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col text-start">
                            <p class="card-text">Cardio: <span class="text-success">Très bonne condition</span></p>
                            <p class="card-text">Chute: <span class="text-success">Très bonne condition</span></p>
                            <p class="card-text">Niveau sonore: <span class="text-success">Très bonne condition</span></p>
                            <p class="card-text">Température: <span class="text-success">Très bonne condition</span></p>
                            <p class="card-text">Pollution: <span class="text-success">Très bonne condition</span></p>
                            <p class="fs-5 card-text mt-2">Général: <span class="text-success">Très bonne condition</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Card avec un resumé de la santé de la peronne connectée -->
        <div class="col">
            <a href="/public/user/temperature">
                <img src="/public/resources/storage/Images/temp.png" class="temp" alt="">
            </a>
            <h3 class="text-white"> 
                Température corporel
            </h3>
        </div>
        <div class="col pt-4">
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

