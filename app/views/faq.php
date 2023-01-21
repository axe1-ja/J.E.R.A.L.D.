<!-- Header of page -->
<?php
include realpath(dirname(__DIR__,1) .'/views/layouts/header.php');
?>


<!-- Content of page -->

<img src="/resources/storage/Images/ocean2.jpg" class="w-100 background-image" alt="">

<!-- Navbar  of page -->
<?php
include realpath(dirname(__DIR__,1) .'/views/general_components/navbar.php');
?>

<div class="container p-3">

    <br>

    <div class="titre text-center">Foire Aux Questions (F.A.Q)</div>
    <div class="f-2 text-white text-center">
        Ici sont réunies les questions les plus fréquemment posées par les utilisateurs.
    </div>

    <br>

    <div class="card center">
        <div class="row">
            <?php foreach($faqs as $faq) :?>
                <div class="break-col-4-md p-3">
                    <p class="text-primary f-2"><?php echo $faq->question;?></p>
                    <p><?php echo $faq->answer;?></p>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
</div>

<!-- Footer of page -->
<?php
include realpath(dirname(__DIR__,1) .'/views/layouts/footer.php');
?>