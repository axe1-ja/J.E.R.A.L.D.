<!-- Header of page -->
<?php
include '../app/views/layouts/header.php';
?>


<!-- Content of page -->
<img src="/public/resources/storage/Images/plage.jpg" class="w-100 background-image" alt="">



<div class="container text-center p-4">
    <div class="row">
        <div class="col mt-4">
            <h1 class="titre" style="font-size: 32px">E K A Ï</h1>
        </div>
    </div>
    <div class="row home-elements">
        <div class="col-md">
            <a href="/public/user">
                <h5 class="access" id="homelink-left" class="text-white" style="font-size: 26px">
                    <i class="bi bi-caret-left"></i>
                    Accès Clients 
                </h5>  
            </a>   
        </div>
        <div class="col-md"> 
            <img src="/public/resources/storage/Images/logo-app2.png" class="logo center" alt="">
        </div>
        <div class="col-md">
            <a href="/public/product">
                <h5 class="access" id="homelink-left" class="text-white" style="font-size: 26px">
                    Découvrir le produit
                    <i class="bi bi-caret-right"></i>
                </h5>
            </a>
        </div>
    </div>
</div>



<!-- Footer of page -->
<?php
include '../app/views/layouts/footer.php';
?>