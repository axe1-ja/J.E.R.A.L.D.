<!-- Header of page -->
<?php
include realpath(dirname(__DIR__,1) .'/views/layouts/header.php');
?>

<!-- Content of page -->
<img src="/resources/storage/Images/fond.jpg" class="w-100 background-image" alt="">

<?php
include realpath(dirname(__DIR__,1) .'/views/general_components/navbar.php');
?>
<div class="container px-3">  
    <div class="row mt-4">
        <div class="col-12 offset-4 text-center my-2">
            <h2 class="f-4 text-white my-2">Une question? Contactez-nous.</h2>
            <p class="text-white my-2"><em>Envoyez un ticket pour reporter un problème que vous avez renconté avec notre produit ou pour nous poser une question sur les services que nous proposons.</em></p>
        </div>
    </div>
</div>

<div class="container">
    <div class="card center" style="width: 40rem;max-width:90%">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h2>Contactez-nous</h2>
                    </div>
                </div>
                <!--<div class="col-1 text-right">
                    <button type="button" class="btn-close text-grey f-3" aria-label="Close" onclick="javascript:history.back()"><i class="bi bi-x-lg"></i></button>
                </div>-->
            </div>
            <form class="text-left" action="report" method="post">
                <div class="mb-3">
                    <label for="nomprenom" class="form-label">Nom Prénom</label>
                    <input type="text" class="form-control" name="nomprenom" placeholder="Dupond Durant" id="validationCustom03" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Adresse e-mail</label>
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="nom@exemple.com" id="validationCustom03" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Votre message</label>
                    <textarea class="form-control" name="message" rows="3" id="validationCustom03" required></textarea>
                    </div>
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 text-right">
                            <button type="submit" class="btn btn-outline-primary">Envoyer</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <p><br></p>
</div>
<div class="row">
    <div class="col-4"></div>
    <div class="col-4 text-center text-white">
        <p><em>Vos informations personnelles ne seront ni stockées, ni partagées. Voir notre <a class="text-white text-decoration-underline" href="/privacy"><u class='text-white'> politique de confidentialité</u></a>.</em></p>
    </div>
</div>

<!-- Footer of page -->
<?php
include realpath(dirname(__DIR__,1) .'/views/general_components/footer.php');
?>