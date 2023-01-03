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
            <a class="access"  class="text-white" style="color: white; font-size: 18px" href="/public/user/fall"> 
            DC
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="card center" style="width: 25rem;">
                <div class="card-body">
                    <h4 class="card-title text-center">Contact 1</h4>
                    <div class="row">
                        <div class="col-4">Nom Prénom</div>
                        <div class="col-8">Gerald Latortue</div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-4">Adresse e-mail</div>
                        <div class="col-8">gerald.turtle@gmail.com</div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-4">Télephone</div>
                        <div class="col-8">06 45 93 27 05</div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-6">
            <div class="card center" style="width: 25rem;">
                <div class="card-body">
                    <h4 class="card-title text-center">Contact 2</h4>
                    <div class="row">
                        <div class="col-4">Nom Prénom</div>
                        <div class="col-8">Gerald Latortue</div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-4">Adresse e-mail</div>
                        <div class="col-8">gerald.turtle@gmail.com</div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-4">Télephone</div>
                        <div class="col-8">06 45 93 27 05</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer of page -->
<?php
include '../app/views/general_components/footer.php';
?>
