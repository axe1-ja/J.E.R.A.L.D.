<!-- Header of page -->
<?php
include '../app/views/layouts/header.php';
?>


<!-- Content of page -->
<?php
include '../app/views/user/components/user_nav.php';
?>

<div class="row">
    <div class="col mx-2">
        <h5> Accès Client > Profil</h5>
    </div>
</div>

<div class="container">

    <div class="row text-center">
        <div class="col">
            <button id="user_profile_tab_1" class="btnLookLikeLink text-muted user_profile_tabs active"><h4>Vos informations</h4></button>
        </div>
        <div class="col">
            <button id="user_profile_tab_2" class="btnLookLikeLink text-muted user_profile_tabs"><h4>Coordonnées de vos proches</h4></button>
        </div>
    </div>

    <div class="row">
        <div class="col" id="content">
        </div>
    </div>
</div>

<!-- Footer of page -->
<?php
include '../app/views/layouts/footer.php';
?>