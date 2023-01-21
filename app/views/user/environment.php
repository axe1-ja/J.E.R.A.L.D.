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
    <div class="container">
        <h2 class="text-white square">
            Voici les données environnantes
        </h2>
    </div>
    <div class="container">
        <h2 class="text-white square">
            graphique
        </h2>
    </div>
</div>

<!-- Footer of page -->
<?php
include '../app/views/general_components/footer.php';
?>

