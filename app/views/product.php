<!-- Header of page -->
<?php
include '../app/views/layouts/header.php';
?>


<!-- Content of page -->

<img src="/public/resources/storage/Images/ocean2.jpg" class="w-100 background-image" alt="">

<!-- Navbar  of page -->
<?php
include '../app/views/general_components/navbar.php';
?>

<div class="container   text-center p-3">
    <div class="row">
        <div class="col-3 text-left">
            <a class="access"  class="text-white" style="color: white; font-size: 18px" href="/public/home"> 
            Accueil > 
            </a>
            <a class="access"  class="text-white" style="color: white; font-size: 18px" href="/public/product"> 
            Produit
            </a>
        </div>
        <div class="col-6">
            <h1 class="titre">E K A Ï</h1>
        </div>
    </div>
    <div class ="content-container ">
        <div class="row center">
            <img src="/public/resources/storage/Images/Bracelet.png" class="center montre" alt="">
            <p class="txtprod "> Bracelet EKAÏ<br> 
            <br>
            69,99€<br>
            <br>
            Plus qu'un bracelet EKAÏ s'adresse à toute une génération et permet à vous, futur possesseur, d'avoir un suivi continu de votre santé ainsi qu'une étude des risques que vous pouvez rencontrer dans la vie de tout les jours.<br> 
            <br>
            Taille unique et réglable.<br>
            <br>
            <button class="favorite styled"type="button">
            Ajouter au panier
            </button>
            </p>
        </div>
    </div>
</div>

<!-- Footer of page -->
<?php
include '../app/views/layouts/footer.php';
?>