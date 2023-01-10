<!-- Header of page -->
<?php
include '../app/views/layouts/header.php';
?>


<!-- Content of page -->
<img src="/public/resources/storage/Images/fond.jpg" class="w-100 background-image" alt="">


<!-- Content of page -->
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
                Profil
            </a>
        </div>
    </div>
</div>
<div class="container">
    
    <div class="row text-center">
        <div class="col-6">
            <button id="user_profile_tab_1" class="btnLookLikeLink text-white user_profile_tabs active"><h4 class="f-2">Vos informations</h4></button>
        </div>
        <div class="col-6">
            <button id="user_profile_tab_2" class="btnLookLikeLink text-white user_profile_tabs"><h4 class="f-2">Coordonnées de vos proches</h4></button>
        </div>
    </div>

    <div id="vosInfos" class="row" style="display:block">
        <div class="col-12">
            <?php include '../app/views/user/components/vos_infos.php';?>
        </div>
    </div>

    <div id="proches" class="row" style="display:none">
        <div class="col-12">
            <?php include '../app/views/user/components/coord_proches.php';?>
        </div>
    </div>
</div>

<!-- Footer of page -->
<?php
include '../app/views/layouts/footer.php';
?>