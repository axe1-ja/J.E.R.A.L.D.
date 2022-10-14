<!-- Header of page -->
<?php
include '../app/views/layouts/header.php';
?>
<!-- Content of page -->
<img src="/public/resources/storage/Images/tortue3.jpg" class="w-100 background-image" alt="">

<?php
include '../app/views/general_components/navbar.php';
?>

<div class="text-center p-3">
    <div class="row">
        <div class="col-3 text-start">
            <a class="access"  class="text-white" style="color: white; font-size: 18px" href="/public/home"> 
            Accueil > 
            </a>
            <a class="access"  class="text-white" style="color: white; font-size: 18px" href="/public/histoire"> 
            Histoire
            </a>
        </div>
    </div>
</div>

<div class="container text-center p-4">
    <div class="col-md"> 
        <img src="/public/resources/storage/Images/logo-app2.png" class="logo center" alt="">
    </div>
    <div class="col-md">
            <h1 class="titre">Ékaï est né d’une volonté de créer un produit qui serait bénéfique
à tous, permettant de contrôler sa santé.... blahblah</h1>
    </div>
</div>
<!-- Footer of page -->
<?php
include '../app/views/layouts/footer.php';
?>