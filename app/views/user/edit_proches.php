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
            <a class="access"  class="text-white" style="color: white; font-size: 18px" href="/public/user/profile"> 
                Profil >
            </a>
            <a class="access"  class="text-white" style="color: white; font-size: 18px" href="/public/user/edit_proches"> 
                Modifier les coordonnées de vos proches
            </a>
        </div>
    </div>
</div>

<div class="container">

    <div class="row text-center">
        <div class="col-6">
            <button id="user_modification_tab_1" class="btnLookLikeLink text-white user_modification_tabs active"><h4 class="f-2">1er proche</h4></button>
        </div>
        <div class="col-6">
            <button id="user_modification_tab_2" class="btnLookLikeLink text-white user_modification_tabs"><h4 class="f-2">2eme proche</h4></button>
        </div>
    </div>

    <div class="row">
        <div class="col-12" id="content">
        </div>
    </div>
</div>

<!-- Footer of page -->
<?php
include '../app/views/layouts/footer.php';
?>