<!-- Header of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/header.php');
?>


<!-- Content of page -->
<img src="/public/resources/storage/Images/fond.jpg" class="w-100 background-image" alt="">
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
                Santé >
            </a>
            <a class="access"  class="text-white" style="color: white; font-size: 18px" href="/public/user/sound"> 
            NS
            </a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-6">
                <h2 class="text-white"> 
                    Bonjour, <?php echo $data['user']->prenom." ".$data['user']->nom;?>
                </h2>
                <h2 class="text-white"> 
                    Le niveau sonore autour de vous est 
                </h2>
            </div>
            <div class="col-6">
                <h2 class="text-white square bg-green"> 
                    normal
                </h2>
                <h2 class="text-white square bg-red"> 
                    élevé
                </h2>
            </div>
        </div>
    </div>
    <div class="#">
        <p class="text-white square"> 
            105 dB(A) : Risques immédiats/ court terme pour l'audition <br>
            85-105 dB(A) : Risques à moyen/long terme pour l'audition si exposition chronique : pertes auditives <br>
            40 dB(A) la nuit et de 55 dB(A) le jour : effets extra-auditifs du bruit 
        </p>
    </div>
</div>

<!-- Footer of page -->
<?php
include '../app/views/general_components/footer.php';
?>
