<!-- Header of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/header.php');
?>


<!-- Content of page -->
<?php
include realpath(dirname(__DIR__,1) .'/user/components/user_nav.php');
?>

<div class="row">
    <div class="col-12 mx-2">
        <h5> Accès Client > Profil > Modifier les coordonnées de vos proches </h5>
    </div>
</div>

<div class="container">

    <div class="row text-center">
        <div class="col-6">
            <button id="user_modification_tab_1" class="btnLookLikeLink text-muted user_modification_tabs active"><h4>1er proche</h4></button>
        </div>
        <div class="col-6">
            <button id="user_modification_tab_2" class="btnLookLikeLink text-muted user_modification_tabs"><h4>2eme proche</h4></button>
        </div>
    </div>

    <div class="row">
        <div class="col-12" id="content">
        </div>
    </div>
</div>

<!-- Footer of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/footer.php');
?>