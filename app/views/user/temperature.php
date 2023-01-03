<!-- Header of page -->
<?php
include '../app/views/layouts/header.php';
?>


<!-- Content of page -->
<img src="/public/resources/storage/Images/fond.jpg" class="w-100 background-image" alt="">
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
                Santé >
            </a>
            <a class="access"  class="text-white" style="color: white; font-size: 18px" href="/public/user/cardio"> 
            TC
            </a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="square">
                <h2 class="text-white"> 
                    Bonjour, <?php echo $data['user']->prenom." ".$data['user']->nom;?>
                </h2>
                <h2 class="text-white"> 
                    Votre temperature corporel est ... °C
                </h2>
        </div>
    </div>
    <div class="row">
        <p class="text-white square"> 
           graphique
        </p>
    </div>
</div>

<!-- Footer of page -->
<?php
include '../app/views/general_components/footer.php';
?>

