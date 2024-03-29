<!-- Header of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/header.php');
?>


<!-- Content of page -->
<img src="/resources/storage/Images/fond.jpg" class="w-100 background-image" alt="">
<?php
include realpath(dirname(__DIR__,1) .'/user/components/user_nav.php');
?>


<div class="text-center p-3">
    <br>
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
                        <div class="col-4">Téléphone</div>
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
