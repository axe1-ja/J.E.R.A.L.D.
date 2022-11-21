<!-- Header of page -->
<?php
include '../app/views/layouts/header.php';
?>

<!-- Content of page -->
<img src="/public/resources/storage/Images/ocean2.jpg" class="w-100 background-image" alt="">

<?php
include '../app/views/general_components/navbar.php';
?>
<div class="container px-3">  
    <div class="row mt-4">
        <div class="col-12 offset-4 text-center my-2">
            <h2 class="f-4 text-white my-2">Une question? Contactez nous.</h2>
            <p class="text-white my-2"><em>Envoyez un ticket pour reporter un problème que vous avez renconté avec notre produit ou pour nous poser une question sur les services que nous proposons.</em></p>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="card center" style="width: 40rem; background-color:#B5D7FF">
        <div class="card-body">
            <div class="row">
                <div class="col-11">
                    <div class="text-center">
                        <h2>Contactez-nous</h2>
                    </div>
                </div>
                <div class="col-1 text-right">
                    <button type="button" class="btn-close text-grey f-3" aria-label="Close" onclick="javascript:history.back()"><i class="bi bi-x-lg"></i></button>
                </div>
            </div>
            <form class="text-left">
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Nom Prénom</label>
                    <input type="text" class="form-control" id="exampleInputName" placeholder="Person Doe" id="validationCustom03" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Adresse e-mail</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@example.com" id="validationCustom03" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Votre message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" id="validationCustom03" required></textarea>
                    </div>
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 text-right">
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <p><br></p>

    <div class="row">
        <div class="col-4"></div>
        <div class="col-4 text-center text-white">
            <p><em>Vos informations personnelles ne seront ni stockées, ni partagées. Voir notre <a class="text-white text-decoration-underline" href="/public/privacy">politique de confidentialité</a>.</em></p>
        </div>
    </div>

</div>

<!-- Footer of page -->
<?php
include '../app/views/general_components/footer.php';
?>